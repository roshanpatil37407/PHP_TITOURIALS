<?php

$servsrname ="localhost";
$username ="root";
$password ="";

$con=mysqli_connect($servsrname, $username, $password);

if(!$con)
{
    die("sorry we faild to connect:" .mysqli_connect_error());
}
else
{
    echo"connection has successful";
}

$sql=" CREATE DATABASE rahul";
$result=mysqli_query($con ,$sql);

if($result)
{
    echo " the db was create successfuly";
}
else{
    echo " the db was not create successfuly";
}





?>