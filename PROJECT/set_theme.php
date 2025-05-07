<?php
if (isset($_GET['theme'])) {
    setcookie("theme", $_GET['theme'], time() + (86400 * 30), "/");
    echo "Theme set to " . $_GET['theme'];
} else {
    echo "No theme selected.";
}
?>
