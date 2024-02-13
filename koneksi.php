<?php

$host="localhost";
$user="id21869614_crud25_php";
$password="Yu1crud@25";
$db="id21869614_crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>
