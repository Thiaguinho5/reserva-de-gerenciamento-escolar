<?php 
$banco='escola'; 
$usuario='root';
$senha="";
$host='localhost';

$con = mysqli_connect($host,$usuario,$senha, $banco) 
or die (mysqli_error()) 
or die (mysqli_free_result());

if($con){
    echo"conectou";
}
?>