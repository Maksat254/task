<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    if (empty($name) || empty($email) || empty($comment)) {
        echo "Пожалуйста, заполните все поля.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Пожалуйста, введите корректный Email.";
    } elseif (strlen($name) > 20) {
        echo "Имя не должно превышать 20 символов.";
    } elseif (strlen($comment) > 500) {
        echo "Комментарий не должен превышать 500 символов.";
    } else {

        $data = "Имя: $name\nEmail: $email\nКомментарий: $comment\n\n";


        $file = fopen("form.txt", "a");

        if ($file) {
            fwrite($file, $data);
            fclose($file);

            echo "Ваша заявка успешно сохранена.";
        } else {
            echo "Ошибка при сохранении данных.";
        }
    }
}

?>
