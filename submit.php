<?php 

$to = 'vikingr.latvia@gmail.com'; 
$subject = 'Клиент хочет записатся'; 
 
 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
    $name = trim($_POST['name']); 
    $email = trim($_POST['email']); 
    $message_typed = trim($_POST['message']); 
    $phone = trim($_POST['phone']); 
     
    if(empty($name)){ 
         $valErr .= 'Пожалуйста введите Ваше имя.<br/>'; 
    } 
    if(empty($message_typed)){ 
        $valErr .= 'Пожалуйста введите Ваше сообщение.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Пожалуйста введите Ваш email.<br/>'; 
    } 
     
    if(empty($valErr)){ 
        $message = " 
            ".$name."
            ".$email."
            ".$phone."
            ".$subject."
            ".$message_typed."
        "; 

        mail($to, $subject, $message);
        
        $status = 'success'; 
        $postData = ''; 
    } 
}