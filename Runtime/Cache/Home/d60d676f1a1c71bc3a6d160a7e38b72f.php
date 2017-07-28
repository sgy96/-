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
        <div class="ui-btn-left"> <a href="/ThinkPHP/yanJing/index.php/Home/User/my" target="_top" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext tu1">返回</a></div>
        <h1>密码修改</h1>
    </div>

    <div data-role="main"  class="ui-content">
        <form method="post" action="#" data-ajax="false" >
            <div class="ui-field-contain" >
                旧密码：<input type="password" data-theme="a" name='password'  >
                新密码：<input type="password" data-theme="a" name='pw'  placeholder="密码必需为六位" >
                确认密码：<input type="password" data-theme="a" name='paw'  placeholder="必需与新密码保持一致" >
            </div>
            <button class="button1" data-ajax="false">修改</button>
            
            
        </form>
       
    </div>


</div>
        

</body>
<script type="text/javascript">
   $(".button1").click(function () {  
    
    
      var password = document.getElementsByName("password")[0].value;
      var pw = document.getElementsByName("pw")[0].value;
      var paw = document.getElementsByName("paw")[0].value;
       
      var reg=/^[a-zA-Z0-9_]{6}$/;
      
      if(!(reg.test(pw)&&reg.test(paw))){
        //alert('1111');
          return false; 
      }
      
      
       //alert('手机号不能为空');
      $.ajax({  
         type: "post",  
         url: "/ThinkPHP/yanJing/index.php/Home/User/password",  
         data: {'password':password,'pw':pw,'paw':paw},  
         dataType: "text",
         success: function (data) {  
             //data = data.data; 
             if(data == "1") {
                 alert('填写错误');
                  
              }else if(data=='2'){
                  alert('修改失败');
                  location.href = "/ThinkPHP/yanJing/index.php/Home/User/my";
              }else{
                  alert('修改成功');
                  location.href = "/ThinkPHP/yanJing/index.php/Home/User/my";
              }
          },
      });
      return false;
    })
</script>
</html>