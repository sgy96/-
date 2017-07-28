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
    <style>
        table{
            width: 90%;
             text-align:center;
             
             margin:auto; 

        }
        td{
            border:1px solid #E0E0E0; 
        }
        tr{
            height: 30px;
        }
        tr:nth-child(2n)
        {
            background:#ADADAD; 
        }
        tr:nth-child(2n-1)
        {
            background:#4F4F4F; 
        }


    </style>
</head>

<body>
<div data-role="page" data-theme="f" class="body-bg1">
    <div data-role="header" data-theme="f">
        <div class="ui-btn-left"> <a href="/ThinkPHP/yanJing/index.php/Home/User/my" target="_top" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext tu1">返回</a></div>
        <h1>我的信息</h1>
    </div>
    <div data-role="main"  class="ui-content body-bg1">
        <div class="header-bg">
            <img src="<?php echo (IMG_URL); ?>avatar1.png"/>
            <p><?php echo ($_SESSION['Uname']); ?></p>
        </div>
        <div style=" text-align:center; background-color:#F6F6F6">
        <table>
            <tbody>  
            <tr><td width='33.33%'>姓名</td><td><?php echo ($res["name"]); ?></td></tr>
            <tr><td width='33.33%'>手机号</td><td><?php echo ($res["cell"]); ?></td></tr>
            <tr><td width='33.33%'>介绍人</td><td><?php echo ($res["Superior"]); ?></td></tr>
            <tr><td width='33.33%'>成为会员时间</td><td><?php echo ($res["Time"]); ?></td></tr>
            <tr><td width='33.33%'>地址</td><td><?php echo ($res["address"]); ?></td></tr>
            <tr><td width='33.33%' rowspan='2'>备注</td><td rowspan='2'><?php echo ($res["describe"]); ?></td></tr>
            <tr></tr>
            </tbody>
        </table>
        <br/>

        <table>
            <tr><td width='33.33%'>左眼视力</td><td>右眼视力</td><td>散光度</td></tr>
            <tr><td><?php echo ($res["left"]); ?></td><td><?php echo ($res["right"]); ?></td><td><?php echo ($res["distance"]); ?></td></tr>
        </table>

        <table>
            <tr><td>验光师</td><td>营业员</td></tr>
            <tr><td><?php echo ($res["Doctor"]); ?></td><td><?php echo ($res["staff"]); ?></td></tr>
        </table>
        <br/>
        <?php if($ret != ''): ?><table>
            <tr><td width='50%'>推荐的人</td><td>推荐时间</td></tr>
            <?php if(is_array($ret)): $i = 0; $__LIST__ = $ret;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["name"]); ?></td><td><?php echo ($vo["Time"]); ?></td> </tr><?php endforeach; endif; else: echo "" ;endif; ?>
             
           </table> 
           <table>
            <tr><td width='50%'>未返金额</td><td>已返金额</td></tr>
            <tr><td><?php echo ($res["Untreated"]); ?></td><td><?php echo ($res["treated"]); ?></td></tr>
        </table><?php endif; ?>
        </div>
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