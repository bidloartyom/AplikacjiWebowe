<?php
$conn = new mysqli("localhost", "root", "", "dzbanybb");
$nazwa = $_POST["nazwa"];
$opis = $_POST["opis"];
$pojemnosc = $_POST["pojemnosc"];
$wysokosc = $_POST["wysokosc"];
$sql = "INSERT INTO dzbany (nazwa, opis, pojemnosc, wysokosc) VALUES ('$nazwa',
'$opis', '$pojemnosc', '$wysokosc')";
$conn->query($sql); 
// query wysyła zapytanie do serwera
//bazodanowego. Serwer przetwarza zapytanie, wyciąga z bazy potrzebne dane i wysyła
//je w odpowiedzi. Funkcja query() odbiera odpowiedź, przetwarza dane w niej zawarte
//i wynik zwraca do zmiennej $result.
$conn->close();
header("location:1index.php");
