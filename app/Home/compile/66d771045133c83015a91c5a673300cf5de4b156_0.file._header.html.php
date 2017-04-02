<?php
/* Smarty version 3.1.30, created on 2017-02-10 11:48:54
  from "E:\wamp\www\com.huadianhr\app\Home\view\public\_header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589d3826058248_37230174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d771045133c83015a91c5a673300cf5de4b156' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Home\\view\\public\\_header.html',
      1 => 1486698530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589d3826058248_37230174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <title>北京华电恒瑞电力工程技术有限公司</title>
    <meta name="keywords" content="华电恒瑞;华电恒瑞集团;北京华电"/>
    <meta name="description" content="高低压开关及成套设备生产销售"/>
    <link rel="stylesheet" href="<?php echo @constant('CSS');?>
index.css" type="text/css"/>
    <link rel="shortcut icon" href="<?php echo @constant('IMG');?>
electricity.png" type="image/x-icon"/>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery-2.0.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
menu.js"><?php echo '</script'; ?>
>
</head>
<body>
<!-- header start-->
<div class="header">
    <!-- h_right start -->
    <div class="h_right">
        <a href="#">设为首页</a>
        <a href="#">加入收藏</a>
    </div>
    <!-- end h_right -->
    <div class="h_icon">
    </div>
    <!-- h_nav start -->
    <div class="h_nav">
        <div class="h_n_left" id="h_n_left">
        	<?php if (isset($_smarty_tpl->tpl_vars['nav']->value)) {?>
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        		<?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == '1') {?><a href="http://www.huadian.com" <?php if (!isset($_GET['cid'])) {?>class="n_hover"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
     			<?php } else { ?>
     			<a href="http://www.huadian.com?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if (isset($_GET['cid']) && ($_GET['cid'] == $_smarty_tpl->tpl_vars['v']->value['id'])) {?>class="n_hover"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
        		<?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </div>
        <div class="h_n_search">
            <form action="" method="get">
                <input type="hidden" name="" value="home"/>
                <input type="hidden" name="" value=""/>
                <input type="hidden" name="" value=""/>
                <input type="text" name="con" class="search h_n_input" id="search"/>
                <input type="submit" name="sub" value="搜索" class="sub h_n_input" id="sub"/>
            </form>
        </div>
    </div>
    <!-- end h_nav-->
</div>
<!-- end header -->

<?php }
}
