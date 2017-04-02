<?php
/*
 * 分页的原理：当前页面(page-1)*显示数据
 *   @param $limit 查询数据库的限制条件
 *   @param $page 当前页面的的页数
 *   @param $url  访问的路径
 *   @param $html 显示的内容
 *   @param $total_page 总页面的数  ceil($all_num/$num)
 *   @param $tab_num 每页显示的导航数量 floor($tab_num/2)
 *   @param $all_num 数据总量
 *   @param $num 每页显示的数据量
 *
 *   */




    
    class Page{
        private $limit;
        private $url;
        private $page;
        private $html;
        private $total_page;
        private $tab_num;
        private $num;
        private $all_num;
        function __construct($all_num,$tab_num=4,$num=4){
            $this->all_num = $all_num;
            $this->num = $num;
            $this->tab_num = floor($tab_num/2);
            $this->total_page = ceil($all_num/$num);
            $this->getLimit();
            $this->url = $this->getUrl();

        }
        /*
         * @name 获取页面的地址
         * @return $url
        */
        //获取访问的页面地址
        private function getUrl(){

            $url = $_SERVER['REQUEST_URI'];
            $url .= strrpos($_SERVER['REQUEST_URI'],'?')?'':'?';
            $arr_url = parse_url($url);

            if(isset($arr_url['query']) && !empty($arr_url['query'])){
                parse_str($arr_url['query'],$arr_query);
                if(isset($arr_query['page'])){
                    unset($arr_query['page']);
                }
                $str_url = http_build_query($arr_query);
                $url = $str_url?$arr_url['path'].'?'.$str_url.'&':$arr_url['path'].'?';

            }

            return $url;
        }


        /*
         * @name 获取限制条件
         * @param $limit  限制条件
        */
       //获取限制条件
       private function getLimit(){
          $this->page = isset($_GET['page'])?$_GET['page']:1;
          if($this->page < 0){
              $this->page = 1;
          }
          if($this->page > $this->total_page){
              $this->page = $this->total_page;

          }

          $limit = ($this->page-1)*$this->num;
          $this->limit = " limit {$limit},{$this->num}";

       }
       /*
        * @name 显示上一页
        * @param  $page  上一页
       */
       //上一页
       private function prePage(){
           $page = $this->page - 1;
           if($page <= 0 ){
               $page = 1 ;
           }
            $this->html .= "<a href='{$this->url}page={$page}'>上一页</a>";
       }
       /*
        * @name 首页
        * @param  $this->html  html文档显示
       */

       private function firstPage(){
           if($this->page == 1){
               $this->html .= '<a>首页</a>';

           }else{
               $this->html .= "<a href='{$this->url}page=1'>首页</a>";

           }
       }
       /*
        * @name 当前页之前的页数
        * @param  $this->html
       */

       private function prevPages(){

           for($i=$this->tab_num;$i > 0;$i--){

                if(($this->page-$i) <= 0){
                    continue;
                }
               $this->html .= "<a href='{$this->url}page=".($this->page-$i)."'>".($this->page-$i).'</a>';

           }
           $this->html .= "<a>{$this->page}</a>";
       }
       /*
        * @name 当前页之后的页数
        * @param  $this->html
       */
       private function nextPages(){
           for($i=1;$i<= $this->tab_num;$i++){
               if($this->page+$i > $this->total_page){
                   break;
               }
               $this->html .= "<a href='{$this->url}page=".($this->page+$i)."'>".($this->page+$i).'</a>';
           }
       }
       //末页
       private function lastPage(){
           if($this->page == $this->total_page){
               $this->html .= '<a>末页</a>';

           }else{
               $this->html .= "<a href='{$this->url}page={$this->total_page}'>末页</a>";

           }

       }
       /*
        * @name 后一页
        * @param  $this->html
       */
       private function nextPage(){
           $page = $this->page + 1 ;
           if($page > $this->total_page){
               $page = $this->total_page ;
           }
           $this->html .= "<a href='{$this->url}page={$page}'>下一页</a>";
       }

        public function __get($limit){
           if($limit == 'limit'){
               return $this->limit;
           }
       }

    // 供外界访问
       public function show(){
           $this->prePage();
           $this->firstPage();
           $this->prevPages();
           $this->nextPages();
           $this->lastPage();
           $this->nextPage();
           return $this->html;
       }
    }






?>
