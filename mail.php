<?php
$recepient = "seleon79@gmail.com"; //Почта на которую будут уходить заявки
$sitename = "https://seleon79.github.io/my-first-progect/mail.php"; //Название сайта
//
//
$name = trim($_POST["name"]); //Создаем переменную $name и помещаем в неё значения из поля формы 'name'
$mail = trim($_POST["email"]); //Создаем переменную $mail и помещаем в неё значения из поля формы 'email'
$phone = trim($_POST["phone"]); //Создаем переменную $phone и помещаем в неё значения из поля формы 'phone'
//Если надо добавить ещё поля в форму, нужно добавить переменную по примеру 7-й строки и 
//её же в выражение на 11-й строке
//
$message = "\nИмя: $name \nПочта: $mail \nТелефон: $phone"; //Создаем шаблон письма
$pagetitle = "Новая заявка с сайта \"$sitename\""; //Задаем тему письма
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if($message){
    header("Location: https://seleon79.github.io/my-first-progect/mail.php");  //В случае успешной отправки перенаправляем пользователя на заранее созданную страницу с благодарностью
  }else{  //В случае ошибки выводим такое сообщение:
    echo "Упс, что-то пошло не так.";
  }
?>