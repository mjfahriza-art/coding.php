<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "">
        pilih tanggal:
        <select>
            <?php
                for($i=1;$i<=31;$i++){
                    echo"<option>$i</option>";
                }
            ?>
        </select>

        <br>
    <form action = "">
        pilih bulan :
        <select>
            <?php
                    $bulan = ["januari","februari","maret","april","mey","juni","juli","agustus","september","oktober","november","desember"];
                    foreach($bulan as $list){
                        echo "<option>$list</option>";
                    }
            ?>
        </select>
        <br>

    <form action = "">
        pilih tahun :
        <select>
                <?php
                for($i=2025;$i>=1970;$i--){
                    echo"<option>$i</option>";
                }
            ?>
        </select>

    </form>    
</body>
</html>