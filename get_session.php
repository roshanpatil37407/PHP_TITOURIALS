<?php

session_start();
if(isset($_SESSION['username']))
{


echo "welcome ".$_SESSION['username'];
echo"<br>and my age is ".$_SESSION['age'];
echo"<br>";
}
else
{
    echo"please login to continues";
}

?>