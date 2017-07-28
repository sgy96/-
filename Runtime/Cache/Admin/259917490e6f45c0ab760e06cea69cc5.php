<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>skin.css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <style type="text/css">
        .p2{
            
            
        }
    </style>
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
                        <tr><td height="31"><div class="title">会员详情</div></td></tr>
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
                        <!-- 添加会员开始 -->
                       <tr style="height:380px">
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2" >
                                            <form action="/ThinkPHP/yanJing/index.php/Admin/Member/mem_modify" method="post">
                                                <table width="1100px" class="cont" style="position: absolute;top:90px;left:40px">
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="6%">姓名：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='name' value="<?php echo ($res["name"]); ?>" > 
                                                        </td>
                                                        <td width="8%">联系电话：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text"  value=<?php echo ($res["cell"]); ?> readonly="true">
                                                        </td>
                                                        <td width="8%">介绍人：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text"  value="<?php echo ($res["Superior"]); ?>" readonly="true">
                                                        </td>
                                                        <td width="8%">注册时间：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text"  value=<?php echo ($res["Time"]); ?> readonly="true"> 
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="6%">左眼视力：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='left' value="<?php echo ($res["left"]); ?>" > 
                                                        </td>
                                                        <td width="8%">右眼视力：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='right'value="<?php echo ($res["right"]); ?>">
                                                        </td>
                                                        <td width="8%">瞳距：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='distance' value="<?php echo ($res["distance"]); ?>" >
                                                        </td>
                                                        <td width="8%">验光师：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='Doctor'  value="<?php echo ($res["Doctor"]); ?>" > 
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="8%">营业员：</td>
                                                        <td width="16%">
                                                        <input class="text" type="text" name='staff'  value="<?php echo ($res["staff"]); ?>" > 
                                                        </td>
                                                        <td width="6%">地址：</td>
                                                        <td colspan="5">
                                                        <input class="text" type="text" name='address'  value="<?php echo ($res["address"]); ?>"  style="width:680px">
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="6%">备注：</td>
                                                        <td colspan="7">
                                                        <input class="text" type="text" name='describe' value="<?php echo ($res["describe"]); ?>" style="width:800px">
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="6%">修改信息：</td>
                                                        <td ><input class="text"  type="password" name='password'  placeholder="输入管理员密码"  /> 
                                                        </td>
                                                        <td><button class="butt">提交</button></td>
                                                        <td colspan="5">
                                                        &nbsp;
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td colspan="8">
                                                            推荐的人：
                                                        </td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                    <?php if($resArray != ''): if(is_array($resArray)): $i = 0; $__LIST__ = $resArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                                                
                                                                <td width="2%">&nbsp;</td>
                                                                
                                                                <td width="6%">姓名：</td>
                                                                <td width="16%">
                                                                <input class="text" type="text"  value=<?php echo ($vo["name"]); ?> readonly="true"> 
                                                                </td>
                                                                <td width="8%">联系电话：</td>
                                                                <td width="16%">
                                                                <input class="text" type="text"  value=<?php echo ($vo["cell"]); ?> readonly="true">
                                                                </td>
                                                                <td width="8%">介绍时间：</td>
                                                                <td width="16%">
                                                                <input class="text" type="text"  value=<?php echo ($vo["Time"]); ?> readonly="true"> 
                                                                </td>
                                                                <td width="8%">一级推荐人</td>
                                                                <td width="16%" >
                                                                <input class="text" type="hidden"  value="<?php echo ($vo["Grand"]); ?>">
                                                                <button class="p">详情</button></td>
                                                                <td width="2%">&nbsp;</td>
                                                            </tr>
                                                            
                                                            <tr class="p2"></tr> 
                                                            <tr class="p2"></tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td colspan="8"><?php echo ($fenYekuang); ?></td>
                                                        <td width="2%">&nbsp;</td>
                                                       </tr> 
                                                   <?php else: ?><tr><td width="2%">&nbsp;</td><td colspan="8">没有数据</td><td width="2%">&nbsp;</td></tr><?php endif; ?>
                                                   
                                                   <tr>
                                                    <td width="2%">&nbsp;</td> 
                                                    <td >&nbsp;</td>
                                                    <td >&nbsp;</td>
                                                    <td>未领金额：</td>
                                                    <td>
                                                        <input class="text" id="Untreated" type="text"  value="<?php echo ($res["Untreated"]); ?>" readonly="true"> 
                                                    </td>
                                                    <td>已领金额：</td>
                                                    <td>
                                                        <input class="text" id="treated" type="text"  value="<?php echo ($res["treated"]); ?>" readonly="true"> 
                                                    </td>
                                                    <td ><input class="text" id="password" type="password" style="width:80px" placeholder="输入会员密码"  /> </td>
                                                    <td >
                                                    <input id="ID" type="hidden" name='ID' value="<?php echo ($res["ID"]); ?>">
                                                    <button class="bu">结算</button></td>
                                                    
                                                    <td width="2%">&nbsp;</td>
                                                   </tr> 
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>
                        <!-- 添加栏目结束 -->
                        <tr>
                            <td height="40" colspan="4">
                                <!-- <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table> -->&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="51%" class="left_txt">
                                <!-- <img src="<?php echo (IMG_URL); ?>icon_mail.gif" width="16" height="11"> 客户服务邮箱：rainman@foxmail.com<br />
                                <img src="<?php echo (IMG_URL); ?>icon_phone.gif" width="17" height="14"> 官方网站：<a href="http://www.mycodes.net/" target="_blank">源码之家</a> -->&nbsp;
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
            $(".p2").hide();
            $(".p").click(function(){
                var Grand=$(this).prev().val();
                var tr=$(this).parent().parent().next().html();
                var one=$(this).parent().parent().next();
                var two=$(this).parent().parent().next().next();
                if (Grand!=""&&tr=="") {
                   
                    $.ajax({
                        url: "/ThinkPHP/yanJing/index.php/Admin/Member/grand",
                        type:'POST',
                        complete :function(){}, //請求完回調的函數，無論成功與失敗都會調用，在success後
                        dataType: 'json', //會把回傳的字符串自動轉換為json對象！
                        data: {Grand},
                        
                        error: function() { alert('Ajax request 發生錯誤');},
                        
                        success: function(response) {
                            if(response.num=='1'){
                                one.html(response.one);
                                two.html(response.two);
                            }else{
                                alert('查询發生錯誤');
                            }
                            
                            
            
                        }
                   });
                }
               $(".p2").hide();
                
                $(this).parent().parent().next().toggle();
                
                $(this).parent().parent().next().next().toggle();
                return false;
            
            });

            $(".bu").click(function(){
                var Untreated=$('#Untreated').val();
                var treated=$('#treated').val();
                var password=$('#password').val();
                var ID=$('#ID').val();
                if(password==""){
                    return false;
                }
                if (Untreated!=0) {
                   
                    $.ajax({
                        url: "/ThinkPHP/yanJing/index.php/Admin/Member/xq",
                        type:'POST',
                        complete :function(){}, 
                        dataType: 'text', 
                        data: {ID,Untreated,treated,password},
                        
                        error: function() { alert('Ajax request 發生錯誤');},
                        
                        success: function(data) {
                            if(data!="false"){
                                $('#Untreated').val("0");
                                $('#treated').val(data);
                                alert('结算成功')
                            }else{
                                alert('结算錯誤,请检查密码是否正确');
                            }
                            
                            
            
                        }
                   });
                }
                return false;
            });

            $(".butt").click(function(){ 

               
                var password = $("input[name='password']").val();
               
                if(password==''){
                    return false;
                }
            }); 
        })
    </script>
</html>