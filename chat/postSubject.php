<?php
  require_once("../dbtools.inc.php");
  
//取得登入者名稱
  session_start();
	  if (isset($_SESSION["userAccount"]))
	  {
        $login_user = $_SESSION["userAccount"];
	  }
	  if (!isset($login_user))
        header("location:../index.php");
	
  $subject = $_POST["subject"]; 
  $content = $_POST["content"]; 
  $author = $_POST["author"]; 
  $current_time = date("Y-m-d H:i:s");

  //建立資料連接
  $link = create_connection();
			
  //執行SQL查詢
  $sql = "INSERT INTO message(author, subject, content, date)
          VALUES ('$author', '$subject', '$content', '$current_time')";
  $result = execute_sql($link, "db1021241244", $sql);

  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  header("location:./index.php");
  exit();
?>