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
    $sql = "SELECT id, nazwa FROM kategorie";
    $result = $conn->query($sql);
    echo "<div class='kategorie'>";
    echo "<a href='index.php'> Wszystkie</a>";
    while ($row = $result->fetch_object()) {
        echo " <a href='index.php?idKat={$row->id}'>{$row->nazwa}</a>";
    }
    echo "</div>"
    ?>
    <form>
        <p>
            <input type="text" name="fraza">
            <input type="submit" value="Wyszukaj">
        </p>
    </form>

    <a href="insertForm.php"></a>

    <?php
    $sql = "SELECT id, nazwa, obrazek FROM dzbany";
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
    <a href="insertForm.php">Dodaj dzban</a>
</body>

</html>