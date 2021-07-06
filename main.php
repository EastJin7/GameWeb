<!doctype html>
<html>
<?php
  include("head.php");
?>
<head>
	<link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="https://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include("panels.php"); ?>
	<div data-role="page" id="main" data-quicklinks="true" data-dom-cache="true"><!-- page -->
	<?php include("menu.php"); ?>
	<div data-role="main" class = "ui-content jqm-content jqm-fullwidth"><!--content -->

		<p align="center">
			<a href="#popupImage" data-rel="popup" data-position-to="window">
			<img src="<?php echo 'http://' . $jx3_Path . 'mainImage.jpg'?>" alt="image" style="width:500px;"></a></p><!-- mixImage -->
			
		<div data-role="popup" id="popupImage" data-overlay-theme="b"><!-- puopup -->
      <a href="#main" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="mainImage.jpg" style="width:800px; alt="bigerimage">
		</div>
		<h3 align="center">歡迎來到劍三配裝DPS模擬器</h3>
		<h5 align="center">作者：東方</h5>

		<div is="grid" class="ui-grid-b" style="height:95px">
			<div is="block" class="ui-block-a" style="height:100%">
				<div is="dragable" style="text-align:center;">1</div>
			</div>
			<div is="block" class="ui-block-b" style="height:100%">
				<div is="dragable" style="text-align:center;">2</div>
			</div>
			<div is="block" class="ui-block-c" style="height:100%">
				<div is="dragable" style="text-align:center;">3</div>
			</div>
		</div>
		<div is="grid" class="ui-grid-b" style="height:95px">
			<div is="block" class="ui-block-a" style="height:100%">
				<div is="dragable" style="text-align:center;">4</div>
			</div>
			<div is="block" class="ui-block-b" style="height:100%">
				<div is="dragable" style="text-align:center;">5</div>
			</div>
			<div is="block" class="ui-block-c" style="height:100%">
				<div is="dragable" style="text-align:center;">6</div>
			</div>
		</div>
	</div><!-- /content -->
	
	</div><!-- /page -->
  </body>
</html>