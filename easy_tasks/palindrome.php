<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка на паліндром</title>
</head>
<body>
<h2>Перевірка на паліндром</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];

    function isPalindrome($str) {
        $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));
        return $str == strrev($str);
    }

    if (isPalindrome($inputString)) {
        echo "Введений рядок '" . $inputString . "' - паліндром.";
    } else {
        echo "Введений рядок '" . $inputString . "' - не паліндром.";
    }
}
?>

<form action="" method="post">
    <label for="inputString">Введіть рядок:</label>
    <input type="text" name="inputString" required>
    <input type="submit" value="Перевірити на паліндром">
</form>
</body>
</html>
