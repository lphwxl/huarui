<?php


    class Model{
        protected $obj = null;
        
        public function __construct(){
            global $config;
            $type = isset($config['type'])?$config['type']:'mysql';
            $host = isset($config[$type]['host'])?$config[$type]['host']:'localhost';
            $dbname = isset($config[$type]['dbname'])?$config[$type]['dbname']:'huadian';
            $username = isset($config[$type]['username'])?$config[$type]['username']:'root';
            $psd = isset($config[$type]['passwd'])?$config[$type]['passwd']:'';
            $dsn = "$type:host=$host;dbname=$dbname";
            $this->obj = Db::getInstance($dsn, $username, $psd);
        }
        
        
        protected function select(){
            return $this->obj->select();
        }
        protected function exec($sql){
            return $this->obj->select();
        }
        //表名
        public function table($table=''){
            $this->obj->table($table);
            return $this;
        }
        //设置 字段
        public function filed($str=''){
            $this->obj->filed($str);
            return $this;
        }
        //where 条件
        public function where($where=''){
            $this->obj->where($where);
            return $this;
        }
        
        //排序
        public function order($str=''){
            $this->obj->order($str);
            return $this;
        }
        //限制条件
        public function limiter($str=''){
            $this->obj->limit($str);
            return $this;
        }
        //分页
        public function page($table=''){
            return $this->obj->page($table);
            
        } 
        public function insert($k='',$v=''){
            return $this->obj->insert($k,$v);
        }
        //删除数据
        public function delete(){
           return $this->obj->delete();
        }
        //更新数据
        public function update($v=''){
           return $this->obj->update($v);
        }
    }
    


?>