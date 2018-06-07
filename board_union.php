<?php
require_once("./frame-top.php") ;
?>

<form action="./board_union_action.php" method="post">
  <input type="hidden" name="board_id" value="<?php echo $board_id;?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="name_1" id="name_1">
    <label class="mdl-textfield__label" for="title">첫 번째 게시판 이름을 입력해주세요</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="name_2" id="name_2">
    <label class="mdl-textfield__label" for="writer">두 번째 게시판 이름을 입력해주세요</label>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" name ="new_name" id="new_name">
    <label class="mdl-textfield__label" for="content">새로 만들 게시판 이름을 입력해주세요</label>
  </div>
	<br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
		게시판 합치기!
	</button>
</form>

<?php
require_once("./frame-bottom.php");
?>
