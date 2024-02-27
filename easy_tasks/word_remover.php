<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Видалення слова</title>
</head>
<body>
<h2>Видалення слова</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $wordToRemove = $_POST["wordToRemove"];

    function removeWord($str, $word) {
        return str_replace($word, '', $str);
    }

    $resultString = removeWord($inputString, $wordToRemove);

    echo "Введений рядок без слова '" . $wordToRemove . "': " . $resultString;
}
?>

<form action="" method="post">
    <label for="inputString">Введіть рядок:</label>
    <input type="text" name="inputString" required><br>

    <label for="wordToRemove">Слово для видалення:</label>
    <input type="text" name="wordToRemove" required><br>

    <input type="submit" value="Видалити слово">
</form>
</body>
</html>
