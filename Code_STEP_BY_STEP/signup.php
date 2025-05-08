<?php

echo "Signup page";
if($_POST){
    echo $_POST['user_name'];
    echo "<br>";
    echo $_POST['password'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
}

?>