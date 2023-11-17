<?php

$hostname="localhost";
$dbuser="root";
$dbname="sease";
$dbpassword="";


$conn= mysqli_connect($hostname,$dbuser,$dbpassword,$dbname);

if (!$conn)
{
    echo "not connected";
}

?>