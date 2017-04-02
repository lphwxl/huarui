<?php
/* Smarty version 3.1.30, created on 2017-02-08 20:23:54
  from "E:\wamp\www\com.huadianhr\app\Back\view\public\_header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b0ddaec2039_30218310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a67cdd8f984ddc295f5fd8c50811f179ee2b46' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\public\\_header.html',
      1 => 1486555709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589b0ddaec2039_30218310 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>华瑞后台管理系统</title>
    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>
    <link href="<?php echo @constant('CSS');?>
admin.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo @constant('IMG');?>
icon.ico" type="image/x-icon" rel="shortcut icon"/>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery-1.8.3.min.js" type="text/javaScript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
menu.js" type="text/javaScript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo @constant('JS');?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo @constant('JS');?>
/ueditor/ueditor.all.js"> <?php echo '</script'; ?>
>
    </head>
<body>
<div class="first-flash" id="first-flash">
    <embed src="<?php echo @constant('IMG');?>
flash4102.swf">

</div>
<div class="top"></div>
<div id="header">
    <div class="logo">华瑞后台管理系统</div>
    <div class="navigation">
        <ul>
            <li>欢迎您！</li>
            <li><a href=""><?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {
echo $_smarty_tpl->tpl_vars['username']->value;
}?></a></li>
            <li><a href="">修改密码</a></li>
            <li><a href="">设置</a></li>
            <li><a href="?p=back&c=index&m=signOut">退出</a></li>
        </ul>
    </div>
</div>
<div id="content">
    <div class="left_menu">
        <ul id="nav_dot">
            <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value === 0) {?>
                    <h4 class="M<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="nav_h4"><span></span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h4>
                    <div class="d_hidden" id="d_hidden">
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&a=1">企业简介</a>
                        </p>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&a=2">企业文化</a>
                        </p>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&a=3">资质建设</a>
                        </p>
                    </div>
                    <?php } else { ?>
                    <h4 class="M<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span></span><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></h4>
                    <?php }?>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php } else { ?>
                <li>
                    <h4 class="M0"><span></span><a href="?p=back&c=admin&m=show&id=1">公司概况</a></h4>
                </li>
                <li>
                    <h4 class="M1"><span></span><a href="?p=back&c=admin&m=show&id=2">新闻中心</a></h4>
                </li>
                <li>
                    <h4 class="M2"><span></span><a href="?p=back&c=admin&m=show&id=3">招贤纳士</a></h4>
                </li>
                <li>
                    <h4 class="M3"><span></span><a href="?p=back&c=admin&m=show&id=4">产品模块</a></h4>
                </li>
                <li>
                    <h4 class="M4"><span></span><a href="?p=back&c=admin&m=show&id=5">客户留言</a></h4>
                </li>
            <?php }?>

        </ul>
    </div>
    <div class="m-right">
        <div class="right-nav">
            <ul>
                <li><img src="<?php echo @constant('IMG');?>
home.png"></li>
                <li style="margin-left:25px;">您当前的位置：</li>
                <li><a href="http://www.huadian.com/?p=back&c=admin&m=index">首页</a></li>

                <?php if (isset($_GET['sid'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_GET['sid'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>
                <li>></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                <?php break 1;?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
            </ul>
        </div>
        <div class="main">
            <!-- 操做成功 开始 -->
            <div class="success" id="success">
            </div>
            <div class="s_time" id="s_time">
                <h2>操作成功</h2>
                <p><span id="second">5</span> 秒 页面跳转中 , 请稍后 ....</p>
                <p>如无法正常跳转 , 请点击 <a href="?p=back&c=<?php if (isset($_GET['c'])) {
echo $_GET['c'];
}?>&m=show<?php if (isset($_GET['sid'])) {?>&sid=<?php echo $_GET['sid'];
}?>" title="点击跳转">跳转</a></p>
            </div>
            <!-- 操作成功结束 --><?php }
}
