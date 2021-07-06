<?php
  require_once("../dbtools.inc.php");
  
  $sub_id = $_GET["id"];
  
  //取得登入者帳號
  session_start();
  $userAccount = $_SESSION["userAccount"];
  
  //建立資料連接
  $link = create_connection();
  
  //搜尋subject
  $sql = "SELECT * FROM message WHERE id = $sub_id
          AND EXISTS(SELECT '*' FROM reply_message WHERE reply_id = $sub_id)";
  $result = execute_sql($link, "db1021241244", $sql);
  
  //刪除subject
  $sql = "DELETE FROM message WHERE id = $sub_id";
  execute_sql($link, "db1021241244", $sql);

  //刪除subject下的留言
  $sql = "DELETE FROM reply_message WHERE reply_id = $sub_id";
  execute_sql($link, "db1021241244", $sql);
  	
  //釋放記憶體並關閉資料連接
  mysqli_free_result($result);
  mysqli_close($link);

  header("location:./index.php");
?>