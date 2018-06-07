<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$name_1 = $_POST['name_1'] ;
	$name_2 = $_POST['name_2'] ;
	$new_name = $_POST['new_name'] ;

	do {
		$db->query("SET autocommit = 0;") ;
		$db->query("start transaction;") ;

		#================================================================
		$sql_1 = "SELECT * FROM board WHERE board.title = '$name_1'" ;
		$result_1 = $db->query($sql_1) or die($db->error) ;
		$num_of_board_1 = mysqli_num_rows($result_1) ;
	
		if($num_of_board_1 == 0) {
			$db->query("ROLLBACK;") ;
			$db->query("SET autocommit = 1;") ;
	
			echo "<script> 
						alert(\"첫 번째 게시판이 존재하지 않습니다.\")  
						</script>";
		
			echo "<script>
						location.replace('./board.php') ;
						</script>" ;

			break;
		} 
	
		$row = $result_1->fetch_assoc() ;
		$id_1 = $row['id'] ;
		$count_1 = $row['post_count'] ;
	
		#=================================================================		
		$sql_2 = "SELECT * FROM board WHERE board.title = '$name_2'" ;
		$result_2 = $db->query($sql_2) or die($db->error) ;
		$num_of_board_2 = mysqli_num_rows($result_2) ;
	
		if($num_of_board_2 == 0) {
			$db->query("ROLLBACK;") ;
			$db->query("SET autocommit = 1;") ;

			echo "<script> 
						alert(\"두 번째 게시판이 존재하지 않습니다.\")  
						</script>";
		
			echo "<script>
						location.replace('./board.php') ;
						</script>" ;

			break;
		} 
		$row =$result_2->fetch_assoc()  ;
		$id_2 = $row['id'] ;
		$count_2 = $row['post_count'] ;

		#===================================================================
		try {

			# create new board 
			$sql = "INSERT INTO board (title) VALUES('".$new_name."')" ;
			$result = $db->query($sql) or die($db->error) ;

			# change post information with new board 
			$new_id = $db->insert_id;
			$sql = 'UPDATE post 
							SET board_id ='.$new_id.' 
							WHERE (board_id = '.$id_1.' 
										OR board_id = '.$id_2.');' ;
			$result = $db->query($sql) or die($db->error) ;

			# update num_of_post value of new post
			$new_count = $count_1 + $count_2 ;
			$sql_update = 'UPDATE board
										SET post_count = '.$new_count.'
										WHERE id = '.$new_id.';' ;
			$result = $db->query($sql_update) or die($db->error) ;


			$sql_delete = 'DELETE FROM board 
										 WHERE board.id = '.$id_1.' 
										    OR board.id = '.$id_2.';' ;
			$result = $db->query($sql_delete) or die($db->error) ;

			$db->query("COMMIT;") ;
			$db->query("SET autocommit = 1;") ;
		} catch (Exception $e) {
			$db->query("ROLLBACK;") ;
			$db->query("SET autocommit = 1;") ;
		}

		echo "<script>
		location.replace('./board.php?board_id=".$new_id."') ;
		</script>" ;

	}while(false);
?>
