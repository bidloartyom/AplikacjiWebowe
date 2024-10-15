<?php
require("bd.php");
$id = $_POST["id"];
$sql = "SELECT obrazek FROM dzbany WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_array();
unlink("obrazki/$row[obrazek]");
$sql = "DELETE FROM dzbany WHERE id = $id";
$conn->query($sql);
$conn->close();
header("location:index.php");