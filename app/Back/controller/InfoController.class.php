<?php 

    class InfoController extends BackController{
        
        //显示数据
        public function show(){
            $admin = new Admin();
            $html = $admin->pag('hd_info');
            $res = $admin->tab('hd_info')->ord('timestamp desc')->sele();
            foreach ($res as &$v){
                $v['timestamp'] = date('Y-m-d',$v['timestamp']);
            }
            $html && $this->assign('html', $html);
            $this->assign('content', $res);
            $this->display('show.html');
        }
        //删除数据
        public function dele(){
            $admin = new Admin();
            if(isset($_POST['ids'])){
                if(isset($_POST['ids'])){
                    $k = '';
                    foreach ($_POST['ids'] as $v){
                        $k .= $v.',';
                    }
                    $k = rtrim($k,',');
                    $res = $admin->tab('hd_info')->w("id in ($k)")->dele(true);
                }
            }
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $res = $admin->tab('hd_info')->w('id='.$id)->dele(true);
            }
            $this->success('show.html',$res,$c='info');
        }
        public function send(){
            $admin = new Admin();
            $res = $admin->tab('hd_info')->w('id='.$_GET['id'])->sele();
            $to = $res[0]['email'];
            $title = $res[0]['title'];
            $content = "<p>联系人:{$res[0]['name']}</p><p>联系电话:{$res[0]['tel']}</p><p>邮箱:{$res[0]['email']}</p><p>公司:{$res[0]['company']}</p><p>地址:{$res[0]['address']}</p><p style='margin-bottom:40px;'>内容:{$res[0]['content']}</p><p style='font-size:18px;'><span style='font-weight:bold;'>注意：</span>请尽快联系该客户</p>";
            $result = senMail($to,$title,$content);
            if($result['error']){
                $res = $admin->tab('hd_info')->w('id='.$_GET['id'])->dele(false,'isdel=0');
            }
            exit(json_encode($result));
        }
    }




?>