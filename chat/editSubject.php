<!doctype html>
<html>
<?php  include("../head.php");?>
<head>
  <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  </head>
<?php
  require_once($jx3_Root."dbtools.inc.php");
  
  //建立資料連接
  $link = create_connection();
  
  if (!isset($_POST["subjectId"]))
  {
    $subjectId = $_GET["id"];
  														
    //取得主題資料
	$sql = "SELECT * FROM message WHERE id = $subjectId";
    $result = execute_sql($link, "db1021241244", $sql);
	
    $row = mysqli_fetch_object($result);
    $author = $row->author;
    $subject = $row->subject;
	$content = $row->content;
      
    //釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
		
    //關閉資料連接	
    mysqli_close($link);
  
    if ($author != $userAccount)
    {
      echo "<script type='text/javascript'>";
      echo "alert('您沒有權限修改此文章。$author');";
      echo "</script>";
    }
  }
  else
  {
    $subjectId = $_POST["subjectId"];
    $subject = $_POST["subject"];
	$content = $_POST["texteditsub"];
    $sql = "UPDATE message SET subject = '$subject' , content = '$content' WHERE id = $subjectId";
    execute_sql($link, "db1021241244", $sql);
	
	//釋放 $result 佔用的記憶體	
    mysqli_free_result($result);
  			
    //關閉資料連接	
    mysqli_close($link);
  }
?>
<body>

	<?php include($jx3_Root."panels.php"); ?>
<div data-role="page" id="updateEdit" data-quicklinks="true" class = "ui-responsive-panel" data-ajax="false"<!--page -->
	<?PHP include($jx3_Root."main.php");?>
  <div data-role="main" class="ui-content" class="center-button" style="width:50%;position:relative; left:330px;"><!--content -->
    
	<div class="ui-content">
    <h3 align="center" >文章修改成功！</h3>
	</div>
	<a href="http://<?php echo $jx3_Path ?>chat/showSubject.php?id=<?php echo $subjectId?>" class="ui-btn" data-inline="false" data-ajax="false">返回討論主題</a>
	</div><!--/content -->
 
  </div><!--/page -->
    </body>
</html>