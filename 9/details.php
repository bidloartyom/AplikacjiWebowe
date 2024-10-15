<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require("menu.php");
    $id = $_GET["id"];
    $sql = "SELECT AVG(ocena) AS srednia FROM recenzje WHERE idDzbana=$id";
    $result = $conn->query($sql);
    $srednia = $result->fetch_object()->srednia;
    $sql = "SELECT idKategorii, k.nazwa AS nazwaKat, d.nazwa, obrazek, d.opis, pojemnosc,
            wysokosc FROM dzbany d, kategorie k WHERE d.id=$id AND idKategorii=k.id";
    $result = $conn->query($sql);
    $row = $result->fetch_array();
    echo "<p>Kategoria: <a href='index.php?idKat={$row['idKategorii']}'>{$row['nazwaKat']}</a></p>";
    echo "<p>Nazwa dzbana: {$row['nazwa']}</p>";
    echo "<p><img src='obrazki/{$row['obrazek']}'></p>";
    echo "<p>Opis: {$row['opis']}</p>";
    echo "<p>Pojemność: {$row['pojemnosc']} ml</p>";
    echo "<p>Wysokość: {$row['wysokosc']} cm</p>";
    echo "<p>Średnia ocena: " . number_format($srednia) . "</p>";
    $idUzytkownika = $_SESSION["id"];
    $sql = "SELECT id FROM ulubione WHERE idDzbana = $id AND idUzytkownika = $idUzytkownika";
    $added = $conn->query($sql)->num_rows > 0;
    $src = $added ? "icons/filled.png" : "icons/unfilled.png";
    echo "<img src='$src' class='fav' data-dzban='$id'>";
    echo "<form action='insertReview.php' method='post' class='insertReview'>";
    echo "<input type='number' name='id' style='display: none;' value='{$id}'>";
    echo "{$_SESSION['login']}: <input type='hidden' name='nick' value='{$_SESSION['login']}'><br>";
    echo "Ocena: <select name='ocena'>
    <option value='1'>1</option>
    <option value='2'>2</option>
    <option value='3'>3</option>
    <option value='4'>4</option>
    <option value='5'>5</option>
    </select><br>";
    echo "Recenzja: <textarea name='tresc' cols='30' rows='10'></textarea><br>";
    echo "<input type='submit' value='Wyślij'>";
    echo "</form>";
    

    $sql = "SELECT nick, ocena, tresc, data FROM recenzje WHERE idDzbana=$id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_array()) {
        echo "<p>Nick: {$row['nick']} {$row['data']}</p>";
        echo "<p>Ocena: {$row['ocena']}</p>";
        echo "<p>Rezenzja: {$row['tresc']}</p>";
        echo "<br>";
    }
    $conn->close();
    echo "<a href='updateForm.php?id=$id'>Zmodyfikuj dzban</a>"
    ?>

    <a href="index.php">Powrót do strony głównej</a>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <input type="submit" value="Usuń dzban">
    </form>
    <script src="script.js"></script>
</body>

</html>