<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    $result = mysqli_query($conn, "UPDATE dataguru SET nip='$nip', nama='$nama', mapel='$mapel' WHERE id=$id");

    header("location: dashboard.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM dataguru WHERE id='$id'");

while ($user_data = mysqli_fetch_array($result)) {
    $nip = $user_data['nip'];
    $nama = $user_data['nama'];
    $mapel = $user_data['mapel'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edhit</title>
</head>

<body>
    <form action="edit.php" method="post">
        <label for="">NIP</label>
        <input type="text" name="nip" value="<?php echo "$nip"; ?>">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?php echo "$nama"; ?>">
        <label for="">Mata Pelajaran</label>
        <input type="text" name="mapel" value="<?php echo "$mapel"; ?>">

        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <button name="update" value="Update">Update</button>
        <a href="dashboard.php">Cancel</a>
    </form>
</body>

</html>