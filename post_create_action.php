<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$title = $_POST['title'] ;
	$writer = $_POST['writer'] ;
	$content = $_POST['content'] ;

	$sql = "INSERT INTO post (board_id, title, writer, content) VALUES(
		'".$board_id."',
		'".$title."',
		'".$writer."',
		'".$content."'
		)" ;
	$result = $db->query($sql) or die($db->error) ;

	// post로 바로 갈 수 있도록 바꿔야함
	echo "<script>
	location.replace('./board.php?board_id=".$board_id."') ;
	</script>" ;
?>
