<!doctype html>
<html>
<?php
  include("../head.php");
?>
<head>
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
th {
    border-bottom: 1px solid #d6d6d6;
}

tr:nth-child(even) {
    background: #e9e9e9;
}
	</style>
</head>
<body>
	<?php include($jx3_Root."/panels.php"); ?>
	<div data-role="page" id="itemsIndex" data-quicklinks="true"><!-- page -->
		<?php include($jx3_Root."menu.php"); ?>
	<div data-role="main" class = "ui-content jqm-content jqm-fullwidth"><!--content -->

		<p align="center"><img src="management.jpg"></p>
		<h3 align="center">裝備列表</h3>
		
		<table id="itemTable" data-role="table" data-mode="columntoggle" class="ui-responsive" data-column-btn-text="顯示欄位">
      <thead>
        <tr>
          <th data-priority="1">類型</th>
          <th data-priority="2">部位</th>
		  <th>裝備名稱</th>
          <th data-priority="3">基礎屬性</th>
          <th data-priority="3">外功攻擊</th>
          <th data-priority="3">破防</th>
		  <th data-priority="3">會心</th>
		  <th data-priority="3">會心效果</th>
		  <th data-priority="3">命中</th>
		  <th data-priority="3">無雙</th>
		  <th data-priority="2">裝備品質</th>
		  <th data-priority="6">裝備分數</th>
          <th data-priority="4">特效</th>
		  <th data-priority="5">出處</th>
        </tr>
      </thead>
      <tbody>				
        <tr>
          <td>會命切糕</td>
          <td>武器</td>
          <td>Maria Anders</td>
          <td>345</td>
          <td>1366</td>
          <td>0</td>
          <td>1222</td>
		  <td>0</td>
		  <td>1222</td>
		  <td>0</td>
		  <td>2960</td>
		  <td>5555</td>
		  <td>無</td>
		  <td>生活製作</td>
        </tr>
        <tr>
          <td>破命</td>
          <td>武器</td>
          <td>Antonio Moreno</td>
          <td>333</td>
          <td>1234</td>
          <td>1130</td>
          <td>0</td>
		  <td>0</td>
		  <td>1222</td>
		  <td>0</td>
		  <td>2900</td>
		  <td>5432</td>
		  <td>無</td>
		  <td>敖龍島</td>
        </tr>
        <tr>
          <td>破無特效</td>
          <td>武器</td>
          <td>Thomas Hardy</td>
          <td>333</td>
          <td>1111</td>
          <td>1200</td>
          <td>0</td>
		  <td>0</td>
		  <td>0</td>
		  <td>1222</td>
		  <td>2900</td>
		  <td>5321</td>
		  <td>尚未推出</td>
		  <td>敖龍島</td>
        </tr>
        <tr>
          <td>橙武</td>
          <td>武器</td>
          <td>Christina Berglund</td>
          <td>333</td>
          <td>1444</td>
          <td>900</td>
          <td>900</td>
		  <td>0</td>
		  <td>666</td>
		  <td>666</td>
		  <td>2600</td>
		  <td>6666</td>
		  <td>觸發後一段時間內寂洪荒免調息時間</td>
		  <td>神劍塚</td>
        </tr>
      </tbody>
    </table>
	</div><!-- /content -->
	

	
	</div><!-- /page -->
  </body>
</html>