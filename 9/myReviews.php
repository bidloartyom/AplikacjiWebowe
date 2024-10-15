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
    $sql = "SELECT ocena, tresc, data, d.id AS idDzbana, nazwa FROM recenzje r, dzbany d
            WHERE d.id = idDzbana AND nick = '$_SESSION[login]'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "
        <div class='review'>
            <a href='details.php?id={$row['idDzbana']}'>{$row['nazwa']}</a>
            <p>{$row['ocena']}</p>
            <p>{$row['tresc']}</p>
        </div>
        ";
    };
    ?>
</body>
</html>