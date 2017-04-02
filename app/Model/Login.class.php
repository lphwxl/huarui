<?php

    class Login extends Model{
        
        //where条件
        public function w($where=''){
            $this->where($where);
            return $this;
        }
        //字段
        public function fileds($str=''){
            $this->filed($str);
            return $this;
        }
        public function sele(){
            return $this->select();
        }
        
        
        
    }


?>