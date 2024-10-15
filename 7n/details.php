<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function glowna(){
            echo "<br><a href='index2.html'>Do listy<a>";
        }
        switch($_GET['id']){
            case 1:{
                echo "<h1> Kotek </h1>";
                echo "<p> To jest mały, ładny kotek :3</p>";
                echo "<img src='/Zadanie_7/imgs/manchkin.jpg' style='width:500px;'>";
                glowna();
                break;
            }
            case 2:{
                echo "<h1> Pies </h1>";
                echo "<p> To jest mały, ładny pies :3</p>";
                echo "<img src='/Zadanie_7/imgs/korgi.jpg' style='width:500px;'>";
                glowna();
                break;
            }
            case 3:{
                echo "<h1> Jeżyk </h1>";
                echo "<p> To jest mały, ładny jeżyk :3</p>";
                echo "<img src='/Zadanie_7/imgs/jezyk.png' style='width:500px;'>";
                glowna();
                break;
            }
            case 4:{
                echo "<h1> Papuga </h1>";
                echo "<p> To jest mała, ładna papuga :3</p>";
                echo "<img src='/Zadanie_7/imgs/ara.webp' style='width:500px;'>";
                glowna();
                break;
            }
        }
    ?>
</body>
</html>