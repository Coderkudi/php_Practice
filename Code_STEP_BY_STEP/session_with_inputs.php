<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="text" name="user_name" placeholder="enter user name" />
        <br/>
        <br/>

        <input type="submit" name='button' value="set"/>
        <br/>
        <br/>

        <input type="submit" name='button' value="get"/>
        <br/>
        <br/>

        <input type="submit" name='button' value="delete"/>
        <br/>
        <br/>


    </form>
</body>
</html>

<?php

session_start();
if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $value = $_POST['user_name'];
        $_SESSION['user_name'] = $value;
    }

    if($_POST['button']=="get"){
        echo $_SESSION['user_name'];
    }

    if($_POST['button']=="delete"){
        session_destroy();
    }

    // echo "successful";

}

?>