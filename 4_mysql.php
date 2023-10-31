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
$sql= "INSERT INTO `rita` (`sr.no`, `name`, `no`, `date`) VALUES ('26', 'raj', '16', '2023-10-30 12:49:14.000000')";
//$sql="DELETE FROM rita WHERE `rita`.`sr.no` = 20";
//$sql="SELECT * FROM `rita` WHERE 20; ";
//$sql="SELECT * FROM `rita` ";
$result=mysqli_query($con , $sql);
if($result)
{
    echo " the db was create successfuly";
}
else{
    echo " the db was not create successfuly";
}

