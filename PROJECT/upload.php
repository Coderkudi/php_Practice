<?php
if ($_FILES['profile']['size'] < 2097152 && in_array($_FILES['profile']['type'], ['image/jpeg', 'image/png'])) {
    move_uploaded_file($_FILES['profile']['tmp_name'], 'uploads/' . $_FILES['profile']['name']);
    echo "Uploaded successfully.";
} else {
    echo "Invalid file.";
}
?>
