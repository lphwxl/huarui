<?php
/* Smarty version 3.1.30, created on 2017-02-07 14:55:52
  from "E:\wamp\www\com.huadianhr\app\Back\view\Admin\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58996f78890d29_19222022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c097cc833a11aa8ff6d3d3a4786e934aad47eb7' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Admin\\show.html',
      1 => 1486450530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_58996f78890d29_19222022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_GET['sid'] == '1') {?>
    <?php if ($_GET['a'] == '1') {?>
        <div class="m-c-news">
            <form action="">
                <h3>企业简介</h3>
                <p id="add"><a href="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
">添加</a></p>
                <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
                <table id="tab">
                    <tr><td class="ids">编号</td><td>内容</td><td class="a-td"><span>操作</span></td></tr>
                   <tr>
                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                       <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] === '1') {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
</td>
                        <td><?php echo nl2br($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['content']);?>
</td>
                    <td class="a-td"><span><a href="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
&a=<?php echo $_GET['a'];?>
">修改</a></span><span>
                        <a href="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
&a=<?php echo $_GET['a'];?>
">删除</a></span></td>

                    <?php }?>
                    <?php
}
} else {
?>

                        <td>暂无数据</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                   </tr>
                </table>
                <?php }?>
            </form>
        </div>
        <?php } elseif ($_GET['a'] == '2') {?>
            <div class="m-c-news">
                <form action="">
                    <h3>企业文化</h3>
                    <p id="add"><a href="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
">添加</a></p>
                    <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
                    <table id="tab">
                        <tr><td class="ids">编号</td><td>内容</td><td class="a-td"><span>操作</span></td></tr>
                        <tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] === '2') {?>
                            <td><?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
</td>
                            <td><?php echo nl2br($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['content']);?>
</td>
                            <td class="a-td"><span>
                                <a href="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
&a=<?php echo $_GET['a'];?>
">修改</a></span><span>
                                <a href="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
&a=<?php echo $_GET['a'];?>
">删除</a></span>
                            </td>
                            <?php }?>
                            <?php
}
} else {
?>

                            <td>暂无数据</td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tr>
                    </table>
                    <?php }?>
                </form>
            </div>
        <?php } elseif ($_GET['a'] == '3') {?>
        <p style="margin-left:20px;font-weight: bold;">暂无数据</p>
     <?php }
} elseif ($_GET['sid'] == '2') {?>
<div class="m-c-news">
    <form action="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
" method="post">
        <p id="add"><a href="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
">添加</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
            <button type="submit" id="btn">批量删除</button></p>
        <table id="tab">
            <tr><td class="ids">编号</td><td>标题</td><td class="a-td"><span>操作</span></td></tr>
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
                    <td class="a-td"><span><a href="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></span><span><a href="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
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
<?php } else { ?>
<div class="m-c-news">
    <form action="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
" method="post">
        <p id="add"><a href="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
">添加</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['content']->value)) {?>
            <button type="submit" id="btn">批量删除</button></p>
        <table id="tab">
            <tr><td class="ids">编号</td><td>需求</td><td>职位</td><td class="a-td"><span>操作</span></td></tr>
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
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['position'];?>
</td>
                <td class="a-td"><span><a href="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></span><span><a href="?p=back&c=admin&m=dele&sid=<?php echo $_GET['sid'];?>
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
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
