<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp-Web 2.0</title>
</head>
<body>
    <?php
        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_database = "trucorp-db";

        $conn = new mysqli($db_host, $db_username, $db_password, $db_database);

        if($conn->connect_error){
            die('error database ' . $conn->connect_error);
        }
    ?>
    <table border="1" cellpadding="5">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jabatan</td>
        </tr>
        <?php
            $query = "SELECT * FROM users";
            $result = $conn->query($query);
            while($row = $result->fetch_assoc()) :
        ?>
        <tr>
            <td><?= $row['ID'] ?></td>
            <td><?= $row['Nama'] ?></td>
            <td><?= $row['Alamat'] ?></td>
            <td><?= $row['Jabatan'] ?></td>
        </tr>
        <?php endwhile; ?>

    </table>
    
    <table border="1" cellpadding="5">
        <?php
            $query = "SELECT COUNT(*) as count FROM users";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
        ?>
        <tr>
            <td>Total</td>
            <td><?= $row['count'] ?></td>
        </tr>
    </table>
</body>
</html>