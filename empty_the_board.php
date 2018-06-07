<?php
	require_once("./dbconfig.php") ;

	$db->query("start transaction;") ;

	$board_id = $_GET['board_id'] ;

	$sql_delete = 'DELETE FROM post WHERE post.board_id = '.$board_id.';' ;
	$db->query($sql_delete) or die($db->error) ;
	
	$db->query("COMMIT;") ;

	echo "<script>
	location.replace('./board.php?board_id=".$board_id."') ;
	</script>" ;
?>
