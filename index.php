<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Food</title>
</head>

<body>
    <a href="daftar.php">Add New</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr bgcolor="#ffd700">
            <th>BIL</th>
            <th>Food Name</th>
            <th>Food Price</th>
            <th>Options</th>
        </tr>
    
        <?php
        $sql = "SELECT * FROM list_food";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $row->idFood; ?></td>
                    <td><?php echo $row->FoodName; ?></td>
                    <td>RM <?php echo $row->FoodPrice; ?></td>
                    <td>
                        <a href="kemaskini.php?idFood=<?php echo $row->idFood; ?>">Edit</a>
                        |
                        <a href="padam.php?idFood=<?php echo $row->idFood; ?>" onclick="return confirm('Are you sure want to delete?');">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>