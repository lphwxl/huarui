<?php
/* Smarty version 3.1.30, created on 2017-02-04 18:42:15
  from "E:\wamp\www\com.huadianhr\app\Back\view\Admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895b00769a058_98400934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64ea330bf246c5e9a8d0ffae6be6018d9c4d53b' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Admin\\index.html',
      1 => 1486204931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_5895b00769a058_98400934 (Smarty_Internal_Template $_smarty_tpl) {
?>
           <?php $_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if (!isset($_GET['id'])) {?>
                <div class="m_left">
                    <p class="m_detail"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
&a=1">查看详情 >> </a></p>
                    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['name'];?>
</h3>
                    <div class="m_l_content">
                        <h4>企业文化</h4>
                        <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                            <p class="detail">
                                <?php echo nl2br($_smarty_tpl->tpl_vars['content']->value[1]['content']);?>

                            </p>
                        <?php }?>
                        <h4>企业概况</h4>
                        <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
                            <p class="detail">
                                <?php echo $_smarty_tpl->tpl_vars['content']->value[0]['content'];?>

                            </p>
                        <?php }?>
                    </div>
                </div>
            <!-- m_center start -->
                <div class="m_center">
                    <p class="m_detail"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[1]['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['data']->value[1]['id'];?>
">查看详情 >> </a></p>
                    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value[1]['name'];?>
</h3>
                    <div class="m_l_content">
                        <h4>新闻列表</h4>
                        <?php if (isset($_smarty_tpl->tpl_vars['news']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

                                <p class="detail">
                                    <span class="bg_icon"></span>
                                    <?php echo ($_smarty_tpl->tpl_vars['v']->value['title']);?>

                                </p>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                    </div>
                </div>
            <!-- end m_center -->
            <!-- m_right start -->
                <div class="m_right">
                    <p class="m_detail"><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[2]['href'];?>
&sid=<?php echo $_smarty_tpl->tpl_vars['data']->value[2]['id'];?>
">查看详情 >> </a></p>
                    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value[2]['name'];?>
</h3>
                    <div class="m_l_content">
                        <h4>招贤纳士</h4>
                        <?php if (isset($_smarty_tpl->tpl_vars['hum']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hum']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <p class="detail">
                            <span class="bg_icon"></span>
                            <?php echo ($_smarty_tpl->tpl_vars['v']->value['title']);?>
(<?php echo $_smarty_tpl->tpl_vars['v']->value['position'];?>
)
                        </p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                    </div>
                </div>
            <!-- end m_right -->
            <?php }?>
           <?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
