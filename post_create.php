<?php
require_once("./frame-top.php") ;
?>

<form action="./post_create_action.php" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="title" id="title">
    <label class="mdl-textfield__label" for="title">게시물의 제목을 입력해주세요.</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="writer" id="writer">
    <label class="mdl-textfield__label" for="writer">게시물의 작성자를 입력해주세요.</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="content" id="content">
    <label class="mdl-textfield__label" for="content">게시물의 내용을 입력해주세요.</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시물 작성!
	</button>
</form>

<?php
require_once("./frame-bottom.php");
?>
