<?php

require 'fungsi.php';

if(isset($_POST["Submit"])){
if(tambah($_POST)>0){

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
    <form method = "post" action = "">
        <label for="Nomor KK">Nomor KK</label>
        <input type="text" name="nokk" value="" />

        <label for="RT">RT</label>
        <input type="text" name="RT" value="" />

        <label for="RW">RW</label>
        <input type="text" name="RW" value="" />

        <label for="Nama KK">Nama KK</label>
        <input type="text" name="namakk" value="" />

        <label for="status">Status</label>
        <input type="text" name="status" value="" />

        <input type="Submit" name="Submit" value="Submit" />




    </form>

</body>
</html>