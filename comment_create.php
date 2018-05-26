<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$post_id = $_POST['post_id'] ;
	$writer = $_POST['writer'] ;
	$content = $_POST['content'] ;

	$sql = "INSERT INTO comment (post_id, writer, content) VALUES(
		'".$post_id."',
		'".$writer."',
		'".$content."'
		)" ;
	$result = $db->query($sql) or die($db->error) ;

	echo "<script>
	location.replace('./post.php?post_id=".$post_id."') ;
	</script>" ;
?>
