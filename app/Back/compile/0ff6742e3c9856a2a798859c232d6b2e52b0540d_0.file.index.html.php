<?php
/* Smarty version 3.1.30, created on 2017-02-04 19:58:18
  from "E:\wamp\www\com.huadianhr\app\Back\view\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895c1dab3eab9_50404469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff6742e3c9856a2a798859c232d6b2e52b0540d' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\index\\index.html',
      1 => 1486039926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895c1dab3eab9_50404469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>华瑞后台管理系统</title>
    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>
    <link href="<?php echo @constant('CSS');?>
index.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo @constant('IMG');?>
icon.ico" type="image/x-icon" rel="shortcut icon"/>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery-2.0.3.min.js" type="text/javaScript"><?php echo '</script'; ?>
>
    <style type="text/css"></style>
</head>
<body>
    <div class="container">
        <!-- c_login start -->
        <div class="c_login">
            <h1>华瑞后台管理系统</h1>
            <div class="c_info">
                <form action="">
                    <ul id="info">
                        <li >
                            <input type="hidden" name="time" value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"/>
                            <label for="user">用户名: </label>
                            <input type="text" name="user"  placeholder="请输入用户名" id="user" class="dis_input"/>
                            <p class="tip">用户名长度在5-16位,不含空格</p>
                        </li>
                        <li>

                            <label for="psd">密码: </label>
                            <input type="password" name="psd" placeholder="密码" id="psd" class="dis_input"/>
                            <p class="tip">密码长度在6-20位,不含空格</p>
                        </li>
                        <li>
                            <label for="code">验证码: </label>
                            <input type="text" name="code" id="code" class="dis_input"/>
                            <img src="?p=back&c=index&m=code" id="img_code" alt="点击更换验证码" title="点击刷新"/>
                            <p class="tip">验证码为四位</p>
                        </li>
                    </ul>
                </form>
                <p><button id="btn" class="btn">登录</button></p>
            </div>
        </div>
        <!-- end c_login -->
    </div>
    <!-- 登录成功 开始 -->
    <div class="success" id="success">
    </div>
    <div class="s_time" id="s_time">
        <h2>登陆成功</h2>
        <p><span id="second">5</span> 秒 页面跳转中 , 请稍后 ....</p>
        <p>如无法正常跳转 , 请点击 <a href="?p=back&c=admin&m=index" title="点击跳转">跳转</a></p>
    </div>
    <!-- 登录成功结束 -->
<?php echo '<script'; ?>
 type="text/javascript">
    var timer = null;

    $(document).ready(function(){
        var oInfo = $('#info');
        var regJson = [/^\w{5,16}$/, /^\w{6,20}$/,/^[a-zA-Z0-9]{4}$/];
        /* 验证码刷新 */
        $('#img_code').click(function(){
            this.src = '?p=back&c=index&m=code&a='+Math.random();
        });
        /* 验证表单 */
        oInfo.find('input.dis_input').each(function(i){
            this.onkeyup = function(){
                var val = this.value;
                if(!regJson[i].test(val)){
                    oInfo.find('p.tip').eq(i).css('opacity','1');
                }else{
                    oInfo.find('p.tip').eq(i).css('opacity','0');
                }
            };
        });
        /* 提交表单 */
        $('#btn').click(function(){
            $.ajax({
                type:'post',
                data:$('form').serialize(),
                url:'?p=back&c=index&m=handle',
                success:function(data){
                    eval('var data = '+data);
                    if(data.error === 0){
                        alert(data.msg);
                        $('#img_code').prop('src','?p=back&c=index&m=code&a='+Math.random());
                    }
                    if(data.error){
                        $('#success,#s_time').css('display','block');
                        var second = 4;
                        timer = setInterval(function(){
                            if(!isNaN(second) && second > 0){
                                $('#second').html(second);
                                second --;
                            }else{
                                clearInterval(timer);
                                window.location.href = '?p=back&c=admin&m=index';
                            }
                        },1000);
                    }
                }
            });
        });
    });
    /* 刷新验证码 */
    function flush(){
        this.src = '?p=back&c=index&m=code&a='+Math.random();
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
