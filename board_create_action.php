<?php
	require_once("./dbconfig.php") ;

	$title = $_POST['title'] ;
	$sql = "INSERT INTO board (title) VALUES('".$title."')" ;
	$result = $db->query($sql) or die($db->error) ;

	// echo "<script>
	// location.replace('./board.php?board_id=".$board_id."') ;
	// </script>" ;
?>
	<script>
		location.replace("./board.php") ;
	</script>
