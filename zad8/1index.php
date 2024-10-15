<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dzbanów</title>
</head>
<body>
    <header>
        <h1>Witamy na stronie z dzbanami</h1>
    </header>

    <nav>
        <a href="3insertForm.php">Dodaj nowy dzban</a>
    </nav>
    <?php
    $conn = new mysqli("localhost", "root", "", "dzbanybb");
    $sql = "SELECT id, nazwa FROM dzbany";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_object()) {
            echo "<li><a href='2details.php?id={$row->id}'>{$row->nazwa}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Nie masz żadnych dzbanów w swojej kolekcji";
    }
    $conn->close();
    ?>
    </body>
</html>