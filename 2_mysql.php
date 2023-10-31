<?php

$servsrname ="localhost";
$username ="root";
$password ="";
$database="rahul";

$con=mysqli_connect($servsrname, $username, $password,$database);

if(!$con)
{
    die("sorry we faild to connect:" .mysqli_connect_error());
}
else
{
    echo"connection has successful";
}


$sql= "CREATE TABLE `rita` (`sr.no` INT NOT NULL , `name` INT(10) NOT NULL , `no` INT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`sr.no`)) ";
$result=mysqli_query($con , $sql);
if($result)
{
    echo " the db was create successfuly";
}
else{
    echo " the db was not create successfuly";
}







?>