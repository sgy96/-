<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!-- 头部开始 -->
            <tr>
                <td width="17" valign="top" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="<?php echo (IMG_URL); ?>content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="<?php echo (IMG_URL); ?>content_bg.gif">
                        <tr><td height="31"><div class="title">修改密码</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="<?php echo (IMG_URL); ?>mail_right_bg.gif"><img src="<?php echo (IMG_URL); ?>nav_right_bg.gif" width="16" height="29" /></td>
            </tr>
            <!-- 中间部分开始 -->
            <tr>
                <!--第一行左边框-->
                <td valign="middle" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">&nbsp;</td>
                <!--第一行中间内容-->
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <!-- 空白行-->
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                        
                        <!-- 一条线 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <!-- 密码修改开始 -->
                        <tr style="height:360px">
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2" >
                                            <form action="/ThinkPHP/yanJing/index.php/Admin/System/password" method="post">
                                                <table width="1100px"  class="cont" style="position: absolute;top:90px;left:40px">
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">新密码：</td>
                                                        <td width="20%"><input class="text" type="password" name="password" value="" /></td>
                                                        <td>密码必须是6位的数字或字母</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">确认密码：</td>
                                                        <td width="20%"><input class="text" type="password" name="pw" value="" /></td>
                                                        <td>必须与新密码保持一致</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">管理员密保：</td>
                                                        <td width="20%"><input class="text" type="password" name="security" value="" /></td>
                                                        <td>&nbsp;</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="3"><input id="su" class="btn" type="submit" value="提交" /></td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 产品列表结束 -->
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <img src="<?php echo (IMG_URL); ?>icon_mail.gif" width="16" height="11"> 客户服务邮箱：rainman@foxmail.com<br />
                                <img src="<?php echo (IMG_URL); ?>icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
                            </td>
                            <td>&nbsp;</td><td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td background="<?php echo (IMG_URL); ?>mail_right_bg.gif">&nbsp;</td>
            </tr>
            <!-- 底部部分 -->
            <tr>
                <td valign="bottom" background="<?php echo (IMG_URL); ?>mail_left_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_left.gif" width="17" height="17" />
                </td>
                <td background="<?php echo (IMG_URL); ?>buttom_bgs.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="<?php echo (IMG_URL); ?>mail_right_bg.gif">
                    <img src="<?php echo (IMG_URL); ?>buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
    <script type="text/javascript">
        $(function(){
            $("#su").click(function(){
                var password=document.getElementsByName("password")[0].value;
                var pw=document.getElementsByName("pw")[0].value;
                var security=document.getElementsByName("security")[0].value;
                if(password==""||pw==""||security==""){
                    return false;
                }
                var reg=/^[a-zA-Z0-9_]{6}$/;
                 if(!(reg.test(pw)&&reg.test(security)){
                    //alert('1111');
                    return false; 
                 }
                
            });
        })
    </script>
</html>