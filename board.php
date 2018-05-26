<?php
	require_once("./frame-top.php");			
?>
			<a href="./post_create.php?board_id=<?php echo $board_id;?>">
				<button class="add-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
					<i class="material-icons">add</i>POST CREATE
				</button>
			</a>
			<?php
			$sql_post = 'SELECT * FROM post WHERE board_id = '.$board_id.';' ;
			$result_post = $db->query($sql_post) ;
			while($row_post = $result_post->fetch_assoc()) {
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
								<?php
								echo $row_post['content'] ;
								?>
              </div>
              <div class="mdl-card__actions mdl-card--border">
								<?php
								echo "<a href='./post.php?board_id=".$board_id."&post_id=".$row_post['id']."' class='mdl-button mdl-js-button mdl-js-ripple-effect'>Read More</a>" ;
								?>
              </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>
          </div>
        </div>
			<?php
			}
			require_once("./frame-bottom.php");			
			?>

