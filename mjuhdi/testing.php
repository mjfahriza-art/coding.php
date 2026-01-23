<?php
    if(isset($_POST['nli'])){
        $nama = $_POST['us'];
        $nilai = $_POST['nl'];
         if( $nilai >=85){
            echo "selamat $nama anda mendapatkan nilai A";
         }elseif( $nilai >= 70){
            echo "selamat $nama anda mendapatkan nilai B";
         }elseif( $nilai >= 60){
            echo "selamat $nama anda mendapatkan nilai C";
         }elseif( $nilai >= 50){
            echo "selamat $nama anda mendapatkan nilai D";
         }elseif( $nilai < 50){
            echo "selamat $nama anda mendapatkan nilai E";
         }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form nilai sederhana</h1>
    <form action="testing.php" method="POST">
        <table>
            <tr>
                <td>name</td>
                <td>:</td>
                <td><input type="text" name="us"></td>
            </tr>
            <tr>
                <td>nilai</td>
                <td>:</td>
                <td><input type="nilai" name="nl"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="nli" value="Login"></td>
            </tr>
        </table>

    </from>
    
</body>
</html>