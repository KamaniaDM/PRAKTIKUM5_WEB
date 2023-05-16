<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "perpus";  
$koneksi = mysqli_connect($servername, $username, $password, $dbname); 
if (!$koneksi) {     
    die("Koneksi gagal: " . mysqli_connect_error()); 
    }  
?> 