<?php
$to = "seleon79@gmail.com"; // адрес куда отправлять письмо 1
$subject = "Отправка формы с портфолио"; // заголовок м
$redirect = "./ok.html"; // адрес страницы, на которую нужно !

foreach ($_POST as $key => $value)
{ $fields .= $key.": "$value." \r\n"; }
$message = $subject." \r\n".$fields;
$headers = "Content-type: text/plain; charset=utf-8 \r\n";
mail (Sto, $subject, $message, $headers);
header ('Location: '.$redirect);
?>