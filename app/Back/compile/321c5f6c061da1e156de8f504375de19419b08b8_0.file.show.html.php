<?php
/* Smarty version 3.1.30, created on 2017-02-07 14:59:17
  from "E:\wamp\www\com.huadianhr\app\Back\view\Product\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58997045352345_27876845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '321c5f6c061da1e156de8f504375de19419b08b8' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Product\\show.html',
      1 => 1486450628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_58997045352345_27876845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="m-c-news">
    <form action="?p=back&c=product&m=dele&sid=<?php echo $_GET['sid'];?>
" method="post">
        <p id="add"><a href="?p=back&c=product&m=add&sid=<?php echo $_GET['sid'];?>
">添加</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
            <button type="submit" id="btn">批量删除</button></p>

        <table id="tab">
            <tr><td class="ids">编号</td><td>产品名称</td><td>产品简介</td><td class="a-td"><span>操作</span></td></tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr><td class="ids"><input type="checkbox" name='ids[]' value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['content'])) {?>
                    <td><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['content'],0,65);?>
...</td>
                    <?php } else { ?>
                    <td>暂无数据</td>
                <?php }?>
                <td class="a-td"><span><a href="?p=back&c=product&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></span><span><a href="?p=back&c=product&m=dele&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></span></td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <?php }?>
    </form>
	<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
    <table id="page">
        <tr style="text-align:center;"><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['html']->value['msg'];?>
</td></tr>

    </table>
	<?php }?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
