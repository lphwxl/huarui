<?php
   
    /*  
     * 图片验证码
     *使用说明：需要调整一下画布、干扰线、验证码的颜色，根据客户要求更改即可。
     * 
     * 
     * */
    
/* $code = new code(180,40);
//$code->mathcode('./font/elephant.ttf');//运算验证
//$code->createcodenumber('./font/elephant.ttf');//纯数字验证
$code->letterandnumbercode('./font/elephant.ttf');
$code->show(); */
   
    class code{
        private $pixel;
        private $code;
        private $line;
        private $image;
        private $width;
        private $height;
        private $length;
        private $num = 3.1415926;
        function __construct($width=150,$height=40,$pixel=100,$line=3,$len=4){
            $this->width = $width > ($len*14+20)?$width:($len*14+20);
            $this->height = $height > 30?$height:30;
            $this->pixel = $pixel;  
            $this->line = $line;
            $this->length = $len;
            $this->create();
        }
        
        //颜色标记
        private function setcolor($color=array()){
            if(empty($color)){
                exit('输入正确的颜色值');
            }
            if(is_array($color)){
               $color = imagecolorallocate($this->image, mt_rand($color[0],$color[1]), mt_rand($color[2],$color[3]), mt_rand($color[4],$color[5]));
               return $color;
            }
        }
        
        //绘制画布
        private function create(){
            $this->image = imagecreatetruecolor($this->width, $this->height );
            //随机生成画布的颜色值
            $color = $this->setcolor(array(157,255,157,255,157,255));
            imagefill($this->image, 0, 0, $color);
            $this->setpixel();
            $this->addline();
           /*  
            *  固定画布的颜色值
            * $color = imagecolorallocate($this->image, 122, 122, 255);
            * imagefill($this->image,0, 0, $color); 
            */
        }
        
        //设置数字code验证码
        
        public function createcodenumber($text){
            $this->code = mt_rand(1000, 9999);
            $color = $this->setcolor(array(0,156,0,156,0,156));
            imagettftext($this->image, 14,mt_rand(-10, 10), $this->width/2-28, $this->height/2+7,  $color,$text,$this->code);
        }
        
        //设置数字和字母混合的验证码
        
        public function letterandnumbercode($text){
            for($i=0;$i<$this->length;$i++){
                $this->code .= dechex(mt_rand(0,15));//第二种方法：把所有的字母数字存储到字符串中 $str = 'ANL097Hhnsaksada';
            }
            for($i=0;$i<strlen($this->code);$i++){
                $color = $this->setcolor(array(0,156,0,156,0,156));
                 imagettftext($this->image, 14,mt_rand(-10,10),5+$i*$this->width/$this->length, mt_rand(16, $this->height/2+12), $color,$text,$this->code{$i});
            }  
        }
        //设置加减乘除验证码
        public function mathcode($text){
            $str = '029146573';
            $str1 = '+-*';
            $arr = array();
            for($i=0;$i<3;$i++){
                 
                 $arr[] = $i == 1?$str1{mt_rand(0, strlen($str1)-1)}:$str{mt_rand(0, strlen($str)-1)};
                 
            }
            for($i=0;$i<count($arr);$i++){
                $color = $this->setcolor(array(0,156,0,156,0,156));
                imagettftext($this->image, 14,mt_rand(-10,10), 10+$i*$this->width/$this->length, mt_rand(16, $this->height/2+12), $color,$text,$arr[$i]);
                switch($arr[$i]){
                    case '*':
                        $this->code = $arr[$i-1]*$arr[$i+1];
                        break;
                    case '+':
                        $this->code = $arr[$i-1]+$arr[$i+1];
                        break;
                     case '—':
                        $this->code = $arr[$i-1]-$arr[$i+1];
                        break;
                }
            }
            unset($arr);
        } 
        
        //设置干扰点
        private function setpixel(){
            
            for($i=0;$i<$this->pixel;$i++){
                $color = $this->setcolor(array(200,255,200,255,200,255));
                imagesetpixel($this->image, mt_rand(1, $this->width-1), mt_rand(1, $this->height-1), $color);
            }
            for($i=0;$i<10;$i++){
                imagechar($this->image, 1, mt_rand(0, $this->width), mt_rand(0, $this->height), '*', $color);
            }
            $x1 = 0; $x = $this->width/1000;
            for($i=0;$i<1000;$i++){
               $x1 += $x;
               $y = 10*cos(0.08*$x1+$this->num/2)+$this->height/2;
               $color = $this->setcolor(array(200,255,200,255,200,255));
               imagesetpixel($this->image, $x1, $y, $color);
            }
            
        }
        //设置干扰线
        private function addline(){
            for($i=0;$i<$this->line;$i++){
                $color = $this->setcolor(array(0,156,0,156,0,156));
                imageline($this->image, mt_rand(0, $this->width), mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->height), $color);
            }
        }
        
        //输出图片
         function show(){
            session_start();
            $_SESSION['code'] = md5(strtolower($this->code));
            //session_destroy();
             if(imagetypes()&IMG_PNG){
                header('Content-Type:image/png');
                imagepng($this->image);
            }elseif(imagetypes()&IMG_JPEG){
                header('Content-Type:image/jpeg');
                imagejpeg($this->image);
              
            }elseif(imagetypes() & IMG_GIF){
                header('Content-Type:image/gif');
                imagegif($this->image);
            }else{
                exit('不支持的图片类型！');
            } 
            
            //销毁资源
            imagedestroy($this->image);

        } 
        //销毁资源
        function __destruct(){
            
        }
    }
?>
