<?php

setcookie("fruits", "apple", time() + (86400));

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);
}
else{
    echo "No cookie set";
}

?>
