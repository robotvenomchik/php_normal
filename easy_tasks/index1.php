<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма збереження даних</title>
</head>
<body>
<h2>Форма збереження даних</h2>

<form action="save_data.php" method="post">
    <label for="name">Ім'я:</label>
    <input type="text" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Зберегти дані">
</form>
</body>
</html>
