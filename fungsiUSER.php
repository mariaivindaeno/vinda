<?php
    function registerUSER($nama, $Email, $user, $pass){
        $psn = "Insert data gagal";
        $iduser = md5($Email);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey,  iduser) VALUES('$nama','$Email','$user', '$pass','$iduser');";
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS,DBNAME, DBPORT);
    if($cnn){
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            $psn = "Insert data sukses";
            }
        }
        return $psn;
    }