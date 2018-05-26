<?php
require_once("./frame-top.php") ;
$board_id = $_GET['board_id'] ;
?>

<form action="./post_create_action.php" method="post">
  <input type="hidden" name="board_id" value="<?php echo $board_id;?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="title" id="title">
    <label class="mdl-textfield__label" for="title">제목을 입력해주세요.</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="writer" id="writer">
    <label class="mdl-textfield__label" for="writer">작성자를 입력해주세요.</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="content" id="content">
    <label class="mdl-textfield__label" for="content">내용을 입력해주세요.</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시물 작성!
	</button>
</form>

<?php
require_once("./frame-bottom.php");
?>
