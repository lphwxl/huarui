<?php
/* Smarty version 3.1.30, created on 2017-02-08 20:33:35
  from "E:\wamp\www\com.huadianhr\app\Back\view\Admin\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b101f88ba28_57532305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70accbab65d3c05d333692b04805316734b495d3' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Admin\\add.html',
      1 => 1486557209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_589b101f88ba28_57532305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_GET['sid'] == '1') {
if ($_GET['a'] == '1') {?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
" method="post">
            <ul id="info-form">
                <li>企业简介</li>
                <li><label>内容:</label><textarea  name="content" id="cont"></textarea>
                    <?php echo '<script'; ?>
>var cont  = UE.getEditor('cont'); <?php echo '</script'; ?>
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
        <form action="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
&a=<?php echo $_GET['a'];?>
" method="post">
            <ul id="info-form">
                <li>企业文化</li>
                <li><label>内容:</label><textarea  name="content" id="culture"></textarea></li>
                <?php echo '<script'; ?>
>var culture  = UE.getEditor('culture'); <?php echo '</script'; ?>
>
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
        <form action="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
" method="post">
            <ul id="info-form">
                <li><label>新闻标题:</label><input type="text" name="title" /></li>

                <li><label>信息来源:</label><input type="text" name="author"/></li>
                <li><label>新闻内容:</label><textarea  name="content" id="news_con"></textarea></li>
                <?php echo '<script'; ?>
>var content  = UE.getEditor('news_con'); <?php echo '</script'; ?>
>
                <li>
                    <select name="isdel" id="isdel">
                        <option>是否可见</option>
                        <option value="1">是</option>
                        <option value="0">否</option>
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
        <form action="?p=back&c=admin&m=add&sid=<?php echo $_GET['sid'];?>
" method="post">
            <ul id="info-form">
                <li><label>标题:</label><input type="text" name="title" /></li>
                <li><label>人数:</label><input type="text" name="number"/></li>
                <li><label>职位:</label><input type="text" name="position"/></li>
                <li><label>工作职责:</label><textarea  name="work" id="work1"></textarea></li>
                <?php echo '<script'; ?>
>var content  = UE.getEditor('work1'); <?php echo '</script'; ?>
>
                <li><label>任职要求:</label><textarea  name="requirements" id="requirements1"></textarea></li>
                <?php echo '<script'; ?>
>var content  = UE.getEditor('requirements1'); <?php echo '</script'; ?>
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
