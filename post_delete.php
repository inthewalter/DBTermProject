<?php
	require_once("./dbconfig.php") ;
	$post_id = $_GET['post_id'] ;
	$board_id = $_GET['board_id'] ;

	$sql_delete = 'DELETE FROM post WHERE post.id='.$post_id.';' ;
	$result_delete = $db->query($sql_delete) or die($db->error) ;

	echo "<script>
	location.replace('./board.php?board_id=".$board_id."') ;
	</script>" ;
?>
