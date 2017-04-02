<?php

    class HomeController extends BaseController{
        public function __construct(){
            parent::__construct();
            $admin = new Admin();
            $res = $admin->tab('hd_nav')->w('`sid`=0')->sele();
            !empty($res)&&$this->assign('nav',$res);
        }
    }


?>