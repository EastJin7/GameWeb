<?php
	$jx3_Root = $_SERVER['DOCUMENT_ROOT'].'/php1021241244/';
	$jx3_Path = $_SERVER['HTTP_HOST'].'/php1021241244/';

	 if (!isset($_SESSION)) {session_start();}
	if (isset($_SESSION["userAccount"]))
	  {
		$userAccount = $_SESSION['userAccount'];
		$userName = $_SESSION['userName'];
	  }
	
	/*檢查 cookie 中的 passed 變數是否等於 TRUE
	$passed = $_COOKIE["passed"];
	
	  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 index	*/
  /*if ($passed != "TRUE")
  {
    header("location:index.php");
  }*/
  if (!isset($userAccount))
          header("location:http://".$jx3_Path."index.php");
?>