<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$title = $_POST['title'] ;

	$sql = "UPDATE board SET title = '".$title."' WHERE id =".$board_id.";" ;
	$result = $db->query($sql) or die($db->error) ;

	echo "<script>
	location.replace('./board.php?board_id=".$board_id."') ;
	</script>" ;
?>
