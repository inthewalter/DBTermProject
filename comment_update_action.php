<?php
	require_once("./dbconfig.php") ;

	$board_id = $_POST['board_id'] ;
	$post_id = $_POST['post_id'] ;
	$comment_id = $_POST['comment_id'] ;
	$writer = $_POST['writer'] ;
	$content = $_POST['content'] ;

	$sql = "UPDATE comment
		SET writer = '".$writer."',
				content = '".$content."'
		WHERE id =".$comment_id.";" ;
	$result = $db->query($sql) or die($db->error) ;

	echo "<script>
	location.replace('./post.php?post_id=".$post_id."') ;
	</script>" ;
?>
