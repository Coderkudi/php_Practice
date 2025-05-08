<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call php function</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1" >Call function</button>
        <button name="button2" value="btn2" >Call function 2</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['button'])){
    btn_click_test();
}

if(isset($_POST['button2'])){
    btn2_function();
}


function btn_click_test(){
    echo "function called on button click";
}

function btn2_function(){
    echo "function 2 called on button click";
}
?>