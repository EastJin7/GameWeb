<!doctype html>
<html>
<?php
include("../head.php");

  //檢查 cookie 中的 passed 變數是否等於 TRUE 
  $passed = $_COOKIE{"passed"};
	
  //如果 cookie 中的 passed 變數不等於 TRUE
  //表示尚未登入網站，將使用者導向首頁 index.html
  if ($passed != "TRUE")
  {
    header("location:../index.html");
    exit();
  }
	
  //如果 cookie 中的 passed 變數等於 TRUE
  //表示已經登入網站，取得使用者資料	
  else
  {
    require_once("../dbtools.inc.php");
		
    $id = $_COOKIE{"id"};
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM users Where id = $id";
    $result = execute_sql($link, "db1021241244", $sql);
		
    $row = mysqli_fetch_assoc($result);  
  }
?>
  <head>
    <script type="text/javascript">
     $( document ).one( "pageshow", function()
    {
		var warn = "標示「*」欄位請務必填寫。";
		document.getElementById("updated").innerHTML=warn;
	});
    function check_data()
      {
        if (document.myForm.account.value.length == 0)
        {
          warn = "帳號不可為空。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
        else if (document.myForm.account.value.length > 10)
        {
          warn = "帳號不可超過10個字元。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
        else if (document.myForm.password.value.length == 0)
        {
          warn = "密碼不可為空。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
        else if (document.myForm.password.value.length > 10)
        {
          warn = "密碼不可超過10個字元。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
        else if (document.myForm.re_password.value.length == 0)
        {
          warn = "「密碼確認」為必填欄位。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
        else if (document.myForm.password.value != document.myForm.re_password.value)
        {
          warn = "請再次確認您的密碼。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
		else if (document.myForm.name.value == 0)
        {
          warn = "請輸入暱稱。"
		  document.getElementById("updated").innerHTML=warn;
		  return false;
        }
		else
		{
			myForm.submit();
		}
      }
    </script>		
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
	<?php include($jx3_Root."panels.php"); ?>
	<div data-role="page" id="modify" class = "ui-responsive-panel" data-ajax="false"><!-- page -->
	<?PHP include($jx3_Root."menu.php");?>
	
	<div data-role="main" class="ui-content"><!--content -->
	
	<h4 align="center">修改資料</h4>
	<p id="updated" align="center" style="color:Tomato;"></p>
	
	<form method="post" action="update.php" name="myForm" style="width:50%;position:relative; margin:0px auto;">
		<label for="username">*帳號：<?php echo $row{"account"} ?></label>
		<input type="hidden" name="account" value="<?php echo $row{"account"} ?>">
		<label for="userpwd">*密碼：</label>
		<input type="password" name="password" id="password" size="15" data-clear-btn="true" placeholder="請輸入密碼" value="<?php echo $row{"password"} ?>">
		<label for="userpwd">*密碼確認：</label>
		<input type="password" name="re_password" id="re_password" size="15" data-clear-btn="true" placeholder="請輸入與上面相同的密碼" value="<?php echo $row{"password"} ?>">
		<label for="username">*暱稱：</label>
		<input type="text" name="name" id="name" size="8" data-clear-btn="true" placeholder="輸入想對外顯示的名稱" value="<?php echo $row{"name"} ?>">
		<label for="usermail">E-mail：</label>
		<input type="text" name="email" id="email" size="35" data-clear-btn="true" placeholder="xxx@mail.com" value="<?php echo $row{"email"} ?>">
 

	  <div class="ui-field-contain">
	  <label for="job">門派：</label>
        <select name="job" id="job" data-native-menu="false" value="<?php echo $row{"job"} ?>">
         <option value="天策">天策</option>
         <option value="萬花">萬花</option>
         <option value="純陽">純陽</option>
         <option value="七秀">七秀</option>
         <option value="少林">少林</option>
         <option value="藏劍">藏劍</option>
		 <option value="唐門">唐門</option>
		 <option value="五毒">五毒</option>
		 <option value="明教">明教</option>
		 <option value="丐幫">丐幫</option>
         <option value="蒼雲">蒼雲</option>
		 <option value="長歌">長歌</option>
		 <option value="霸刀">霸刀</option>
		 <option value="蓬萊">蓬萊</option>
		 <option value="凌雪">凌雪</option>
        </select>
	   </div>
	<input input type="button" data-inline="false" value="修改" onClick="check_data()">
	 <input type="reset" value="重填" class="ui-btn ui-btn-inline">
	 </form>
	</div><!--/content -->
	
	</div><!--/page -->
  </body>
</html>
<?php
    //釋放資源及關閉資料連接
    mysqli_free_result($result);
    mysqli_close($link);
?>