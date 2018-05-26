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

	$last_id = $db->insert_id;
	echo "<script>
	location.replace('./post.php?post_id=".$last_id."') ;
	</script>" ;
?>
