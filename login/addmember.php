<?php
  session_start();
  require_once("../dbtools.inc.php");
  
  //取得表單資料
  $account = $_POST["account"];
  $password = $_POST["password"]; 
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $job = $_POST["job"]; 	
  
  //建立資料連接
  $link = create_connection();
			
  //檢查帳號是否有人申請
  $sql = "SELECT * FROM users Where account = '$account'";
  $result = execute_sql($link, "db1021241244", $sql);

  //如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    //釋放 $result 佔用的記憶體
    mysqli_free_result($result);
		
    //要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "javascript:history.go(-1);";
    echo "</script>";
  }
	
  //如果帳號沒人使用
  else
  {

    //執行 SQL 命令，新增此帳號
	$sql = "INSERT INTO users (account, password, name, email, job) VALUES ('$account', 
		'$password', '$name', '$email', '$job')";
    $result = execute_sql($link, "db1021241244", $sql);
	
	//從當前行數取得 id 欄位
    $id = mysqli_fetch_object($result)->id;
	
	//釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
	
	setcookie("id", $id);
    setcookie("passed", "TRUE");
  }
	
  //關閉資料連接	
  mysqli_close($link);
?>
 
 <!<!doctype html>
<html>
<div data-role="page" id="addSuccess" class = "ui-responsive-panel">
<head>
<meta charset="utf-8">
    <title>會員登入</title>
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

      <div data-role="header" data-position="fixed" data-theme="b">
	    <h1 id="registed">完成註冊</h1>
      </div>
	  <p align="center"><img src="success.jpg"></p>  
	  
	<script type="text/javascript">
	$( document ).one( "pageshow", function()
    {
		var time = 15000;
		!function MyCounter(){
			if(time<=0){
				//倒數完成
			}else{
			setTimeout(MyCounter, 1000);
			}
		time-=1000; 
		}();
		var tID = setInterval(myFunc01 , 1000);
		count++;
		sec = 10-count;
		document.getElementById("sec").innerHTML=(time/1000);
		}
	}
	</script>
	</head>
<body>
  <div data-role="main" class="ui-content" class="center-button" style="width:50%;position:relative; left:330px;">
    <h2 align="center" id="restatus">恭喜您已經註冊成功，請妥善保管您的帳號</h2>
	<div data-role="main" class="ui-content">
    <div data-role="collapsible">
      <h3>點擊確認帳號密碼</h3>
      <p align="center">帳號：<?php echo $account ?></p>
	<p align="center">密碼：<?php echo $password ?></p>
    </div>
	</div>
    
	<a href="../index.php" class="ui-btn" data-inline="false">返回登入頁面</a>
	
	<h3 align="center"><span id="sec">15</span> 秒後將自動跳轉至主頁面……</h3>
	<meta http-equiv="refresh" content="15;url=../index.php">
	<script type="text/javascript">
  </div>
</div>
  </body>
</html>