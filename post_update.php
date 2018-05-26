<?php
	require_once("./frame-top.php") ;
	$post_id = $_GET['post_id'] ;
	$board_id = $_GET['board_id'] ;

	$sql_update = "SELECT * FROM post WHERE id =".$post_id.";" ;
	$result_update = $db->query($sql_update) or die($db->error) ;
	$row_update = $result_update->fetch_assoc() ;
?>

<form action="./post_update_action.php" method="post">
  <input type="hidden" name="board_id" value="<?php echo $board_id;?>">
	<input type="hidden" name="post_id" value="<?php echo $post_id;?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="title" id="title" value="<?php echo $row_update['title']; ?>">
    <label class="mdl-textfield__label" for="title">제목을 수정해주세요.</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="writer" id="writer" value="<?php echo $row_update['writer']; ?>">
    <label class="mdl-textfield__label" for="writer">작성자를 수정해주세요.</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="content" id="content" value="<?php echo $row_update['content']; ?>">
    <label class="mdl-textfield__label" for="content">내용을 수정해주세요.</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시물 수정 완료!
	</button>
</form>

<?php
	require_once("./frame-bottom.php");
?>
