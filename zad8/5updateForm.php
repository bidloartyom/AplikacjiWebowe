<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "dzbanybb");
    $id = $_GET["id"];
    $sql = "SELECT * FROM dzbany WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    $conn->close();
?>
    <form action="6update.php" method="post">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        <ul style="list-style: none;">
            <li>Nazwa: <input type="text" name="nazwa" value="<?= $row->nazwa ?>" ></li>
            <li>Opis: <input type="text" name="opis" value="<?= $row->opis ?>"></li>
            <li>Pojemnosc: <input type="number" name="pojemnosc" value="<?= $row->pojemnosc ?>"></li>
            <li>Wysokosc: <input type="number" name="wysokosc" value="<?= $row->wysokosc ?>"></li>
            <li><input type="submit" value="Zapisz zmiany"></li>
        </ul>
    </form>
    <a href=""></a>
</body>
</html>
