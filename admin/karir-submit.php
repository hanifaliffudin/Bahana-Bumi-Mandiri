<?php
include "../dbconnect.php";


$posisi = $_POST["posisi"];
$respon_require = $_POST["respon_require"];
$catatan = $_POST["catatan"];

try{
$stmt=$db->prepare("INSERT INTO karir (name, responsibilities_requirements, notes) VALUES (:posisi,:respon_require,:catatan)");
// $stmt=$db->prepare("INSERT INTO insight (bigPict, smallPict, judul, tanggal, creator, content) VALUES (:bigPict, :smallPict, :judul, :tanggal, :creator, :content)");
$stmt->bindParam(':posisi', $posisi);
$stmt->bindParam(':respon_require', $respon_require);
$stmt->bindParam(':catatan', $catatan);
$stmt->execute();
echo "berhasil";
}catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
}

// header("Location: ");
?>