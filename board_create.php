<?php
require_once("./frame-top.php") ;
?>

<form action="./board_create_action.php" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="title" id="title">
    <label class="mdl-textfield__label" for="title">새로만들 게시판 이름을 입력하세요.</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시판 만들기!
	</button>
</form>

<?php
require_once("./frame-bottom.php");
?>
