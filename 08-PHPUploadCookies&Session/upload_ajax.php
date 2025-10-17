<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowed_extensions = array("pdf", "doc", "docx", "txt", "jpg", "jpeg", "png", "gif");
    $max_size = 2097152; 

    foreach ($_FILES['files']['name'] as $key => $name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi tidak diizinkan.";
            continue;
        }

        if ($file_size > $max_size) {
            $errors[] = "$file_name: Ukuran file melebihi 2 MB.";
            continue;
        }

        $target_dir = "documents/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($file_tmp, $target_dir . $file_name)) {
            echo "<p>$file_name berhasil diunggah.</p>";
        } else {
            $errors[] = "$file_name gagal diunggah.";
        }
    }

    if (!empty($errors)) {
        echo "<p style='color:red;'>" . implode("<br>", $errors) . "</p>";
    }
}
?>
