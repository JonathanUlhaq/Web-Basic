<?php

function operasi($data){
     if(isset($data["Submit"])){
        

         if(!empty($data["Tinggi"] && $data["Gender"] )){

              echo "<h2> Hasil </h2>";
        
        if($data["Gender"] == "Pria" ){
            echo "Gender : Pria <br><br>";
        } else {
            echo "Gender : Wanita <br><br>";
        }

        $Tinggi = $data["Tinggi"];

        $idealCew = ((int)$Tinggi - 100) - ((int)$Tinggi - 100) *0.15;

        $idealCow = ((int)$Tinggi - 100) - ((int)$Tinggi - 100) *0.10;


        echo "Tinggi : ".$Tinggi." cm <br><br>";

        if($_POST["Gender"] == "Pria" ){
            echo "Berat Badan Ideal : $idealCow"." kg <br><br>";
        } else {
            echo "Berat Badan Ideal : $idealCew"." kg <br><br>";
        }

         }
    }
}




 ?>


