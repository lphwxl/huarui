<?php

	

 /* 该类处理上传的图片  */
     class Upload{
         private $param = array();
         private $type = array();
         private $dir = '';
         private static $filepath = 'filepath';
         private static $instance = null;
         private function __construct($param=array()){
             $this->param = $param;
             $this->_init();
         }
         private function __clone(){}
         
         public static function getInstance($param=array()){
             if(!self::$instance instanceof self){
                 self::$instance = new self($param);
             }
             return self::$instance;
         }
         //设置限定类型
         private  function _init(){
             $this->type = array('jpg','jpeg','png');
         }
         //文件类型判断
         private function type(){
             $info = new finfo(FILEINFO_MIME_TYPE);
             $name = $info->file($this->param['tmp_name']);
             $fileType = substr($this->param['name'],strrpos($this->param['name'], '.')+1);
             $index = strpos($name,'/');
             $suffix = substr($name, $index+1);
             $type = substr($name, 0,$index);
             if($this->param['error'] !== 0){
                 return json_encode(array(
                     'error'=>0,
                     'msg'=>'上传失败'
                 ));
             }
             if(in_array($suffix, $this->type) && in_array($fileType, $this->type)){
                 if($this->param['size'] < 8*1024*1024){
                     return $this->_mkdir($type,$fileType);
                 }
                 return array(
                     'error'=>0,
                     'msg'=>'上传失败:文件过大'
                 );
             }
             return array(
                 'error'=>0,
                 'msg'=>'上传失败:类型错误'
             );
         }
         //创建目录和移动文件
         private function _mkdir($type='',$fileType=''){
             //  upload/文件类型/上传者/年月日/uniqid().$suffix
          
             $this->dir = 'upload/'.$type.'/'.$_SESSION['user'].'/'.date('Ymd').'/';
             if(!file_exists($this->dir)){
                 mkdir($this->dir,0777,true);
             }
             $filename = $this->dir.uniqid().'.'.$fileType;
             
             $result = move_uploaded_file($this->param['tmp_name'],$filename);
                if(!$result){
                    return array(
                        'error'=>0,
                        'msg'=>'上传失败:无法加载'
                    );
                }
                $_SESSION[self::$filepath][] = $filename;
                return array(
                    'error'=>1,
                    'msg'=>'上传成功'
                );
         } 
         //设置文件存储
         public function setPath($filepath='filepath'){
             self::$filepath = $filepath;
             return $this;
         }
         public function show(){
             return $this->type();
         }
     }
?>	