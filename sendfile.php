<?php
if (isset($_POST['phone'])) {
    $to = "tiksan-adm@mail.ru";
    $from = "admin@tiksan-record.ru";
    $subject = "Заполнена контактная форма на сайте " . $_SERVER['HTTP_REFERER'];
    $message = "Выбранное место: " . $_POST['id'] . "Цена: " . $_POST['price'] . "Компания: " . $_POST['company'] . "\nEmail пользователя " . $_POST['email'] . "\nТелефон пользователя " . $_POST['phone'] . "\n\nАдрес сайта: " . $_SERVER['HTTP_REFERER'];

    $boundary = md5(date('r', time()));
    $filesize = '';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $message = "
Content-Type: multipart/mixed; boundary=\"$boundary\"
 
--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit
 
$message";
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];
        $filetype = $_FILES['file']['type'];
        $filesize = $_FILES['file']['size'];
        $message .= "
 
--$boundary
Content-Type: \"$filetype\"; name=\"$filename\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=\"$filename\"
 
$attachment";
    }
    $message .= "
--$boundary--";

    if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
        mail($to, $subject, $message, $headers);
        echo $_POST['nameFF'] . ', Ваше сообщение отправлено, спасибо!';
    } else {
        echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
    }
}
