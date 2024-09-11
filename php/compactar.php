<?php
$uploads_dir = 'uploads/arquivos/';
foreach ($_FILES['arquivos']['tmp_name'] as $file) {
    $filename = $_FILES['arquivos']['name'];
    move_uploaded_file($file, $uploads_dir . $filename);
    // Compactar arquivo aqui
    // ...
}
?>