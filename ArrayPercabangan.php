<!DOCTYPE html >
<html>
<head>
    <body>
            <?php
            $x=1;
            $lahir = 2001;
            $tahun_sekarang = 2011;
            $umur = $tahun_sekarang-$lahir;
            $hadiah = array("Bola","Mobil","Sepeda Motor");

            echo "Situs Pembuatan SIM"."<br>".  "<br>";
          
            
            
            if($umur>17)
            {
                for ($i = 1; $i<4; $i++){

                echo "Selamat anda berhak mendaftar SIM"."<br>";
                echo "maka anda mendapatkan ".$hadiah[1]." dan ".$hadiah[2]."<br>"."<br>";

                }

            }
            else{

                while($x<5){
                echo "Maaf anda tidak berhak mendaftar SIM"."<br>";
                echo "Silahkan anda bermain ".$hadiah[0]."<br>"."<br>"; 
                $x++;
                }
            }

            ?>

    </body>
</head>
</html>
