<?php
	require_once("./dbconfig.php") ;

	$title = $_POST['title'] ;
	$sql = "INSERT INTO board (title) VALUES('".$title."')" ;
	$result = $db->query($sql) or die($db->error) ;

	$last_id = $db->insert_id;
	echo "<script>
	location.replace('./board.php?board_id=".$last_id."') ;
	</script>" ;
?>
