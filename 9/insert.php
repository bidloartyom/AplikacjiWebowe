<?php
require("bd.php");
$nazwa = $_POST["nazwa"];
$opis = $_POST["opis"];
$pojemnosc = $_POST["pojemnosc"];
$wysokosc = $_POST["wysokosc"];
$idKategorii = $_POST["idKategorii"];
$obrazek = basename($_FILES["obrazek"]["name"]);
$sql = "INSERT INTO dzbany (nazwa, opis, pojemnosc, wysokosc, idKategorii, obrazek)
        VALUES ('$nazwa', '$opis', '$pojemnosc', '$wysokosc', '$idKategorii', '$obrazek')";
move_uploaded_file($_FILES["obrazek"]["tmp_name"], "obrazki/$obrazek");
$conn->query($sql);
$conn->close();
header("location:index.php");
