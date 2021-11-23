<?php
require 'conn.php';

$idFood = $_POST['idFood'];
$FoodName = $_POST['FoodName'];
$FoodPrice = $_POST['FoodPrice'];


$sql = "UPDATE list_food SET FoodName = ?, FoodPrice = ? WHERE idFood = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sdi', $FoodName, $FoodPrice,$idFood);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}