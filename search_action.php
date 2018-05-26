<?php
	require_once("./dbconfig.php");

	$search = $_POST['search'];
	$sql = "INSERT INTO board (title) VALUES('".$search."')" ;
	$result = $db->query($sql) or die($db->error);
?>
	<script>
		location.replace("./board.php");
	</script>
