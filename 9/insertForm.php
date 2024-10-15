<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require("menu.php");
    ?>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        Nazwa: <input type="text" name="nazwa">
        Opis: <textarea name="opis" cols="30" rows="10"></textarea>
        Pojemnosc: <input type="number" name="pojemnosc">
        Wysokosc: <input type="number" name="wysokosc">
        Obrazek: <input type="file" name="obrazek">
        Kategoria: <select name="idKategorii">
            <?php
            $sql = "SELECT id, nazwa FROM kategorie";
            $result = $conn->query($sql);
            while ($row = $result->fetch_object()) {
                echo "<option value='{$row->id}'>{$row->nazwa}</option>";
            }
            $conn->close();
            ?>
        </select>
        <input type="submit" value="Dodaj">
    </form>
    <a href="index.php">Wróć do strony głównej</a>
</body>

</html>