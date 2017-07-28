<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
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
                        <tr><td height="31"><div class="title">产品分类</div></td></tr>
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
                        <!-- 商品分类开始 -->
                        <tr style="height:360px">
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2" >
                                            
                                                <table width="1100px"  class="cont tr_color" style="position: absolute;top:90px;left:40px">
                                                    <tr>
                                                        <th>排序</th>
                                                        <th>分类名称</th>
                                                        <th>产品数量</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>1</td>
                                                        <td>近视镜片</td>
                                                        <td><?php echo ($list[0]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=近视镜片">查看</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>2</td>
                                                        <td>太阳镜</td>
                                                        <td><?php echo ($list[1]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=太阳镜">查看</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>3</td>
                                                        <td>隐形眼镜</td>
                                                        <td><?php echo ($list[2]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=隐形眼镜">查看</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>4</td>
                                                        <td>老花镜</td>
                                                        <td><?php echo ($list[3]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=老花镜">查看</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>5</td>
                                                        <td>隐形眼镜护理液</td>
                                                        <td><?php echo ($list[4]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=隐形眼镜护理液">查看</a></td>
                                                    </tr>
                                                    <tr align="center" class="d">
                                                        <td>6</td>
                                                        <td>眼镜架</td>
                                                        <td><?php echo ($list[5]); ?></td>
                                                        <td><a href="/ThinkPHP/yanJing/index.php/Admin/Goodx/goodx_list?category=眼镜架">查看</a></td>
                                                    </tr>
                                                    
                                                </table>
                                           
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 商品分类结束 -->
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
</html>