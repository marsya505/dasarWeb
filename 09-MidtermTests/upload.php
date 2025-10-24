<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $position = $_POST["position"];
    $experience = $_POST["experience"];
    $coverletter = $_POST["coverletter"];

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

    $fileName = basename($_FILES["resume"]["name"]);
    $targetFile = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowed = ["pdf", "doc", "docx"];
    if (in_array($fileType, $allowed) && move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
        $_SESSION["user"] = [
            "fullname" => $fullname,
            "email" => $email,
            "phone" => $phone,
            "position" => $position,
            "experience" => $experience,
            "resume" => $fileName
        ];
        header("Location: thankyou.php");
    } else {
        echo "<script>alert('File upload failed or invalid type.'); window.history.back();</script>";
    }
}
?>
