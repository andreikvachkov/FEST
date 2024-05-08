<?php
$to = "andrei.kvachkov@gmail.com"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = ""; // инициализация переменной $message

// Проверяем, было ли отправлено имя
if(isset($_POST['nameForm']) && !empty($_POST['nameForm'])) {
    $message .= "ФИО: ".$_POST['nameForm']."<br>";
}

// Проверяем, был ли отправлен электронный адрес
if(isset($_POST['telForm']) && !empty($_POST['telForm'])) {
    $message .= "E-mail: ".$_POST['emailForm']."<br>";
}

// Проверяем, был ли отправлен телефон
if(isset($_POST['telForm']) && !empty($_POST['telForm'])) {
    $message .= "Телефон: ".$_POST['telForm']."<br>";
}

// Проверяем, была ли выбрана номинация
if(isset($_POST['nominationForm']) && !empty($_POST['nominationForm'])) {
    $message .= "Номинация: ".$_POST['nominationForm']."<br>";
}

// Проверяем, была ли отправлена ссылка
if(isset($_POST['linkForm']) && !empty($_POST['linkForm'])) {
    $message .= "Ссылка на облачное хранилище: ".$_POST['linkForm']."<br>";
}

$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента

// Добавляем пользовательский заголовок "From:"
$headers .= 'From: andrei.kva4kov@yandex.ru' . "\r\n";

// Пытаемся отправить письмо
if(mail($to, $tema, $message, $headers)) {
    // Письмо отправлено успешно, выведите сообщение об успешной отправке
    echo "Ваше сообщение успешно отправлено!";
} else {
    // Письмо не отправлено, выведите сообщение об ошибке
    echo "При отправке сообщения возникла ошибка. Пожалуйста, попробуйте позже.";
}
?>