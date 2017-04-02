<?php
/* Smarty version 3.1.30, created on 2017-02-08 20:22:52
  from "E:\wamp\www\com.huadianhr\app\Back\view\Product\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589b0d9c21b8e9_65126652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4afd9c506897e5e5fc3bc25d1174cfe65092fe' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Back\\view\\Product\\add.html',
      1 => 1486556424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_589b0d9c21b8e9_65126652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if (isset($_GET['id'])) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=product&m=handle&sid=<?php echo $_GET['sid'];?>
&id=<?php echo $_GET['id'];?>
" method="post" enctype="multipart/form-data">
            <ul id="info-form">
                <li><label>产品名称:</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['content']->value[0]['title'];?>
"/></li>
                <li><label>描述:</label><textarea  name="content" id="desc"><?php echo $_smarty_tpl->tpl_vars['content']->value[0]['content'];?>
</textarea></li>
                <?php echo '<script'; ?>
>var desc  = UE.getEditor('desc');<?php echo '</script'; ?>
>
                <li class="upload"><label>图片说明:</label><div id="upload1" class="upload-btn">上传</div><input type="file" multiple='multiple' name="files_d1[]" id="file1"/></li>
                <li class="upload"><label>产品原图:</label></label><div id="upload2" class="upload-btn">上传</div><input type="file" multiple='multiple' name="files_d2[]" id="file2"/></li>
                <li>
                    <select name="isdel" id="isdel">
                        <option>是否可见</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['content']->value[0]['isdel'] == '1') {?>selected<?php }?>>是</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['content']->value[0]['isdel'] == '0') {?>selected<?php }?>>否</option>
                    </select>
                </li>
                <li>
                    <select name="previmg" id="previmg">
                        <option>是否覆盖原图</option>
                        <option value="1">否</option>
                        <option value="0">是</option>
                    </select>
                </li>
                <li>
                    <input type="submit" name='sub'value="提交" id="sub"/>
                </li>
            </ul>
        </form>
    </div>
    <?php }?>
    <?php } else { ?>
<div class="m-c-news">
    <div class="info" id="info">
        <form action="?p=back&c=product&m=add&sid=<?php echo $_GET['sid'];?>
" method="post" enctype="multipart/form-data">
            <ul id="info-form">
                <li><label>产品名称:</label><input type="text" name="title" /></li>
                <li><label>描述:</label><textarea  name="content" id="desc"></textarea></li>
                <?php echo '<script'; ?>
>var desc  = UE.getEditor('desc');<?php echo '</script'; ?>
>
                <li class="upload"><label>图片说明:</label><div id="upload1" class="upload-btn">上传</div><input type="file" multiple='multiple' name="files_d1[]" id="file1"/></li>
                <li class="upload"><label>产品原图:</label></label><div id="upload2" class="upload-btn">上传</div><input type="file" multiple='multiple' name="files_d2[]" id="file2"/></li>
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
    <?php }?>
    <div class="container" id="container">
        <div class="con-top" id="con-top">
            <button id="but-one" class="btn-info">选择文件</button>
            <button id="but-two" class="btn-info" data-id="&id=1" disabled="disabled">上传文件</button>
            <button id="close" class="btn-info">关闭</button>
        </div>
        <div class="nav-file" id="nav-file">

        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
