<?php 

    function operasi($data){

        if(isset($_POST["Submit"])){

            $Hmobil = $data["Hmobil"];
            $Umuk = $data["Umuk"];
            $Angsur = $data ["Angsur"];
            $Bunga = $data ["Bunga"];

            // operasi matematika untuk menentukan nominal uang muka dan nominal yang harus dibayar
            $persen = (int)$Umuk / 100;
            $nominal = (int)$Hmobil * $persen ;
            $total = (int)$Hmobil  - $nominal;

            $angsuran = (int)$Angsur*12; // operasi matematika untuk input tahun menjadi bulan

            $pertahun = (int)$Bunga*(int)$Angsur; // mengalikan bunga pada setiap tahunnya
            $Bpersen =  $pertahun / 100; //niilai bunga menjadi per seratus

            // menghitung cicilan
            $cicilan =(($total*$Bpersen)+$total)/$angsuran;
            

            //number_fromat(number,decimal,decimal point, separator)

            // menyimpan hasil operasi matematika kedalam array
            $HasilOperasi = [$nominal,$total,$cicilan];

            echo "Harga Mobil       = Rp. ".number_format($Hmobil,2,",",".") ;// menampilkan harga mobil dengan format angka 
            echo "<br><br>";
            echo "Uang Muka         = $Umuk%" ; // menampilkan uang muka
            echo "<br><br>";
            echo "Nominal Uang Muka = Rp. ".number_format($HasilOperasi[0],2,",","."); // menampilkan nominal uang muka
            echo "<br><br>";
            echo "Nominal yang Harus Dibayar = Rp. ".number_format($HasilOperasi[1],2,",","."); // menampilkan yang harus dibayar
            echo "<br><br>";
            echo "Lama Angsuran         = $Angsur Tahun" ; // menampilkan lama angsuran
            echo "<br><br>";
            echo "Bunga                 = $Bunga%" ; // menampilkan bunga
            echo "<br><br>";
            echo "Angsuran Perbulan      = Rp. ".number_format($HasilOperasi[2],2,",",".") ; // menampilkan cicilan perbulan
            echo "<br><br>";
 
    }
    }
    

?>