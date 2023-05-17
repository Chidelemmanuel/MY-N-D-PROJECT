<?php 
$con = mysqli_connect('localhost','root','','invoice');

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
?>