<?php
  require_once("./dbconfig.php") ;

  $sql_comment = "SELECT * FROM comment WHERE post_id=".$post_id.";";
  $result_comment = $db->query($sql_comment) or die($db->error) ;
  // $row_comment = $result_comment->fetch_assoc() ;
?>
<div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
  <?php
  while($row_comment = $result_comment->fetch_assoc()) {
  ?>
  <div class="comment mdl-color-text--grey-700">
    <header class="comment__header">
      <div class="comment__author">
        <strong><?php echo $row_comment['writer']; ?></strong>
        <span><?php echo $row_comment['time']; ?></span>
      </div>
    </header>
    <div class="comment__text">
      <?php echo $row_comment['content']; ?>
    </div>
		<a href="comment_update.php?board_id=<?php echo $board_id; ?>&post_id=<?php echo $post_id; ?>&comment_id=<?php echo $row_comment['id'];?>">
			<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
				<i class="material-icons">edit</i>
			</button>
		</a>
		<a href="comment_delete.php?board_id=<?php echo $board_id; ?>&post_id=<?php echo $post_id; ?>&comment_id=<?php echo $row_comment['id']; ?>">
			<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
				<i class="material-icons">delete</i>
			</button>
		</a>
  </div>
  <br>
  <br>
  <?php
  }
  ?>

  <form action="comment_update.php" method="post" class="comment-form">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" id="writer">
      <label class="mdl-textfield__label" for="writer">comment writer</label>
    </div>
    <br>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <textarea rows=10 class="mdl-textfield__input" id="content"></textarea>
      <label for="content" class="mdl-textfield__label">comment content</label>
    </div>
    <br>
    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
      <i class="material-icons" role="presentation">check</i>
    </button>
  </form>
</div>
