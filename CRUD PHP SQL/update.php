<?php

require 'fungsi.php';
$id = $_GET["id"];
$satu = tampil("SELECT*FROM warga_kk WHERE id = $id ");
if(isset($_POST["Submit"])){
if(ubah($_POST)>0){

    echo "
<script>
alert ('Data berhasil disimpan');
document.location.href = 'tabel.php';
</script>
";
} else {

echo "
<script>
alert ('Data berhasil disimpan');
document.location.href = 'tabel.php';
</script>
";

}

}

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php foreach ($satu as $himpunan): ?>
    <form method = "post" action = "">
        <label for="Nomor KK">Nomor KK</label>
        <input type="text" name="nokk" value="<?php echo $himpunan["nokk"] ?>" />

        <label for="RT">RT</label>
        <input type="text" name="RT" value="<?php echo $himpunan["RT"] ?>" />

        <label for="RW">RW</label>
        <input type="text" name="RW" value="<?php echo $himpunan["RW"] ?>" />

        <label for="Nama KK">Nama KK</label>
        <input type="text" name="namakk" value="<?php echo $himpunan["namakk"] ?>" />

        <label for="status">Status</label>
        <input type="text" name="status" value="<?php echo $himpunan["status"] ?>" />

        <input type="Submit" name="Submit" value="Submit" />




    </form>
<?php endforeach; ?>
    

</body>
</html>