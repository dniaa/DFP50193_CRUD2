<?php
require 'conn.php';

$idFood = $_GET['idFood'];

$sql = "DELETE FROM list_food WHERE idFood = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idFood);
$stmt->execute();

header('location: index.php');