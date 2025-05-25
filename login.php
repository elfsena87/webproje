<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //KULLANICIDAN GELEN BLGİLER.
    $email=$_POST['email'];
    $password=$_['password'];

    //e-psta ve şifreyi kontrol.
    $valid_email='b241210078@sakarya.edu.tr';
     $valid_password='b241210078';

     if($email===$valid_email && $password===$valid_password)
     {
        //giriş yapılır.
        echo "hoşgeldiniz" .substr($password,0,10) . "!";
     }
     else
     {
        //girmez ve aynı sayfada kalır.
        header("Loction:login.html");
        exit();
     }
    
}
?>
