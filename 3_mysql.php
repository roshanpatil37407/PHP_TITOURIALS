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


$sql= "INSERT INTO `rita` (`sr.no`, `name`, `no`, `date`) VALUES ('2', 'raj', '16', '2023-10-30 12:49:14.000000')";
$result=mysqli_query($con , $sql);

if($result)
{
    echo " the db was create successfuly";
}
else{
    echo " the db was not create successfuly".mysqli_error($con);
}
?>