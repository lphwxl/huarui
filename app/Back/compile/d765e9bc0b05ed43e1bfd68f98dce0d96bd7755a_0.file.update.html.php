<?php
/* Smarty version 3.1.30, created on 2017-02-08 20:28:21
  from "E:\wamp\www\com.huadianhr\app\Back\view\Admin\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b0ee54930e5_99071546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd765e9bc0b05ed43e1bfd68f98dce0d96bd7755a' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Admin\\update.html',
      1 => 1486556897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_589b0ee54930e5_99071546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_GET['sid'] == '1') {
if ($_GET['a'] == '1') {?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
&id=<?php echo $_GET['id'];?>
" method="post">
            <ul id="info-form">
                <li>企业简介</li>
                <li><label>内容:</label><textarea  name="content" id="cont">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['cid'] == '1') {?>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['content'];?>

                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </textarea>
                    <?php echo '<script'; ?>
>var content  = UE.getEditor('cont'); <?php echo '</script'; ?>
>
                </li>
                <li>
                    <input type="hidden" name="cid" value="1"/>
                </li>
                <li>
                    <input type="submit" name='sub' value="提交" id="sub"/>
                </li>
            </ul>

        </form>
    </div>
</div>
<?php } elseif ($_GET['a'] == '2') {?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
&id=<?php echo $_GET['id'];?>
" method="post">
            <ul id="info-form">
                <li>企业文化</li>
                <li><label>内容:</label>
                    <textarea  name="content" id="culture">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['cid'] == '2') {?>
                                <?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['k']->value]['content'];?>

                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </textarea>
                    <?php echo '<script'; ?>
>var culture  = UE.getEditor('culture'); <?php echo '</script'; ?>
>
                </li>
                <li>
                    <input type="hidden" name="cid" value="2"/>
                </li>
                <li>
                    <input type="submit" name='sub' value="提交" id="sub"/>
                </li>
            </ul>

        </form>
    </div>
</div>
<?php } elseif ($_GET['a'] == '3') {?>
<p>暂无操作</p>
<?php }
} elseif ($_GET['sid'] == '2') {?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_GET['id'];?>
" method="post">
            <ul id="info-form">
                <li><label>新闻标题:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['title'];?>
"/></li>

                <li><label>信息来源:</label><input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['author'];?>
"/></li>
                <li><label>新闻内容:</label><textarea  name="content" id="news_con"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['content'];?>
</textarea></li>
                <?php echo '<script'; ?>
>var news_con  = UE.getEditor('news_con'); <?php echo '</script'; ?>
>
                <li>
                    <select name="isdel" id="isdel">
                        <option>是否可见</option>

                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['content']->value[0]['isdel'] == '1') {?>selected="selected"<?php }?>>是</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['content']->value[0]['isdel'] == '0') {?>selected="selected"<?php }?>>否</option>
                    </select>
                </li>
                <li>
                    <input type="submit" name='sub'value="提交" id="sub"/>
                </li>
            </ul>

        </form>
    </div>
</div>
<?php } else { ?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=admin&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_GET['id'];?>
" method="post">
            <ul id="info-form">
                <li><label>标题:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['title'];?>
"/></li>
                <li><label>人数:</label><input type="text" name="number" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['number'];?>
"/></li>
                <li><label>职位:</label><input type="text" name="position" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['position'];?>
"/></li>
                <li><label>工作职责:</label><textarea  name="work" id="work"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['work'];?>
</textarea></li>
                <?php echo '<script'; ?>
>var work  = UE.getEditor('work'); <?php echo '</script'; ?>
>
                <li><label>任职要求:</label><textarea  name="requirements" id="requirements"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['requirements'];?>
</textarea></li>
                <?php echo '<script'; ?>
>var requirements  = UE.getEditor('requirements'); <?php echo '</script'; ?>
>
                <li>
                    <input type="submit" name='sub'value="提交" id="sub"/>
                </li>
            </ul>
        </form>
    </div>
    <?php }?>


    <?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
