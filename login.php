<?php
// Kullanıcı bilgileri
$dogru_eposta = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

// Formdan gelen değerler
$email = $_POST['email'] ?? '';
$sifre = $_POST['password'] ?? '';

// Kontrol
if ($email === $dogru_eposta && $sifre === $dogru_sifre) {
    $kullanici_adi = explode('@', $email)[0]; // b2412100001
    echo "Hoşgeldiniz $kullanici_adi";
} else {
    // Başarısızsa login sayfasına yönlendir
    header("Location: login.html");
    exit;
}
?>
