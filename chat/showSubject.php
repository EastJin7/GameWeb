<!doctype html>
<html>
<?php	include("../head.php");?>
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
      function check_reply()
      {
		  
		if (document.myForm.textreply.value.length == 0)
          warn="請輸入回覆內容";
        else
		{
		var str = $("#textreply").val();
		$("#textreply").val(str.replace(/&lt;BR&gt;/mg,"n"));
          myForm.submit();
		}
		document.getElementById("replyUpdated").innerHTML=warn;
      };
	  
	  function check_edit(){
		if (document.editSubForm.subject.value.length == 0)
		{
			warn="請輸入文章主題";
		}
        else if (document.editSubForm.texteditsub.value.length == 0)
		{
			warn="請輸入文章內容";
		}
        else
		{
			var str = $("#texteditsub").val();
			$("#texteditsub").val(str.replace(/&lt;BR&gt;/mg,"n"));
			editSubForm.submit();
		}
		document.getElementById("editUpdated").innerHTML=warn;
      };
    </script>	
<style>
.ui-content{
		padding:10px 15px 0px 15px;
	}
</style>	
  </head>
  <body>
  <?PHP include($jx3_Root."panels.php");?>
  <div data-role="page" id="showSubject" data-quicklinks="true" data-ajax="false">
	<?PHP include($jx3_Root."menu.php");?>
    <div data-role="main" class = "ui-content jqm-content jqm-fullwidth" style="width:80%;position:relative; margin:0px auto;"><!--content -->
	<?php 
      require_once($jx3_Root."dbtools.inc.php");
			
      //取得要顯示之記錄
      $id = $_GET["id"];
				
      //建立資料連接
      $link = create_connection();
			
      //執行SQL查詢
      $sql = "SELECT * FROM message WHERE id = $id";
      $result = execute_sql($link, "db1021241244", $sql);
				
	  echo "<a href='index.php' data-rel='reverse' class='ui-btn ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon'>Back</a>";
	  
	  //顯示原討論主題的內容
      while ($row = mysqli_fetch_assoc($result))
      {
		$author = $row["author"];
	  	echo "<title>" . $row["subject"] . "</title>"; //title
		
	  //link subject
	  $subject = $row["subject"];
	  $content = $row["content"];
	  echo '<ul data-role="listview" data-inset="true" class="ui-corner-all custom-corners">';
      echo '<li data-role="list-divider">作者：' . $row["author"] . '</li>';
	  echo '<li data-icon="edit"><a href="#">';
	  echo '<h1>'. $row["subject"] . '</h1>';
	  echo '<p><strong>' . nl2br($row["content"]) . '</strong></p>';
	  echo '<p align="right">於 ' . $row["date"] . ' 發表</p>';
	  echo '</a></li>';
	  echo '</ul>';
	  
	  //按鈕群組
	  echo '<div data-role="controlgroup" data-type="horizontal"<p align="right">';
	  //author can edit it
	  if (isset($userAccount) && $author == $userAccount) 
        {
			//編輯與刪除
          echo '<a href="#editSubject" data-rel="popup" class="ui-btn ui-btn-inline ui-icon-edit ui-btn-icon-left ui-alt-icon">Edit</a>
		  <a href="#deleteSubject" data-rel="popup" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-left ui-alt-icon">刪除</a>';
		}
      }	
	  echo '<a href="#reply" data-rel="popup" class="ui-btn ui-btn-inline ui-btn-icon-left ui-icon-comment ui-alt-icon" data-transition="pop">回覆</a></p>';
	  echo '</div>';
	  
      //釋放 $result 佔用的記憶體空間
      mysqli_free_result($result);

      //執行 SQL 命令
      $sql = "SELECT * FROM reply_message WHERE reply_id = $id";
      $result = execute_sql($link, "db1021241244", $sql);
	  
      if (mysqli_num_rows($result) <> 0)
      {
		$j = 1;
		
        //顯示回覆主題的內容
        while ($row = mysqli_fetch_assoc($result))
        {
			echo '<div data-role="listview" data-inset="true" class="ui-corner-all custom-corners" >';
			echo '<div class="ui-bar ui-bar-a ui-corner-all">' . $j. 'F</div>';
			echo '<div class="ui-body ui-body-a ui-corner-all"><h4>' . nl2br($row["content"]) . '</h4>';
			echo '<div class="ui-grid-d">';
			echo '<div class="ui-block-a"><class="ui-bar ui-bar-a" ></div>';
			echo '<div class="ui-block-b"><class="ui-bar ui-bar-a" ></div>';
			echo '<div class="ui-block-c"><class="ui-bar ui-bar-a" ></div>';
			echo '<div class="ui-block-d"><class="ui-bar ui-bar-a" ><h4 align="right">'. $row["author"]. '</h4></div>';
			echo '<div class="ui-block-e"><class="ui-bar ui-bar-a" ><h5 align="right">於 '. $row["date"] . ' 回覆</h5></div></div></div>';
			$j++;
        }
		echo'</div>';
        
      }

      //釋放記憶體空間
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
	</div><!--content -->
	<div class = "ui-content"><!--content -->
	
	<div data-role="popup" id="reply" data-position-to="window" style="min-width:700px;" data-ajax="false"><!-- popup -->
	<div class="ui-bar ui-bar-a"><h4>　回覆</h4></div>
		<h3>Re : <?php echo $subject ?></h3>
		<p id="replyUpdated" align="center" style="color:Tomato;"></p>
	<form name="myForm" method="post" action="postReply.php" style="width:80%;position:relative; margin:0px auto;">
		<fieldset>
		<div data-role="fieldcontain">
			<input type="hidden" name="reply_id" value="<?php echo $id ?>">
			<input type="hidden" name="resubject" value="<?php echo $subject ?>">
			<textarea name="textreply" id="textreply"></textarea>
		</div>
		</fieldset>
		
			<center><input type="button" data-role="button" id="sub" data-inline="true" value="提交" onClick="check_reply()">
			<a href="index.html" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">取消</a></center>
    </form>
	</div><!-- popup -->
	</div><!--content -->
	
	<div class = "ui-content"><!--content -->
	<div data-role="popup" id="editSubject" data-position-to="window" style="min-width:700px;" data-ajax="false"><!-- popup -->
	<form name="editSubForm" method="post" action="editSubject.php" style="width:70%;position:relative; margin:0px auto;">
		<fieldset>
		<div class="ui-field-contain"><!-- /content -->
			<input type="hidden" name="subjectId" value="<?php echo $id ?>">
			<div class="ui-bar ui-bar-a"><h4>正在編輯：<?php echo $subject ?></h4></div>
			<p id="editUpdated" align="center" style="color:Tomato;"></p>
			<input type="text" name="subject" id="subject" size="50" value="<?php echo $subject ?>">
			<h4>文章內容：</h4>
			<textarea name="texteditsub" id="texteditsub"><?php echo $content ?></textarea>
		</div>  <!-- /content -->
		 </fieldset>
			
            <center><input type="button" data-role="button" id="btneditsub" data-inline="true" value="編輯" onClick="check_edit()">
			<a href="index.html" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">取消</a></center>
    </form>
	</div><!-- popup -->
	</div><!--content -->
	
	<div class = "ui-content"><!--content -->
	<div data-role="popup" id="deleteSubject" data-position-to="window" style="min-width:800px;" data-ajax="false"><!-- popup -->
	<p id="updated" align="center" style="color:Tomato;"></p>
		<fieldset>
		<div class="ui-field-contain"><!-- /content -->
			<div class="ui-bar ui-bar-a"><h4>您正在嘗試刪除：<?php echo $subject ?></h4></div>
			<h4>主題：</h4>
			<div class="ui-contain"><h3><?php echo $subject ?></h3></div>
			<h4>文章內容：</h4>
			<div class="ui-contain"><p><?php echo $content ?></p></div>
		</div>  <!-- /content -->
		 </fieldset>
			<a href="delSubject.php?id=<?php echo $id ?>" class="ui-btn ui-btn-inline" data-ajax="false">刪除</a>
			<a href="index.html" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">取消</a></center>
	</div><!-- popup -->
	</div><!--content -->

	</div><!--page -->
  </body>          
</html>