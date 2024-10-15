<?php
require("bd.php");
$id = $_POST["id"];
$nick = $_POST["nick"];
$ocena = $_POST["ocena"];
$tresc = $_POST["tresc"];
$sql = "INSERT INTO recenzje (idDzbana, nick, ocena, tresc) VALUES ('$id','$nick', '$ocena', '$tresc')";
$conn->query($sql);
$conn->close();
header("location:details.php?id=$id");
