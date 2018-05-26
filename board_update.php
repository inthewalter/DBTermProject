<?php
	require_once("./frame-top.php") ;
	$board_id = $_GET['board_id'] ;

	$sql_update = "SELECT * FROM board WHERE id =".$board_id.";" ;
	$result_update = $db->query($sql_update) or die($db->error) ;
	$row_update = $result_update->fetch_assoc() ;
?>

<form action="./board_update_action.php" method="post">
	<input type="hidden" name="board_id" value="<?php echo $board_id; ?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="title" id="title">
    <label class="mdl-textfield__label" for="title">
		<?php echo $row_update['title']; ?>의 새로운 이름을 입력해주세요.</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시판 이름 바꾸기 완료!
	</button>
</form>

<?php
	require_once("./frame-bottom.php");
?>
