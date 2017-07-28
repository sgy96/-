<?php
    
    //把目前tp模式由生成模式变为开发模式
    define("APP_DEBUG",true);

    //把css、images、js路径定义成常量  
    define("CSS_URL","/ThinkPHP/yanJing/public/Style/");
    define("IMG_URL","/ThinkPHP/yanJing/public/Images/");
    define("JS_URL","/ThinkPHP/yanJing/public/js/");
     define("UP_URL","/ThinkPHP/yanJing/Uploads/");

    //引入框架的核心程序
    include"../ThinkPHP/ThinkPHP.php";
    
    
    
    
?>