<?php
/* Smarty version 3.1.30, created on 2017-02-08 16:01:41
  from "E:\wamp\www\com.huadianhr\app\Home\view\Index\development.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589ad065dfc049_74889316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e833bfa4197088027625b3c00de1ce994cf372' => 
    array (
      0 => 'E:\\wamp\\www\\com.huadianhr\\app\\Home\\view\\Index\\development.html',
      1 => 1486540878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../public/_header.html' => 1,
    'file:../public/_footer.html' => 1,
  ),
),false)) {
function content_589ad065dfc049_74889316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../public/_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- center start -->
<!-- center start -->
<div class="center">
    <ul>
        <li>
            <a href="#">
                <img src="<?php echo @constant('IMG');?>
20161230040712914.jpg" alt="公司图片" height="470" width="1350"/>
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
                <li id="bg_blue"><span>新闻中心</span></li>
                <li><a href="#">行业动态</a></li>
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
                <p>当前位置：<a href="http://www.huadian.com">首页</a> > 新闻中心</p>
                <h3>新闻中心</h3>
            </div>
        </div>
        <!-- end cd_r_top-->
        <div class="cd_content">
            <!-- 内容 开始-->
            <div class="cd_c_p">
                <ul>
                    <li>
                        <i></i><a href="#">华电恒瑞顺利通过国网山东省电力公司供应商资质能力核实</a>
                    </li>
                    <li>
                        <i></i><a href="#">我国首台AP1000核电机组将于明年底投运</a>
                    </li>
                    <li>
                        <i></i><a href="#">国家能源局1日三文挺光伏要求电网年底加速并网</a>
                    </li>
                    <li>
                        <i></i><a href="#">我国清洁能源比重提升</a>
                    </li>
                    <li>
                        <i></i><a href="#">2014年光伏产业发展情况</a>
                    </li>
                    <li>
                        <i></i><a href="#">经济日报：迎接国际能源合作时代 原文作者：王轶辰</a>
                    </li>
                </ul>
            </div>
            <!-- 内容 结束 -->
            <!--news start -->
            <div class="news">
            </div>
            <!-- end news -->
        </div>

    </div>
    <!-- end cd_right -->
</div>
<!-- end company-detail -->
<?php $_smarty_tpl->_subTemplateRender("file:../public/_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
