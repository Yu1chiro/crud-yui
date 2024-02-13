<?php

$host="localhost";
$user="admin";
$password="admin2505";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>