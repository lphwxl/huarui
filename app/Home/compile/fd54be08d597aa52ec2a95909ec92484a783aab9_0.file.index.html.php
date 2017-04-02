<?php
/* Smarty version 3.1.30, created on 2017-02-12 21:05:56
  from "E:\wamp\www\com.huadianhr\app\Home\view\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a05db479bfc2_57270356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd54be08d597aa52ec2a95909ec92484a783aab9' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Home\\view\\Index\\index.html',
      1 => 1486904745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_58a05db479bfc2_57270356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- center start -->
    <div class="center">
        <ul id="banner">
            <li>
            
                <a href="#">
                    <img src="<?php echo @constant('IMG');?>
banner1.jpg" style="display: block;" alt="公司图片" height="470" width="1350"/>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo @constant('IMG');?>
20161223031145941.jpg" alt="公司图片" width="1350" height="470"/>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo @constant('IMG');?>
20161223031146799.jpg" alt="公司图片" width="1350" height="470"/>
                </a>
            </li>
        </ul>
        <div class="number" id="scroll_number">
            <a href="javascript:void(0);" style="background:#FF7700;">1</a>
            <a href="javascript:void(0);">2</a>
            <a href="javascript:void(0);">3</a>
        </div>
    </div>

<!-- end center -->
    <!-- detail start -->
    <div class="detail">
        <!-- d_left start -->
        <div class="d_left">
            <div class="d_l_top">
                <p class="c1">推荐新闻 <span><a href="?cid=3" target="" class="more">MORE >></a></span></p>
            </div>
            <div class="d_l_center">
                <div class="l_c_container">
                    <div class="c_img">
                        <a href="#"><img src="<?php echo @constant('IMG');?>
h_20.jpg" alt=""/></a>
                    </div>
                    <div class="container">
                        <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                        <a href="?m=show&cid=3&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['title'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['content']->value[0]['title'],0,10);?>
...</a>
                        <p>　　<?php echo mb_substr($_smarty_tpl->tpl_vars['content']->value[0]['content'],0,50);?>
...</p>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="d_l_bottom">
                <ul>
                    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <span class="bg_icon"></span>
                        <a href="?m=show&cid=3&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                        <p class="timestamp"><span class="time"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['timestamp']);?>
</span></p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </ul>
            </div>
        </div>
        <!-- end d_left-->
        <!-- d_center start -->
        <div class="d_center">
            <div class="d_l_top">
                <p class="c1">公司简介 <span><a href="?cid=2" target="" class="more">MORE >></a></span></p>
            </div>
            <div class="d_c_detail">
                <div class="c_d_container">
                    <div class="ct2img">
                        <a href="#">
                            <img src="<?php echo @constant('IMG');?>
20161215105921999.png" alt=""/>
                        </a>
                    </div>
                    <div >
                        <?php if (isset($_smarty_tpl->tpl_vars['cd_content']->value)) {?>
                        <a href="?cid=2">
                            <?php echo mb_substr($_smarty_tpl->tpl_vars['cd_content']->value[0]['content'],0,174);?>
...
                        </a>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
        <!-- end d_center -->
        <!-- d_right start -->
        <div class="d_right">
            <div class="d_l_top" >
                <p >产品介绍 <span><a href="?cid=4" target="" class="more">MORE >></a></span></p>
            </div>
            <div class="product">
                <ul>
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <div>
                            <a href="?m=show&cid=4&id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['bigimg'];?>
" alt="" width="85" height="58"/></a>
                        </div>
                        <p>
                            <a href="?m=show&cid=4&id<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                        </p>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>

                </ul>
            </div>
        </div>
        <!-- end d_right -->
    </div>
    <!-- end detail -->
<?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
