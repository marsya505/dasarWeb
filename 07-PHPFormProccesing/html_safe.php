<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email yang Anda masukkan: " . $email;
    } else {
        echo "Format email tidak valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Email</title>
</head>
<body>
    <h2>Masukkan Email</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
