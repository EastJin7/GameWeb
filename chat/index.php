<!doctype html>
<html>
<?PHP include("../head.php");?>

  <head>
    <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>攻略站</title>
	<style>
.ui-content{
		padding:10px 15px 0px 15px;
	}
</style>
    <script type="text/javascript">
      function check_data()
      {
        if (document.subForm.subject.value.length == 0)
			warn = "文章主題不可為空。";
        else if (document.subForm.content.value.length == 0)
          warn = "文章內容不可為空。";
        else
          subForm.submit();
	  document.getElementById("Updated").innerHTML=warn;
      }
    </script>		
  </head>
  <body>
  <?php include($jx3_Root."panels.php"); ?>
  <div data-role="page" id="chat" class = "ui-responsive-panel" data-ajax="false"><!-- page -->
  <?php include($jx3_Root."menu.php"); ?>
	
  <div data-role="main" class = "ui-content jqm-content jqm-fullwidth" style="width:80%;position:relative;margin:0px auto;"><!--content -->
<div style="display:inline;"><a href='../main.php' rel='external' class='ui-btn ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon'>Back</a>
  <p align="right"><a href="#poChat" data-rel="popup" class='ui-btn ui-btn-inline ui-icon-edit ui-btn-icon-left ui-alt-icon'>Post</a></p></div>
    <p align="center"><img src="http://<?php echo $jx3_Path ?>image/jx3icon.png"></p>
    <?php
      require_once($jx3_Root."dbtools.inc.php");
	  
		include($jx3_Root."menu.php");
      //指定每頁顯示幾筆記錄
      $records_per_page = 10;
			
      //取得要顯示第幾頁的記錄
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
				
      //建立資料連接
      $link = create_connection();
					
      //執行SQL查詢
      $sql = "SELECT id, author, subject, date FROM message ORDER BY date DESC";
      $result = execute_sql($link, "db1021241244", $sql);
				
      //取得記錄數
      $total_records = mysqli_num_rows($result);
			
      //計算總頁數
      $total_pages = ceil($total_records / $records_per_page);
			
      //計算本頁第一筆記錄的序號
      $started_record = $records_per_page * ($page - 1);
			
      //將記錄指標移至本頁第一筆記錄的序號
      mysqli_data_seek($result, $started_record);
			
      //使用 $bg 陣列來儲存表格背景色彩
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";					
	  
	  
	  echo '<div data-role="listview" data-inset="true" class="ui-corner-all custom-corners">';
      //顯示記錄
      $j = 1;
      while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
      {
        
		echo '<li><a href="showSubject.php?id=' . $row["id"] . '"><img src="main.png">';
		echo '<h2>' .$row["subject"]. '</h2>';
		echo '<p>作者：'. $row["author"] . '</p><p>發佈時間：'.$row["date"].'</p></a>';
		echo '</li>';
        $j++;
      }
      echo "</ul></div>" ;
	  
			
      //產生導覽列
	  echo '<div data-role="main" class="ui-content"><p align="center">';
	  for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='index.php?page=$i' class='ui-btn ui-btn-inline'>$i</a>";
      }
	  echo'</p></div>';
	  
	  echo '<div data-role="footer"><div data-role="navbar"><ul>';
			
      if ($page > 1)
        echo "<li><a href='index.php?page=". ($page - 1) . "'>上一頁</a></li>";
				
	  if ($page < $total_pages)
        echo "<li><a href='index.php?page=". ($page + 1) . "'>下一頁</a></li>";			
				
	  echo '</ul></div></div>';
			
      //釋放記憶體空間
      mysqli_free_result($result);
      mysqli_close($link);
    ?> 		
	</div><!--/content -->

	<div class = "ui-content"><!--content -->
	
	<div data-role="popup" id="poChat" data-position-to="window" style="min-width:700px;" data-ajax="false"><!-- popup -->
	<div class="ui-bar ui-bar-a"><h4>發表主題</h4></div>
	
	<form name="subForm" method="post" action="postSubject.php" style="width:80%;position:relative; margin:0px auto;">
		<fieldset>
		<p id="Updated" align="center" style="color:Tomato;"></p>
		<div class="ui-field-contain"><!-- /content -->
		<div class="ui-content"><h4>文章標題</h4></div>
			<input type="text" name="subject" id="subject" size="50" data-clear-btn="true">
			<input type="hidden" name="author" value="<?php echo $userAccount ?>">
			<div class="ui-content"><h4>文章內容</h4></div>
			<textarea name="content" id="textarea-poreply"></textarea>
		</div><!-- /content -->
		</fieldset>
			<center><input type="button" data-role="button" id="poSubBtn" data-inline="true" value="提交" onClick="check_data()">
			<a href="index.html" data-rel="back" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">取消</a></center>
    </form>
	</div><!-- popup -->
	</div><!--content -->

  
    </div><!--page -->
  </body>
</html>