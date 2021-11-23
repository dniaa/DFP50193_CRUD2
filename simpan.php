<?php
require 'conn.php';

$FoodName = $_POST['FoodName'];
$FoodPrice = $_POST['FoodPrice'];


$sql = "INSERT INTO list_food (FoodName, FoodPrice) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sd',$FoodName, $FoodPrice);
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