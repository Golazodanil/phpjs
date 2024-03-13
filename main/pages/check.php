<?php
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $err = '';
    if(trim($email)=='')
        $err = 'Введите ваш E-Mail';
    if($err !=''){
        echo $err;
        exit;
    }
    
    $subject = "=?utf-8?B?".base64_encode("Новый заказ")."?=";
    $headers = "From: $emai\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('danil.ser0edin@gmail.com', $subject, $phone, $headers);

    header('Location: ../forsale.php');
?>