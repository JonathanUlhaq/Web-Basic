<?php

    require 'fungsiKredit.php';

    $Err = "";
    $yes = "";
    if($_SERVER["REQUEST_METHOD"] == "POST" ){

        if(empty($_POST["Hmobil"] && $_POST["Umuk"] && $_POST["Angsur"] && $_POST["Bunga"] )) {
            $Err = "Mohon di isi";
        } else {
            $yes = test_input($_POST["Hmobil"] && $_POST["Umuk"] && $_POST["Angsur"] && $_POST["Bunga"] );
        }

    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }


?>

<!DOCTYPE html>
<html>
    <header>
            <link rel="stylesheet" href="formstyle.css">
            <style>
            p span.error{
                color:red;
            }

             footer {
    padding-left : 2%;
    font-family: Arial, Helvetica, sans-serif;
    
  }
            
            </style>
    </header>
        <body>
            <div>
                            <h1>Sistem Simulasi Kredit Mobil</h1>
                <!-- Form Input Data -->
                <form method = "post" action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                
                
                <label for="Harga Mobil">Harga Mobil (min Rp. 100.000.000)</label> <br>
                <input type="number" name = "Hmobil" min = "100000000" >
                <p><span class = "error" ><?php echo $Err; ?></span></p>

                <label for="Uang Muka">Uang Muka % (min 30%, max 100 %)</label> <br>
                <input type="number" name = "Umuk" min = "30" max = "100" >
                <p><span class = "error" ><?php echo $Err; ?></span></p>

                <label for="Lama Angsuran">Lama Angsuran (min 1 Tahun, max 5 Tahun)</label><br>
                 <input type="number" name = "Angsur" min = "1" max = "5" >
                <p><span class = "error" ><?php echo $Err; ?></span></p>

                <label for="Bunga">Bunga flat (min 5%, max 10% pertahun)</label><br>
                <input type="number" name = "Bunga" min = "5" max = "10" >
                <p><span class = "error" ><?php echo $Err; ?></span></p>

                <input type="Submit" name = "Submit" value = "Simpan" >
                <br>
                <input type="reset" name = "reset" value = "Reset" >


            </div>
        </body>
            <footer>
                <?php if(isset($_POST["Submit"]))
                { for($i = 1 ; $i<3 ; $i++){
                    if($i == 1){
                        echo "<h2>Data Output Pegangan Admin</h2>";
                    }if($i == 2){
                        echo "<h2> Data Output Pembeli </h2>";
                        echo "<h3> Kwitansi Pembeli </h3>";

                    }
                ?> 
            <?php

                $operasi = operasi($_POST);
                $operasi;
                echo "<h2>-----------------------------</h2>";

                }
                }
             ?>
                 <br>

            </footer>

</html>

