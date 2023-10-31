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
$sql="SELECT * FROM `rita` WHERE 20; ";
$result=mysqli_query($con ,$sql);
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
if($num>0)
{
   while( $row =mysqli_fetch_assoc($result)){
    echo var_dump($row);
    //echo $row['sr.no'].";hello".$row['name']."welcome to".$row['no'];
    echo"<br>";
   }
}
$sql="UPDATE `rita` SET `name` = 'riya' WHERE `rita`.`sr.no` = 20";
$result=mysqli_query($con ,$sql);
if($result)
{
    echo " the update record  was  successfuly";
}
else{
    echo " the record  was not updated successfuly";
}

