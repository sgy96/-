<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>康远眼镜</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>jquery.mobile-1.4.5.min.css">
    <script type="text/javascript"  src="<?php echo (JS_URL); ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>iconfont.css">
    <link  rel="stylesheet" href="<?php echo (CSS_URL); ?>style.css"> 
    <link rel="stylesheet" href="<?php echo (CSS_URL); ?>idangerous.swiper.css">
    
<style>
    body{
        margin: 0;
    }
    .hh{
        text-decoration:none;
    }
    .swiper-container {
      height: 200px;
      width: 100%;
    }
    
</style>
</head>

<body>

    
<!-- <div data-role="page" data-theme="f" class="body-bg1" > -->
    <div data-role="header"  data-theme="f" >
        <div class="ui-btn-left"><a href="#" target="_top" class="ui-btn ui-corner-all ui-icon-user ui-btn-icon-notext tu1">登录</a>
        </div>
        <h1>康远眼镜</h1>
    </div>
    
    <div data-role="main"  class="ui-content body-bg1">
        
    
        <!-- 轮播开始 -->
        <div   class="swiper-container" >
          <div class="swiper-wrapper" >
                <div class="swiper-slide"><img width="100%" height="100%" src="<?php echo (IMG_URL); ?>timg1.jpg" /></div>
                <div class="swiper-slide"><img width="100%" height="100%"  src="<?php echo (IMG_URL); ?>timg2.jpg" /></div>
                <div class="swiper-slide"><img width="100%" height="100%"  src="<?php echo (IMG_URL); ?>timg.jpg" /></div>
                <div class="swiper-slide"><img width="100%" height="100%"  src="<?php echo (IMG_URL); ?>timg3.jpg" /></div>
                
          </div>
        </div>
        <div  class="hot-btn-box"  ></div>
        


        
        <div class="ui-grid-b">
            <div class="ui-block-a ui-block-style"><span>近视镜片</span></div>
            <div class="ui-block-b ui-block-style"><span>老花眼镜</span></div>
            <div class="ui-block-c ui-block-style"><span>太阳镜</span></div>
            <div class="ui-block-a ui-block-style"><span>隐形眼镜</span></div>
            <div class="ui-block-b ui-block-style"><span>护理液</span></div>
            <div class="ui-block-c ui-block-style"><span>眼镜架</span></div>
        </div>
        
        <div style="clear:both"></div>
        
        <div class="padding2" id="remen"><h2>近视镜片</h2></div>
        
        <div class="padding2" id="teb0"><h2>近视镜片</h2> </div>
        
        <div class="padding2" id="teb1"><h2>老花镜</h2></div>
        
        <div class="padding2" id="teb2"><h2>太阳镜</h2> </div>
        
        <div class="padding2" id="teb3"><h2>隐形眼镜</h2></div>
        
        <div class="padding2" id="teb4"><h2>隐形眼镜护理液</h2></div>
          
        <div class="padding2" id="teb5"><h2>眼镜架</h2></div>  
        
            
        
        <ul class='information' >
            <?php if($res != ''): if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="#" class="hh">
                        <div><img src="<?php echo (UP_URL); echo ($vo["pe_img"]); ?>" width='90%' height='300px'/>
        
                            <div>
                                <h2 style="font-size:13px;color:black;font-family:宋体;">型号：<?php echo ($vo["product"]); ?>&nbsp;&nbsp;价格：<?php echo ($vo["Price"]); ?></h2>
                                <p style="font-size:13px;color:black;text-decoration : none">介绍：<?php echo ($vo["describe"]); ?></p>
                                <p style="font-size:13px;color:black;">品牌：<?php echo ($vo["brand"]); ?></p>
                            </div>
                        </div>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php else: ?><h2 style='text-align:center;'>暂无产品</h2><?php endif; ?>
        
        </ul>
        
        <div id="more" data-status="1" category='近视镜片' style='text-align:center;'>  
                    加载更多  
        </div>  
        <input type="hidden" id="page" value="2">  
        
            </div>
        
        
        
        
            <div data-role="footer" data-position="fixed" data-id="footernav" data-position="fixed" data-tap-toggle="false" class="border1"  >
        <div data-role="navbar" class="ui-footer-bg1">
            <ul>
                <li><a href="#" class="ui-btn-active1" ><i class="icon iconfont"></i><br/>主页</a></li>
        
                <li><a href="/ThinkPHP/yanJing/index.php/Home/User/my" target="_top"><i class="icon iconfont"></i><br/>我</a></li>
            </ul>
        </div>
    </div>
        
