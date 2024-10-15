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

    $idUzytkownika = $_SESSION["id"];
    $sql = "SELECT d.id, d.nazwa, d.obrazek FROM dzbany d, ulubione u WHERE u.idDzbana = d.id
    AND idUzytkownika = $idUzytkownika";
    if (isset($_GET["idKat"])) {
        $idKat = $_GET["idKat"];
        $sql .= " WHERE idKategorii = $idKat";
    } elseif (isset($_GET["fraza"])) {
        $fraza = $_GET["fraza"];
        $sql .= " WHERE nazwa LIKE '%$fraza%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Obrazek</th><th>Nazwa</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><img src='obrazki/{$row["obrazek"]}' alt='{$row["nazwa"]}' width='100'></td>";
            echo "<td><a href='details.php?id={$row["id"]}'>{$row["nazwa"]}</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Brak wyników.";
    }
    ?>
</body>
</html>