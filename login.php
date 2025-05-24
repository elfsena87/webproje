<?php
$email=$_POST['email'];
$password=$_POST['password'];

if($email=="b241210078@sakarya.edu.tr" && $password=="b241210078")
{
    echo "Hoşgeldiniz $password";
}
else
{
header("Location:login.html");
exit();
}
?>