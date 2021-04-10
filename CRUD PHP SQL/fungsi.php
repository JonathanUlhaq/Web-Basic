<?php 
	
	$conn = mysqli_connect('localhost','root','','data_desa');

	function tampil($query){
	global $conn;

	$kuery = mysqli_query($conn,$query);
	$himpunan = [];

	while($satu = mysqli_fetch_array($kuery)){
		$himpunan[] = $satu;

	}
	return $himpunan;
	}
	function tambah($data){
		
	global $conn;

	$nokk = $data["nokk"];
	$rt = $data["RT"];
	$rw = $data["RW"];
	$nama = $data["namakk"];
	$status = $data["status"];

	$kuery = "INSERT INTO warga_kk VALUES ('','$nokk','$rt','$rw','$nama','$status')";

	$rumus = mysqli_query($conn,$kuery);

	return mysqli_affected_rows($conn);
	}

    function hapus ($id){
        global $conn;

	$kuery = "DELETE FROM warga_kk WHERE id =$id ";

    $rumus = mysqli_query($conn,$kuery);

    return mysqli_affected_rows($conn);

    }

function ubah($data){
    global $conn;
    $id = $_GET["id"];
	$nokk = $data["nokk"];
	$rt = $data["RT"];
	$rw = $data["RW"];
	$nama = $data["namakk"];
	$status = $data["status"];

    $kuery = "UPDATE warga_kk SET 
    
                nokk = '$nokk',
                RT = '$rt',
                RW = '$rw',
                namakk = '$nama',
                status = '$status'

                WHERE id = $id
    
    ";

    $rumus = mysqli_query($conn,$kuery);

    return mysqli_affected_rows($conn);

}
?>