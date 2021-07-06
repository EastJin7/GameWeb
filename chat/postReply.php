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
	
  $subject = $_POST["resubject"]; 
  $content = $_POST["textreply"]; 
  $current_time = date("Y-m-d H:i:s");
  $reply_id = $_POST["reply_id"];

    //建立資料連接
    $link = create_connection();

    //執行SQL查詢
  $sql = "INSERT INTO reply_message(author, subject, content, date, reply_id) 
          VALUES ('$login_user', '$subject', '$content', '$current_time', '$reply_id')";
  $result = execute_sql($link, "db1021241244", $sql);

  //關閉資料連接
  mysqli_close($link);
  
  //將網頁重新導向
  header("location:showSubject.php?id=" . $reply_id);
  exit();
?>