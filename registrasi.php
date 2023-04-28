<?php
    include("konfigurasi.php");
    include("fungsiUSER.PHP");
    $spn = "";
    if(isset($_POST["txNAMA"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $Email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];

            $psn = registerUSER($nama, $Email, $user, $pass);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi user</title>
</head>
<body>
    <form method="POST" action="Registrasi.php">

    <div>
        Nama lengkap
        <input type="text" name="txNAMA">
    </div>
    <div>
        Email
        <input type="email" name="txEMAIL">
    </div>
    <div>
        user name
        <input type="text" name="txUSER">
    </div>
    <div>
        password
        <input type="password" name="txPASS1">
    </div>
    <div>
        verifikasi password
        <input type="password" name="txPASS2">
    </div>
        <div>
            <button type="submit"> Registrasi </button>
        </div>
    </form>
</body>
</html>