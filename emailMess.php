<?php
if (isset($_POST['phone'])) {
  header('Access-Control-Allow-Origin: *');


  $name = $_POST['name'];
  $tel = $_POST['phone'];
  $city = $_POST['city'];
  $quantity = $_POST['quantity'];
  $tel = htmlspecialchars($tel);
  $name = htmlspecialchars($name);
  $tel = urldecode($tel);
  $name = urldecode($name);
  $tel = trim($tel);
  $name = trim($name);

  if (mail("tiksan-adm@mail.ru", "Заявка с сайта mk-kim", "Телефон:" . $tel . ". ФИО: " . $name . ". Кол-во: " . $quantity . ". Город: " . $city, "From: noreply@mk-kim.ru \r\n")) {
    $messSucc = "Спасибо за заявку!";
    echo json_encode($messSucc, JSON_UNESCAPED_UNICODE);
  } else {
    $messError = "При отправке сообщения возникли ошибки";
    echo json_encode($messError, JSON_UNESCAPED_UNICODE);
  }
}
