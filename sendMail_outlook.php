<pre><?php

//include phpmailer
//require_once 'PHPMailer/PHPMailerAutoload.php';  
require ("PHPMailer/class.phpmailer.php");
require ("PHPMailer/class.smtp.php");
$email = "who@who.com";
//define the receiver of the email
$mail = new PHPMailer();                          //establish a new PHPmailer  
$mail->SMTPDebug = 3;                          //sendmail error log
$mail->IsSMTP();                                 //設定使用SMTP方式寄信  
$mail->SMTPAuth = true;                          //設定SMTP需要驗證  
$mail->SMTPSecure = "tls";                       // SMTP主機需要使用SSL連線  
$mail->Host = "smtp-mail.outlook.com";                  //SMTP主機  
$mail->Port = 587;                               //SMTP主機的埠號(Gmail為465)。  
$mail->CharSet = "utf-8";                        //郵件編碼  
$mail->Username = "youraccount@outlook.com";      //帳號  
$mail->Password = "yourpassword";                   //密碼  
$mail->From = "youraccount@outlook.com";           //寄件者信箱  
$mail->FromName = "testing";                    //寄件者姓名  
$mail->Subject = "Email testing 中文是否亂碼";             //郵件標題  
$mail->Body = "<p>testing by <b>VTL</b><small>中文是否亂碼</small></p>";  //mail content  
$mail->IsHTML(true);                             //郵件內容為html  
$mail->AddAddress("$email");                     //收件者郵件及名稱  
if (!$mail->Send()) {
    print_r($mail->ErrorInfo);
} else {
    echo 'success';
}  
?>
</pre>
   