<?php
session_start();
if (isset($_SESSION["userAccount"]))
	  {
		if ($passed == "TRUE")
		{
			  header("location:http://".$jx3_Path."main.php");
		}
	  }
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>會員登入</title>
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
   <script type="text/javascript">
	$( document ).one( "pageshow", function()
    {
		var warn = "如果頁面未正確載入，請按F5重新整理。";
		document.getElementById("updated").innerHTML=warn;
	});
      function check_data()
      {
        if (document.myForm.account.value.length == 0)
	      warn = "帳號不可為空。";
        else if (document.myForm.password.value.length == 0)
	      warn = "密碼不可為空。";
        else 
          myForm.submit();
	  
	  document.getElementById("updated").innerHTML=warn;
      }
    </script>
  <body>
  <div data-role="page" id="home" data-ajax="false">
      <div data-role="header" data-position="fixed"  data-theme="b">
	    <h3>會員登入</h3>
      </div>
	  
	  <p align="center"><img src="member.jpg"></p>  
	  
	  <div data-role="main" class="ui-content">
	  <h4 align="center">本站需要登入會員才可以儲存個人資料。</h4>
	  <p id="updated" align="center" style="color:Tomato;"></p>
	  
	  	<form action="login/checkpwd.php" method="post" name="myForm" style="width:40%;position:relative; left:400px;">
		  <div data-role="fieldcontain">
		    <label for="username">帳號：</label>
		    <input type="text" name="account" id="account" size="15" data-clear-btn="true" value=<?php $account?>>
		    <label for="userpwd">密碼：</label>
		    <input type="password" name="password" id="password" size="15" data-clear-btn="true" value=<?php $password?>>
		  </div>
		  
		  <div is="grid" class="ui-grid-a" style="height:55px">
      <div is="block" class="ui-block-a" style="height:100%">
	  <a href="login/join.html" class="ui-btn ui-btn-icon-left ui-icon-plus">加入會員</a>
	  </div>
      <div is="block" class="ui-block-b" style="height:100%">
	  <a href="search_pwd.html" class="ui-btn ui-btn-icon-left ui-icon-search">忘記密碼</a>
	  </div>
    </div>
		    <input type="button" value="登入" class="ui-btn ui-btn-inline" onClick="check_data()">
			<input type="reset" value="重填" class="ui-btn ui-btn-inline">
		</form>			
	  </div>      
    </div>
</html>