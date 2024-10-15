<?php
$conn = new mysqli("localhost", "root", "", "dzbanybb");
$id = $_GET["id"];
$sql = "DELETE FROM dzbany WHERE id=$id";
$conn->query($sql);
$conn->close();
header("location:1index.php");
// blokuje generacje domu i nie wyswietla jego zawartosci 
//Przeglądarka, po odebraniu odpowiedzi z takim
//nagłówkiem, wysyła od razu kolejne żądanie do serwera o podany zasób
