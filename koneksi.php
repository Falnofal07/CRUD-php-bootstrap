<?php


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_sekolah";

$connection = mysqli_connect(hostname: $db_host,username: $db_user,password: $db_pass,database: $db_name);

if($connection){
    echo"Hostname Berhasil";
}else{
    echo "Koneksi gagal". mysqli_connect_error();
}


?>