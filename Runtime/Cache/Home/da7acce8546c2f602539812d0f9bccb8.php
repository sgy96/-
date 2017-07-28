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
<div data-role="page" data-theme="f" class="padding5" >
    <div data-role="header"  data-theme="f" >
        <div class="ui-btn-left"> <a href="/ThinkPHP/yanJing/index.php/Home/Index/index" target="_top" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext tu1">返回</a></div>
        <h1>登录</h1>
    </div>

    <div data-role="main"  class="ui-content">
        <form method="post" action="/ThinkPHP/yanJing/index.php/Home/User/logo">
            <div class="ui-field-contain" >
                <input type="text" data-theme="a" name='cell' data-iconpos="left" data-icon="user" placeholder="请输入手机号" >
                <input type="password" data-theme="a" name='password'  placeholder="请输入密码" >
            </div>
            <button class="button1">登录</button>
        </form>
        <div class="ui-grid-a">
            
            <div class="ui-block-b text-algin2"><a href="/ThinkPHP/yanJing/index.php/Home/User/reset" data-ajax="false">忘记密码</a></div>
        </div>
    </div>


</div>
        

</body>
<script type="text/javascript">
    
    $(".button1").click(function () {  
       var cell = document.getElementsByName("cell")[0].value;
       var password = document.getElementsByName("password")[0].value;
       $.ajax({  
           type: "post",  
           url: "/ThinkPHP/yanJing/index.php/Home/User/logo",  
           data: {'cell':cell,'password':password},  
           dataType: "text",  
           success: function (data) {  
               //data = data.data; 
               if(data == "1") {
                   alert('手机号和密码不能为空');
                    
                }else if(data=='2'){
                    alert('手机号或密码错误');
                }else{
                    location.href = "/ThinkPHP/yanJing/index.php/Home/User/my";
                    
                }
               
           }  
        });  
       return false;   

    });
</script>
</html>