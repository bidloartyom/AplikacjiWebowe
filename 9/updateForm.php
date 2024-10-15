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
    $id = $_GET["id"];
    $sql = "SELECT * FROM dzbany WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    $sql = "SELECT id, nazwa FROM kategorie";
    $result = $conn->query($sql);
    $conn->close();
    ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row->id ?>">
        <ul style="list-style: none;">
            <li>Kategoria: <select name="idKategorii" value="<?= $row->idKategorii ?>">
                    <?php
                    while ($row2 = $result->fetch_object()) {
                        $selected = ($row2->id == $id) ? 'selected' : '';
                        echo "<option value='{$row2->id}' $selected>{$row2->nazwa}</option>";
                    }
                    ?>
                </select></li>
            <li>Nazwa: <input type="text" name="nazwa" value="<?= $row->nazwa ?>"></li>
            <li>Opis: <textarea name="opis" cols="30" rows="10" value="<?= $row->opis ?>"><?= $row->opis ?></textarea></li>
            <li>Pojemnosc: <input type="number" name="pojemnosc" value="<?= $row->pojemnosc ?>"></li>
            <li>Wysokosc: <input type="number" name="wysokosc" value="<?= $row->wysokosc ?>"></li>
            <li><img src="obrazki/<?= $row->obrazek ?>"></li>
            <li><input type="submit" value="Zapisz zmiany"></li>
        </ul>
    </form>
</body>

</html>