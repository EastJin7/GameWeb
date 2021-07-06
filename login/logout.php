<?php
include("../head.php");

  //清除 cookie 內容
  setcookie("id", "");
  setcookie("passed", "");
  session_start();
  session_unset();
  session_destroy();
	
  //將使用者導回主頁
  header("location:http://".$jx3_Path."index.php");
?>