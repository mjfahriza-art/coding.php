<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //struktur logika
    //if,elsif,lese
    //switch

    //operator perbandingan (== != <> >= <=)
    //operator logika (and or) (&& ||) 

    $username ="admin";
    $password ="123456";

    if($username == "admin" && $password == "123456"){
        echo "login berhasil";

    }elseif($username == "admin" && $password != "123456"){
        echo "username benar, password salah";
    
    }elseif($username != "admin" && $password == "123456"){
        echo "username salah, password benar";
    
    }else{
        echo "login gagal";
    }

    
    
    
    
    // $nama ="cecep";
    // $nilai =10;

    // if($nilai >=70){
    //     echo "Selamat $nama anda lulus";
    // }elseif($nilai >=40){
    //     echo "maaf $nama anda harus remedi";
    // }elseif($nilai >=10){
    //     echo "maaf $nama anda terlalu bodoh";
    // }





    // if($nilai >50 ){
    //     echo "kamu lulus,";
    //     if($nilai >90){
    //         echo " predikat cumlaude.";
    //     }

        
    // }else{
    //     echo "anda tidak lulus,";
    //     if($nilai >30){
    //         echo " anda ikut remedial";
    //     }
    // }



    ####### SWITCH #######
    echo "<hr>";
    $hari = 6;
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
    ?>
</body>
</html>