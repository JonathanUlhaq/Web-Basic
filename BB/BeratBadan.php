<?php 

    //memanggil fungsi.php

    require 'fungsi.php';   

    // Validasi Form

    $err = "";
    $sukses = "";

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        if(empty($_POST["Tinggi"] && $_POST["Gender"] )){
            $err = "Mohon di isi";
        } else {
            $sukses = test_input($_POST["Tinggi"]  && $_POST["Gender"]);
        }  
    }
     function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         p span.error{
    color:red;
 }

    </style>
                <link rel="stylesheet" href="formstyle.css">

<body>  

    <!-- Membuat Form -->

    <h1>Hitung Berat Badan Ideal</h1>

    <form method = "post" action = "<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="Gender">Gender : </label>

        <label for="Pria">Pria</label>
        <input type="radio" name = "Gender" value = "Pria" >

        <label for="Wanita">Wanita</label>
        <input type="radio" name = "Gender" value = "Wanita" >
        <p><span class = "error" ><?php echo $err; ?></span></p>

        <label for="Tinggi Badan">Tinggi Badan (cm)</label>
        <input type="number" name = "Tinggi" min = "100" >
         <p><span class = "error" ><?php echo $err; ?></span></p>

        <input type="Submit" name = "Submit" value = "Hitung" >



    </form>
    
</body>
    <footer>
            <!-- Operasi Hitung PHP -->
    <?php 

    $fungsi = operasi($_POST);
    $fungsi;
    
    
    ?>


    
    
    
    </footer>
</html>