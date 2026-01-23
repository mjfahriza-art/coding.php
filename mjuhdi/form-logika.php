<?php
    if(isset($_POST['tbl'])){
        //jika ada aktivitas dari tombol Log In
        $username = $_POST['us'];
        $password = $_POST['pw'];

        if($username == "admin" && $password == "123456"){
           echo "login berhasil";
        }elseif($username == "admin" && $password != "123456"){
            echo "Password Salah";
        }elseif($username != "admin" && $password == "123456"){
            echo "Username Salah";
        }else{
            echo "Login Gagal";
        }
        echo "<hr>";
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login sederhana</title>
</head>
<body>
    <h> FORM LOGIN SEDERHANA </h>
    <form action="form-logika.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="us"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tbl" value="Login"></td>
            </tr>
        </table>

    </from>

</body>
</html>