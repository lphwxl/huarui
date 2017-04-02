<?php 


    /* 
     *  $to:邮件接收方    
     *  $title:邮件标题    
     *  $content:邮件内容
     *  @return msg
     *  
     *  */
    //发送邮件函数
     function senMail($to, $title='华电恒瑞信件', $content='详情查看'){
         
         $mail  = new PHPMailer();
         $mail->IsHTML  = true;
         $mail->CharSet    ="UTF-8";     //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置为 UTF-8
         $mail->IsSMTP();                            // 设定使用SMTP服务
         $mail->SMTPAuth   = true;                   // 启用 SMTP 验证功能
        /*  $mail->SMTPSecure = "ssl";    */               // SMTP 安全协议
         $mail->Host       = "smtp.163.com";       // SMTP 服务器
         $mail->Port       = 25;                    // SMTP服务器的端口号 25
         $mail->Username   = "15275185301";  // SMTP服务器用户名
         $mail->Password   = "lphwxl316606";        // SMTP服务器密码
         $mail->SetFrom('15275185301@163.com', '晓风缠月');    // 设置发件人地址和名称
         /* $mail->AddReplyTo("15275185301@163.com","晓风缠月");  */ // 设置邮件回复人地址和名称
         $mail->Subject    = $title;                     // 设置邮件标题
         $mail->AltBody    = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";
         // 可选项，向下兼容考虑
         $mail->MsgHTML($content);                         // 设置邮件内容
         $mail->AddAddress($to);
         if(!$mail->Send()) {
             return array(
                 'error'=>0,
                 'msg'=>"发送失败：" . $mail->ErrorInfo
             );
         } else {
             return array(
                 'error'=>1,
                 'msg'=>"恭喜，邮件发送成功！"
             );
         }
          
          
     }

?>