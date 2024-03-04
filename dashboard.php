<?php
include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM dataguru ORDER BY id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>
</head>

<body>
    <h1>DataGuru</h1>
    <form action="add.php" method="post">
        <input type="text" name="nip" placeholder="Masukkan nip" required><br>
        <input type="text" name="nama" placeholder="Masukkan nip" required><br>
        <input type="text" name="mapel" placeholder="Masukkan nip" required><br>
        <button value="Add" name="add">Submit</button>
    </form>

    <table border="1">
        <tr>
            <th>nip</th>
            <th>nama</th>
            <th>mapel</th>
            <th>update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {

            echo "<tr>";
            echo "<td>" . $user_data['nip'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['mapel'] . "</td>";
            echo "<td>
            <a href='edit.php?id=$user_data[id]'>Edit</a>
            <a href='delete.php?id=$user_data[id]'>Delete</a>
            </td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>