<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$post_id = $_POST['post_id'] ;
	$title = $_POST['title'] ;
	$writer = $_POST['writer'] ;
	$content = $_POST['content'] ;

	$sql = "UPDATE post
		SET title = '".$title."',
				writer = '".$writer."',
				content = '".$content."'
		WHERE id =".$post_id.";" ;
	$result = $db->query($sql) or die($db->error) ;

	echo "<script>
	location.replace('./post.php?post_id=".$post_id."') ;
	</script>" ;
?>
