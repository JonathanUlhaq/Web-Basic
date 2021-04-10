<?php 

    require 'fungsi.php';

    $id = $_GET["id"];

    if(hapus($id)>0){

        echo "
<script>
alert ('Data berhasil diubah');
document.location.href = 'tabel.php';
</script>
";
} else {

echo "
<script>
alert ('Data gagal diubah');
document.location.href = 'tabel.php';
</script>
";

    }
    

?>