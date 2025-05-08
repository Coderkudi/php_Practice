<?php

// print_r($_FILES);
if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    $upload_path = "./uploads/".$path;
    // echo $upload_path;
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)
    || die("failed to upload");
}else{
    die("No file found");
}

?>
