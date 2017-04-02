<?php 
    class Db{
       private static $instance = null;
       private $obj = null;
       public $option = array();
       private function __construct($dsn,$username,$passwd){
           try {
               $this->obj = new PDO($dsn,$username,$passwd);
               $this->obj->query('set names utf8');
               $this->obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }catch(PDOException $e){
               return $e->getMessage();
           }
           
       }
       private function __clone(){}
       
       public static function getInstance($dsn,$username,$passwd){
           
           if(!self::$instance instanceof self){
               self::$instance = new self($dsn,$username,$passwd);
           }
           return self::$instance;
       }
       
       //表名
       public function table($table=''){
           $this->option['table'] = $table;
           return $this;
       }
       //设置 字段
       public function filed($str=''){
           if(is_string($str) && !empty($str)){
               $this->option['filed'] = $str;
           }
           if(is_array($str) && !empty($str)){
               $param = '';
               foreach ($str as $v){
                   $param .= "`$v`".',';
               }
               $this->option['filed'] = rtrim($param,',');
           }
           return $this;
       }
       //where 条件
       public function where($where=''){
           if(is_string($where)){
               $this->option['where'] = ' where '.$where;
           }
           return $this;
       }
       //limit限制条件
       public function limit($str=''){
           if(is_string($str)){
               $this->option['limit'] = ' limit '.$str;
           }
       }
       //order 排序
       public function order($str=''){
           if(is_string($str)){
               $this->option['order'] = ' order by '.$str;
           }
       }
       //
       //获取数据
       public function select(){
           $sql = 'select ';
           $sql .= isset($this->option['filed'])?$this->option['filed']:'*';
           $sql .= ' from ';
           $sql .= isset($this->option['table'])?$this->option['table']:'hd_user';
           $sql .= isset($this->option['where'])?$this->option['where']:'';
           $sql .= isset($this->option['order'])?$this->option['order']:'';
           $sql .= isset($this->option['limit'])?$this->option['limit']:'';
           $this->option = array();
           return $this->query($sql);
       }
       
       //添加数据
       public function insert($k='',$v=''){
           $sql = "insert into %s(%s) values(%s)";
           $sql = sprintf($sql,$this->option['table'],$k,$v);
           $this->option = array();
           return $this->exec($sql);
       }
       //删除数据
       public function delete(){
           $sql = 'delete from '.$this->option['table'].$this->option['where'];
           $this->option = array();
           return $this->exec($sql);
       }
       //修改数据
       public function update($v=''){
           $sql = 'update '.$this->option['table'].' set %s'.$this->option['where'];
           $sql = sprintf($sql,$v);
           return $this->exec($sql);
       }
       //执行sql语句
       public function query($sql){
           $result = $this->obj->query($sql);
           if(is_object($result)){
               $arr = array();
               while(!!$res = $result->fetch(PDO::FETCH_ASSOC)){
                   $arr[] = $res;
               }
               return $arr;
           }else{
               return $result;
           }  
       }
       //执行
       public function exec($sql){
           var_dump($sql);
           return $this->obj->exec($sql);
       }
       
      //获取总行数
      public function page($table=''){
          $where = isset($this->option['where'])?$this->option['where']:'';
          $sql = 'select count(*) as `row` from '.$table.$where;
          $row = $this->obj->query($sql);
          $row = $row->fetch(pdo::FETCH_ASSOC)['row'];
          if($row > 0){
              if($row > 8){
                  $page = new Page($row,4,8);
                  $this->option['limit'] = $page->limit;
                  $page = $page->show();
                  return array('msg'=>$page);
              }
              return false;
          }
          return array('msg'=>'暂无数据');
      }
    }



?>