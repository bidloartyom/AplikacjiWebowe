<?php
$conn = new mysqli("localhost", "root", "", "dzbanybb");
$nazwa = $_POST["nazwa"];
$opis = $_POST["opis"];
$pojemnosc = $_POST["pojemnosc"];
$wysokosc = $_POST["wysokosc"];
$id = $_POST["id"];
$sql = "UPDATE dzbany SET nazwa='$nazwa', opis='$opis', pojemnosc=$pojemnosc, wysokosc=$wysokosc WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location:2details.php?id=$id");
?>