<?php
require("bd.php");
$nazwa = $_POST["nazwa"];
$opis = $_POST["opis"];
$pojemnosc = $_POST["pojemnosc"];
$wysokosc = $_POST["wysokosc"];
$id = $_POST["id"];
$idKategorii = $_POST["idKategorii"];
unlink("obrazki/".$filename);
$sql = "UPDATE dzbany SET nazwa='$nazwa', opis='$opis', pojemnosc=$pojemnosc, wysokosc=$wysokosc, idKategorii=$idKategorii, WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location:details.php?id=$id");