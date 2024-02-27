<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка пароля</title>
</head>
<body>
<h2>Перевірка пароля</h2>

<?php
function isStrongPassword($password) {
    $minLength = 8;

    if (strlen($password) < $minLength) {
        return false;
    }

    if (!preg_match('/[0-9]/', $password) || !preg_match('/[A-Z]/', $password)) {
        return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (isStrongPassword($password)) {
        echo "Пароль відповідає вимогам.";
    } else {
        echo "Пароль не відповідає вимогам. Мінімальна довжина 8 символів, повинна містити цифри та літери верхнього регістру.";
    }
}
?>

<form action="" method="post">
    <label for="password">Пароль:</label>
    <input type="password" name="password" required>
    <input type="submit" value="Перевірити пароль">
</form>
</body>
</html>
