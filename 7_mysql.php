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
    echo"connection has successful <br>";
}
$sql="DELETE FROM rita WHERE `rita`.`sr.no` = 20";
$result=mysqli_query($con ,$sql);
if($result)
{
    echo " the  record  was deleted  successfuly";
}
else{
    echo " the record  was not deleted successfuly";
}
