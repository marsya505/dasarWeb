<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.html");
    exit();
}
$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Thank You</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Thank You for Applying!</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($user["fullname"]) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($user["email"]) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($user["phone"]) ?></p>
    <p><strong>Position:</strong> <?= htmlspecialchars($user["position"]) ?></p>
    <p><strong>Experience:</strong> <?= htmlspecialchars($user["experience"]) ?> years</p>
    <p><strong>Resume File:</strong> <?= htmlspecialchars($user["resume"]) ?></p>

    <div class="info-message">
    <p>Thank you for applying to <strong>Marsya Tech</strong>.</p>
    <p>Our HR team will contact you if you pass the initial screening stage.</p>
    <p>We appreciate your interest and wish you the best of luck!</p>
</div>

    <a href="index.html" class="btn">Back to Form</a>
</div>
</body>
</html>
