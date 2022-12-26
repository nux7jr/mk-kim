<?php
header('Access-Control-Allow-Origin: *');


$name = $_POST['name'];
$tel = $_POST['phone'];
$company = $_POST['company'];
$tel = htmlspecialchars($tel);
$name = htmlspecialchars($name);
$tel = urldecode($tel);
$name = urldecode($name);
$tel = trim($tel);
$name = trim($name);

if (mail("tiksan-adm@mail.ru", "Заявка с сайта mk-kim", "Телефон:" . $tel . ". ФИО: " . $name . ". Компания: " . $company, "From: noreply@mk-kim.ru \r\n")) {
    $messSucc = "Спасибо за заявку!";
    echo json_encode($messSucc, JSON_UNESCAPED_UNICODE);
} else {
    $messError = "При отправке сообщения возникли ошибки";
    echo json_encode($messError, JSON_UNESCAPED_UNICODE);
}
