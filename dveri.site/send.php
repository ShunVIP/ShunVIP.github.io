<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
//$time = date(Gyi);
$numberzakaz = $_POST['numberzakaz'];
$tip = $_POST['tip'];
$bron = $_POST['bron'];
$bron = $_POST['bron'];
$ruchka = $_POST['ruchka'];
$cvet = $_POST['cvet'];
$material = $_POST['material'];
$glazok = $_POST['glazok'];
$guard = $_POST['guard'];
$tip1 = $_POST['tip1'];
$razmer = $_POST['razmer'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = ''; // Логин на почте
    $mail->Password   = ''; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('', 'Заказ Двери №'.$numberzakaz); // Адрес самой почты и имя отправителя
    // Получатель письма 
    $mail->addAddress(''); 
    // Прикрипление файлов к письму
if (!empty($_FILES['myfile']['name'][0])) {
    for ($ct = 0; $ct < count($_FILES['myfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['myfile']['name'][$ct]));
        $filename = $_FILES['myfile']['name'][$ct];
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Неудалось прикрепить файл ' . $uploadfile;
        }
    }   
}
        // -----------------------
        // Само письмо
        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Заказ с сайта';
        $mail->Body    = "<b>Номер заказа:</b> $numberzakaz <br>
        <b>Тип двери:</b> $tip<br>
        <b>Бронированная:</b> $bron<br>
        <b>Тип ручки:</b> $ruchka<br>
        <b>Цвет двери:</b> $cvet<br>
        <b>Материал:</b> $material<br>
        <b>Глазок:</b> $glazok<br>
        <b>Защита от взлома:</b> $guard<br>
        <b>Тип замка:</b> $tip1<br>
        <b>Размер двери:</b> $razmer<br>";
// Проверяем отравленность сообщения
if ($mail->send()) {
    echo "$msg";
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}