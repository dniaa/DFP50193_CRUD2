<?php
    require 'conn.php';
    $idFood = $_GET['idFood'];
    $sql = "SELECT * FROM list_food WHERE idFood = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idFood);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_object();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemas Kini</title>
</head>
<body>
<form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="idFood" value="<?php echo $row->idFood; ?>"/>
        <table>
            <tr>
                <td><label for="FoodName">Food Name</label></td>
                <td>
                    <input id="FoodName" type="text" step="any" name="FoodName"
                           value="<?php echo $row->FoodName; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="FoodPrice">Food Price</label></td>
                <td>
                    <input id="FoodPrice" type="number" step="any" name="FoodPrice"
                           value="<?php echo $row->FoodPrice; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SAVE</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>