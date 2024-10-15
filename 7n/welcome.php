<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        color: <?php echo $_POST["color"] ?>;
    }
</style>
<body>
    <?php
    echo "<p>";
        echo "Witaj {$_POST["name"]} {$_POST["surname"]}";
    echo "</p>";
    ?>
    <a href="index.html">
        Powrót
    </a>
</body>
</html>