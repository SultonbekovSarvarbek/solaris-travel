<?php
$name=$_POST['user_name'];
$phone=$_POST['user_phone'];
$mail=$_POST['user_mail'];
$message=$_POST['user_message'];

$token="1018623729:AAFxEsWKH-8NTlbfBLmzIdMraH6E_biY0mE";
$chat_id="-380867723";


$arr = array(
    'Имя: ' => $name,
    'Номер телефона: '=> $phone,
    'Электронный адрес: ' => $mail,
    'Сообщение: ' => $message
);

foreach($arr as $key => $value){
    $txt .="<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram){
    header('Location: thanks.html');
    return true;
} else{
    echo 'error';
}
?>

