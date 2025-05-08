<?php

print_r($_POST);
echo "User name is: ". $_POST['name'];
echo "<br/>";
echo "User email is: ". $_POST['email'];
echo "<br/>";
echo "User password is: ". $_POST['password'];
echo "<br/>";

echo "User skill is: ".implode(", ", $_POST['skills']);
echo "<br/>";
// echo "User skills is ".implode(", ", $_POST['skills']);
echo "<br/>";
echo "User gender is: ". $_POST['gender'];
echo "<br/>";
echo "User city is: ". $_POST['city'];
echo "<br/>";
echo "User bio is ".implode(", ", $_POST['bio']);
echo "<br/>";


?>
