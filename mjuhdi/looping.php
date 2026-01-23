<?php
##### for #####
for($i=1;$i<=10;$i++){
    echo "mahasiswa ke-$i <br>";
    
}
echo "<hr>";
for($i=10;$i>=1;$i--){
    echo "simek ke-$i <br>";


}
echo"<hr>";
##### while #####
$awal = 1;
    while($awal <=10){
        echo "mahasiswa ke-$awal <br>";
        $awal++;
    }

echo "<hr>";

##### do while #####
$dw = 1;
do{
    echo "mahasiswa ke-$dw <br>";
    $dw++;
}while( $dw <= 10);


echo "<hr>";
##### FOREACH ##### 
$is63 = array("abil","kiki gemoy","mahfud");

foreach($is63 as $data){
    echo "$data <br>";
}


?>