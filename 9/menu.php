<?php
require("session.php");
require("bd.php");
?>
<div class="menu">
    <a href="index.php">Strona główna</a>
    <a href="favourites.php">Ulubione</a>
    <a href="myReviews.php">Moje recenzje</a>
    <a href="logout.php">Wyloguj</a>
    Witaj <?= $_SESSION["login"] ?>!
</div>