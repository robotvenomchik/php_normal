<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генерація випадкового пароля</title>
</head>
<body>
<h2>Генерація випадкового пароля</h2>

<?php
function generatePassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $passwordLength = $_POST["passwordLength"];
    $generatedPassword = generatePassword($passwordLength);

    echo "Ваш випадковий пароль: " . $generatedPassword;
}
?>

<form action="" method="post">
    <label for="passwordLength">Довжина пароля:</label>
    <input type="number" name="passwordLength" min="1" required>
    <input type="submit" value="Генерувати пароль">
</form>
</body>
</html>

