<?php
if(isset($_POST["submit"])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtentions = array("txt", "pdf", "doc", "docx");
    $maxsize = 5*1024*1024;

    if (in_array($fileType, $allowedExtentions) && $_FILES["myfile"]["size"]<=$maxsize) {
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
        echo "File berhasil diunggah.<br>";
    } else {
        echo "Gagal mengungah file.";
    }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>
