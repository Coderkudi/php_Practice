<form action="" method="post">
    <input type="text" name="user" placeholder="enter user name"/>
    <br/>
    <br/>

    <button name="button" value="set">Set Cookies</button>
    <br/>
    <br/>
    <button name="button" value="display">Display Cookies</button>
    <br/>
    <br/>
    <button name="button" value="delete">Delete Cookies</button>
    <br/>
    <br/>
</form>

<?php

if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $val = $_POST['user'];
        setcookie("user", $val);
        echo "Cookie is set";
    }

    if($_POST['button'] =="display"){
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
    }

}

?>