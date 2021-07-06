
<script>	
var rightPanel = 
'<div data-role="panel" id="right-panel" data-position="right" data-display="overlay" data-theme="b">'+
'<p align="center"><H4 align="center" >歡迎，<span id="nickname"><?php echo $userName?></span>。</H4>'+
'<p align="center"><img src="users.jpg"></p>'+
'<a href="<?php echo 'http://' . $jx3_Path ?>" class="ui-btn" >回首頁</a></p>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'user/rpg.php'?>" class="ui-btn" >俠客生涯</a>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'user/item.php' ?>" class="ui-btn" >我的裝備</a>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'login/modify.php'?>" class="ui-btn" >修改會員資料</a>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'login/logout.php'?>" class="ui-btn" >登出</a></p></div>';

var leftPanel = 
'<div data-role="panel" id="left-panel" data-position="left" data-display="overlay" data-theme="b">'+
'<ul data-role="listview"><li data-icon = "delete"><a href = "#" data-rel = "close">關閉</a></li>'+
'<li data-role="list-divider">PVE</li><li>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'tools/index.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon">裝備大全</a>'+
'</li><li><a href="<?php echo 'http://' . $jx3_Path . 'tools/gayDps.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >丐幫配裝模擬器</a></li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'tools/snowDps.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >凌雪DPS模擬器</a></li>'+
'<li data-role="list-divider">PVX</li><li>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'tools/test.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >科舉答題器</a></li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'tools/pet.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >蹲寵CD</a></li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'tools/life.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >生活技能</a></li>'+
'<li data-role="list-divider">江湖茶館</li><li>'+
'<a href="<?php echo 'http://' . $jx3_Path . 'chat/index.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >攻略站</a></li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'chat/tran.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon">交易行</a></li>'+
'<li data-role="list-divider">關於本站</li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'web/issue.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >意見回報</a></li>'+
'<li><a href="<?php echo 'http://' . $jx3_Path . 'web/donate.php'?>"><img src="/try/demo_source/gb.png" class="ui-li-icon" >贊助作者</a></li></ul></div>';

$(document).one('pagebeforecreate', function () {
    $.mobile.pageContainer.prepend(rightPanel);
    $("#right-panel").panel().enhanceWithin();
    $.mobile.pageContainer.prepend(leftPanel);
    $("#left-panel").panel().enhanceWithin();
});


</script>
	