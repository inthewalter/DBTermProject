<?php
	require_once("./dbconfig.php") ;
	$board_id = $_GET['board_id'] ;

	$sql_delete = 'DELETE FROM board WHERE board.id='.$board_id.';' ;
	$result_delete = $db->query($sql_delete) ;

	echo "<script>
	location.replace('./board.php') ;
	</script>" ;
?>
