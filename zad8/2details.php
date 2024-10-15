<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Details</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "dzbanybb");
    $id = $_GET["id"];
    $sql = "SELECT * FROM dzbany WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    echo "<p>Nazwa: {$row->nazwa}</p>";
    echo "<p>Opis: {$row->opis}</p>";
    echo "<p>Pojemnosc: {$row->pojemnosc}</p>";
    echo "<p>Wysokosc: {$row->wysokosc}</p>";
    echo "<a href='5updateForm.php?id=$id'>Edytuj dzban</a>";
    echo "<br><a href='7delete.php?id=$id'>Usuń dzban</a>";
    $conn->close();
    ?>
    <br><a href="1index.php">Wróć do listy</a>
</body>
</html>