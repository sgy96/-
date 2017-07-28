<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>眼镜店</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>jquery.mobile-1.4.5.min.css">
    <script type="text/javascript"  src="<?php echo (JS_URL); ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>iconfont.css">
    <link  rel="stylesheet" href="<?php echo (CSS_URL); ?>style.css">
</head>

<body>
<div data-role="page" data-theme="f" class="body-bg1">
    <div data-role="header" data-theme="f">
        <h1>我</h1>
    </div>
    <div data-role="main"  class="ui-content body-bg1">
        <div class="header-bg">
            <img src="<?php echo (IMG_URL); ?>avatar1.png"/>
            <p><?php echo ($_SESSION['Uname']); ?></p>
        </div>
        <ul data-role="listview" data-inset="true" data-theme="m" class="shadow1">
            <li><a href="/ThinkPHP/yanJing/index.php/Home/User/details" data-ajax="false"><img src="<?php echo (IMG_URL); ?>icon2.png" class="ui-li-icon">个人信息</a></li>
            <li><a href="/ThinkPHP/yanJing/index.php/Home/User/modify" data-ajax="false"><img src="<?php echo (IMG_URL); ?>icon1.png" class="ui-li-icon">信息修改</a></li>
            <li><a href="/ThinkPHP/yanJing/index.php/Home/User/password" data-ajax="false"><img src="<?php echo (IMG_URL); ?>icon5.png" class="ui-li-icon">密码修改</a></li>
            <li><a href="/ThinkPHP/yanJing/index.php/Home/User/tc" data-ajax="false"><img src="<?php echo (IMG_URL); ?>icon6.png"  class="ui-li-icon">退出账号</a></li>
        </ul>

    </div>



    <div data-role="footer" data-position="fixed" data-id="footernav" data-position="fixed" data-tap-toggle="false"  class="border1"  >
        <div data-role="navbar" class="ui-footer-bg1">
            <ul>
                <li><a href="/ThinkPHP/yanJing/index.php/Home/Index/index" target="_top"><i class="icon iconfont"></i><br/>主页</a></li>
                <li><a href="#"  class="ui-btn-active1"><i class="icon iconfont"></i><br/>我</a></li>
            </ul>
        </div>
    </div>

</div>
</body>
</html>