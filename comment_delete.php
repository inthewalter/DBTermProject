<?php
	require_once("./dbconfig.php") ;
	$post_id = $_GET['post_id'] ;
	$board_id = $_GET['board_id'] ;
	$comment_id = $_GET['comment_id'] ;

	$sql_delete = 'DELETE FROM comment WHERE comment.id='.$comment_id.';' ;
	$result_delete = $db->query($sql_delete) or die($db->error) ;

	echo "<script>
	location.replace('./post.php?post_id=".$post_id."') ;
	</script>" ;
?>
