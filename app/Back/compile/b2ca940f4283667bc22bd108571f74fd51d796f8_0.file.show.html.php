<?php
/* Smarty version 3.1.30, created on 2017-02-07 21:20:06
  from "E:\wamp\www\com.huadianhr\app\Back\view\Info\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5899c986ac79b6_28700458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ca940f4283667bc22bd108571f74fd51d796f8' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Info\\show.html',
      1 => 1486464331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_5899c986ac79b6_28700458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="m-c-news">
    <form action="?p=back&c=info&m=dele&sid=<?php echo $_GET['sid'];?>
" method="post">
        <?php if (isset($_smarty_tpl->tpl_vars['content']->value) && (!empty($_smarty_tpl->tpl_vars['content']->value))) {?>
        <p id="add">
            <button type="submit" id="btn">批量删除</button>
        </p>
        <table id="tab">
            <tr><td>序号</td><td>标题</td><td>留言者</td><td>联系方式</td><td>邮箱</td><td>公司</td><td>地址</td><td>内容</td><td>时间</td><td class="a-td"><span>操作</span></td></tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <?php if (!empty($_smarty_tpl->tpl_vars['v']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value !== 'isdel') {?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value === 'id') {?>
                <td class="ids"><input type="checkbox" name='ids[]' value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"/><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                <?php } else { ?>
                <td>无</td>
                <?php }?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <td><p>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['isdel'] === '0') {?>
                    <button type="button" class="infobox send" disabled='disabled' style="cursor:no-drop;">已发送</button>
                    <?php } else { ?>
                    <button type="button" class="infobox send" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">发送</button>
                    <?php }?>
                </p>
                    <p>
                        <a href="?p=back&c=info&m=dele&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="infobox a-dele" onclick="javascript:confirm('确认删除');return false;">删除</a></p></td>
                <?php }?>
            </tr>
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
