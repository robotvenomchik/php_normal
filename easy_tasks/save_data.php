<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $data = "Ім'я: $name, Email: $email\n";

    $filename = "saved_data.txt";

    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    echo "Дані успішно збережено!";
} else {
    echo "Дані не збережено";
}