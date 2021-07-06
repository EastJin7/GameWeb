<!doctype html>
<html>
<?php include("../head.php");
    require_once($jx3_Root."dbtools.inc.php");
	
    //取得 modify.php 網頁的表單資料
    $id = $_COOKIE["id"];
    $account = $_POST["account"];
    $password = $_POST["password"]; 
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $job = $_POST["job"]; 
		
    //建立資料連接
    $link = create_connection();
				
    //執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE users SET password = '$password', name = '$name', 
            email = '$email', job = '$job' WHERE id = $id";
    $result = execute_sql($link, "db1021241244", $sql);
		
    //關閉資料連接
    mysqli_close($link);
?>
	
  <head>
	  <p align="center"><img src="success.jpg"></p>  
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
	 <?php include($jx3_Root."panels.php"); ?>
<div data-role="page" id="update" data-quicklinks="true" class = "ui-responsive-panel" data-ajax="false"><!--page -->
<?php include($jx3_Root."menu.php"); ?>
  <div data-role="main" class="ui-content" class="center-button" style="width:50%;position:relative; left:330px;"><!--content -->
    <h3 align="center" ><?php echo $name ?>，您的修改已經生效。</h3>
	
	
	
	<div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h2>點擊確認個人資料</h2>
	  <ul data-role="listview">
    <li><h3>帳號：<?php echo $account ?></h3></li>
	<li><h3>密碼：<?php echo $password ?></h3></li>
	<li><h3>暱稱：<?php echo $name ?></</h3></li>
	<li><h3>Email：<?php echo $email ?></h3></li>
	<li><h3>門派：<?php echo $job ?></h3></li>
	</ul>
	</div>
	</div>
	<a href="../main.php" class="ui-btn" data-inline="false">返回主畫面</a>
	</div><!--/content -->

  </div><!--/page -->
    </body>
</html>