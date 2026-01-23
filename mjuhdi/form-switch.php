<?php
    if(isset($_POST['tbl'])){
        //jika ada aktivitas dari tombol Log In
        $hari = $_POST['hari'];
        switch($hari){
        
        
        
        
            case 1:
                echo "hari minggu";
                break;


            case 2;
                echo "hari senin";
                break;

            case 3;
                echo "hari selasa";
                break;

            case 4;
                echo "hari rabu";
                break;
            
            case 5;
                echo "hari kamis";
                break;

            case 6;
                echo "hari jum'at";
                break;

            case 7;
                echo "hari sabtu";
                break;
            
            default :
                echo "tidak ada hari";
                break;
            
          
        }
          echo "<hr>";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input switch</title>
</head>
<body>
    
    <form action="form-switch.php" method="post">
        <label for="">Tuliskan Angka Hari</label>:
            <input type="number" name="hari">

            <br>
            <button type="submit" name="tbl">Cek Hari</button>
    </form>

    
    
</body>
</html>