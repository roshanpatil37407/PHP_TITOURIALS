<?php

echo "welcome to the word of cookies<br> ";

setcookie("category", "book", time() + 86400 , "/");
echo"the cookies are set";

?>