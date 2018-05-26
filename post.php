<?php
	require_once("./frame-top.php");			
	if (isset($_GET['post_id'])) {
		$post_id = $_GET['post_id'] ;
	}
	else {
	?>
		<script>
			alert("오류가 발생했습니다.") ;
			location.href="./board.php"
		</script>
	<?php
	}
			$sql_post = 'SELECT * FROM post WHERE id = '.$post_id.';' ;
			$result_post = $db->query($sql_post) ;
			$row_post = $result_post->fetch_assoc() ;
			?>
        <div class="mdl-grid demo-content">
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">
								<?php
								echo $row_post['title'] ;
								?>
								</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
							  <div class="post-metadata">
								<?php
								echo $row_post['writer'] ;
								echo "<br>" ;
								echo $row_post['time'] ;
								echo "<br>" ;
								?>
								<a href="post_delete.php?board_id=<?php echo $board_id; ?>&post_id=<?php echo $post_id; ?>">
									<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
										<i class="material-icons">delete</i>
									</button>
								</a>
								<a href="post_update.php?board_id=<?php echo $board_id; ?>&post_id=<?php echo $post_id; ?>">
									<button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
										<i class="material-icons">edit</i>
									</button>
								</a>
								</div>
								<?php
								echo $row_post['content'] ;
								?>
              </div>
              <div class="mdl-card__actions mdl-card--border">
							<?php
								include("./comment.php") ;
							?>
          </div>
        </div>
			</div>
			</div>
			<?php
			require_once("./frame-bottom.php");			
			?>

