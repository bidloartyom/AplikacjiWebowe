<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <form action="4insert.php" method="post">
        Nazwa dzbanu: <input type="text" name="nazwa"><br>
        Opis dzbanu: <textarea name="opis" cols="30" rows="10"></textarea><br>
        Pojemnosc: <input type="number" name="pojemnosc"><br>
        Wysokosc: <input type="number" name="wysokosc"><br>
        <input type="submit" value="Dodaj dzban">
    </form>
    <a href="1index.php">Wróć do listy dzbanów</a>
</body>
</html>