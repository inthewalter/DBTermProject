<?php
  require_once("./dbconfig.php") ;

	if (isset($_GET['board_id'])) {
		$board_id = $_GET['board_id'] ;
  }
	else {
		$sql = 'SELECT * FROM board' ;
		$result = $db->query($sql) ;
		$row = $result->fetch_assoc() ;
	  $board_id = $row['id'] ;
	}
  $sql = 'SELECT * FROM board' ;
  $result = $db->query($sql) ;

	$sql2 = 'SELECT * FROM board WHERE id = '.$board_id.';' ;
	$result2 = $db->query($sql2) ;
	$row2 = $result2->fetch_assoc() ;
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>DB Term Project</title>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
		<link rel="stylesheet" href="$$hosted_libs_prefix$$/$$version$$/material.grey-orange.min.css">
    <link rel="stylesheet" href="./styles.css">
  </head>

  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">
					<?php
            echo "<a href='./board.php?board_id=".$board_id."'>".$row2['title']."</a>" ;
            echo "(".$row2['post_count'].")" ;
					?>
					</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
						<form action="./search_result.php?board_id=0" method="post">
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" name="search" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
						</form>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item" href="#">
							<?php
							echo "<a href='./board_update.php?board_id=".$board_id."'>게시판 UPDATE</a>" ;
							?>
						</li>
            <li class="mdl-menu__item">
							<?php
							echo "<a href='./board_delete.php?board_id=".$board_id."'>게시판 DELETE</a>"
							?>
						</li>
          </ul>
        </div>
      </header>
      <!-- 좌측 메뉴 -->
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
    	  <?php
    	  while($row = $result->fetch_assoc()) {
    	    echo "<a class='mdl-navigation__link' href='./board.php?board_id=".$row['id']."'>".$row['title']."</a>" ;
    	  }
    	  ?>
				<a class='mdl-navigation__link' href='./board_create.php'><i class="material-icons">add</i>Board Create</a>
				<a class='mdl-navigation__link' href='./board_union.php'><i class="material-icons">add</i>Board_UNION</a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
