<?php
/* Smarty version 3.1.30, created on 2017-02-08 19:08:42
  from "E:\wamp\www\com.huadianhr\app\Home\view\Index\desc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589afc3ae0f1a6_02732209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270cea4ba5906577e5c3bff23c222f51ae6c05d1' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Home\\view\\Index\\desc.html',
      1 => 1486552120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_589afc3ae0f1a6_02732209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- center start -->
<div class="center">
    <ul>
        <li>
            <a href="#">
                <img src="<?php echo @constant('IMG');?>
20161223030922585.jpg" alt="公司图片" height="470" width="1350"/>
            </a>
        </li>
    </ul>
</div>

<!-- end center -->
<!-- company-detail start -->
<div class="company-detail">
    <!-- cd_left start -->
    <div class="cd_left">
        <div class="cd_l_top">
            <ul id="cd-a">
                <li id="bg_blue"><span>公司概况</span></li>
                <li><a href="#">企业简介</a></li>
                <li><a href="#">资质建设</a></li>
                <li><a href="#">企业文化</a></li>
            </ul>
        </div>
        <div class="cd_l_bottom">
            <a href="#"><img src="<?php echo @constant('IMG');?>
c_13.jpg" alt=""/></a>
        </div>
    </div>
    <!-- end cd_left-->
    <!-- cd_right start -->
    <div class="cd_right">
        <!-- cd_r_top start -->
        <div class="cd_r_top" >
            <div class="cd-position">
                <p>当前位置：<a href="http://www.huadian.com">首页</a> > 企业简介</p>
                <h3>企业简介</h3>
            </div>
        </div>
        <!-- end cd_r_top-->
        <div class="cd_content">
            <!-- 内容 开始-->
            <div class="cd_c_p">

                <p>
                    <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                    　　<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] == '1') {?>
                        <?php echo nl2br($_smarty_tpl->tpl_vars['v']->value['content']);?>

                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </p>
            </div>
            <!-- 内容 结束 -->
            <!--cd-img start -->
            <div class="cd-img">
                <a href="#"><img src="<?php echo @constant('IMG');?>
20161210024603292.jpg" width='455' height="390" alt=""/></a>
            </div>
            <!-- end cd-img -->
        </div>

    </div>
    <!-- end cd_right -->
</div>
<!-- end company-detail -->
<?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