</div>
<!-- <script src="<?php echo (JS_URL); ?>swipeslide.min.js"></script> -->
<script src="<?php echo (JS_URL); ?>jquery-1.10.1.min.js"></script>
<script src="<?php echo (JS_URL); ?>idangerous.swiper.min.js"></script>
<script type="text/javascript">
    //轮播
    var mySwiper = new Swiper('.swiper-container', {
        pagination: '.hot-btn-box',
        autoplay : 5000,
        loop:true,
        grabCursor: true,
        paginationClickable: true,
        onTouchEnd : function() {
            mySwiper.startAutoplay();
        }
    });
    

    $(".avt").click(function(){
        var index1=$(this).index();
        $(this).addClass("on1").siblings().removeClass("on1")
        $("#teb0,#teb1,#teb2,#teb3,#teb4,#teb5").hide();
        $("#teb"+index1).show();
    });
    $(".ui-block-style").click(function(){
        var index1=$(this).index();
        $(this).addClass("one").siblings().removeClass("one")
        $("#remen").hide();
        $("#teb0,#teb1,#teb2,#teb3,#teb4,#teb5").hide();
        $("#teb"+index1).show();
        var ca= $("#teb"+index1).text();
        $("#more").show();
        $("#more").attr("category",ca);
        $("#page").val('2');
        $("#information").html("加载中...");
        $("#more").attr("data-status","0");
        $.ajax({  
           type: "post",  
           url: "/ThinkPHP/yanJing/index.php/Home/Index/index",  
           data: {"category":ca},  
           dataType: "json",  
           success: function (data) {  
               //data = data.data; 
               if (typeof(data.er) == "undefined") {
                   /*数据不够10条隐藏按钮*/  
                   var information = $(".information");  
                   var html = '';  
                   for (var i = 0; i < data.length; i++) {  
                       html +="<a href='#'class='hh'><div><img src='<?php echo (UP_URL); ?>"+data[i].pe_img+"' width='90%' height='300px'/><div><h2 style='font-size:13px;color:black;font-family:宋体;'>型号："+data[i].product+"&nbsp;&nbsp;价格："+data[i].Price+"</h2><p style='font-size:13px;color:black;text-decoration : none'>介绍："+data[i].describe+"</p><p style='font-size:13px;color:black;''>品牌："+data[i].brand+"</p></div></div></a>";
                   }  
                   information.html(html);  
                   $("#more").html("加载更多");  
                   $("#more").attr("data-status","1");  
                }else{
                    
                    $(".information").html("<center>暂无产品</center>"); 
                    $("#more").html(""); 
                }
               
           }  
        });   
    });

    $("#more").click(function () {  
       var page = parseInt($("#page").val());
       var category=$(this).attr("category");    
        
       var status=$(this).attr("data-status");  
       if(status==1) {  
           $(this).html("加载中..."); 
           $(this).attr("data-status", "0");  
           $.ajax({  
               type: "post",  
               url: "/ThinkPHP/yanJing/index.php/Home/Index/jz",  
               data: {'page':page,"category":category},  
               dataType: "json",  
               success: function (data) {  
                   //data = data.data; 
                   if (typeof(data.er) == "undefined") {
                       /*数据不够10条隐藏按钮*/  
                       if (data.length < 5) {  
                            
                           $("#more").hide();  
                       } else {  
                           $("#page").val(page + 1);//记录页码  
                       }  
                       insertDiv(data);  
                    }else{
                        $("#more").html("没有了"); 
                    }
                   
               }  
            });  
        }  

    });


    function insertDiv(data){  
           var information = $(".information");  
           var html = '';  
           for (var i = 0; i < data.length; i++) {  
               html +="<a href='#'class='hh'><div><img src='<?php echo (UP_URL); ?>"+data[i].pe_img+"' width='90%' height='300px'/><div><h2 style='font-size:13px;color:black;font-family:宋体;'>型号："+data[i].product+"&nbsp;&nbsp;价格："+data[i].Price+"</h2><p style='font-size:13px;color:black;text-decoration : none'>介绍："+data[i].describe+"</p><p style='font-size:13px;color:black;''>品牌："+data[i].brand+"</p></div></div></a>";
           }  
           information.append(html);  
           $("#more").html("加载更多");  
           $("#more").attr("data-status","1"); 
           /*if (data.length < 10) {  
                        
                $("#more").hide();  
            }*/
       }    

</script>


</body>
</html>