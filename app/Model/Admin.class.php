<?php

    class Admin extends Model{
        
        
        //表名
        public function tab($table=''){
            $this->table($table);
            return $this;
        }
        //筛选数据
        public function sele(){
            return $this->select();
        }
        
        //order 排序
        public function ord($str=''){
            $this->order($str);
            return $this;
        }
        
        //limit 限制条件
        public function limit($str=''){
            $this->limiter($str);
            return $this;
        }
        public function fileds($str=''){
            $this->filed($str);
            return $this;
        }
        public function pag($table=''){
            return $this->page($table);
        }
        public function add($k='',$v=''){
           return $this->insert($k,$v);
        }
        public function w($where=''){
            return $this->where($where);
        }
        
        //真假删除数据 delete from table where id=1
        public function dele($mark=false,$v=''){
            return $mark? $this->delete():$this->update($v);
        }
        //更新数据
        public function upda($v=''){
            return $this->update($v);
        }
    }


?>