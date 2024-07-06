<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    require 'db.php';

    // Validate and sanitize inputs
    $kode_produk = filter_var($_POST['kode_produk'], FILTER_SANITIZE_STRING);
    $nama_produk = filter_var($_POST['nama_produk'], FILTER_SANITIZE_STRING);
    $harga = filter_var($_POST['harga'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $kategori_produk = filter_var($_POST['kategori_produk'], FILTER_SANITIZE_STRING);
    $deskripsi = filter_var($_POST['deskripsi'], FILTER_SANITIZE_STRING);

    // Handle file upload
    if (isset($_FILES["gambar_produk"]) && $_FILES["gambar_produk"]["error"] == 0) {
        // Your existing file upload handling code
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["gambar_produk"]["name"];
        $filetype = $_FILES["gambar_produk"]["type"];
        $filesize = $_FILES["gambar_produk"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed))
            die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize)
            die("Error: File size is larger than the allowed limit.");

        // Verify MIME type of the file
        if (in_array($filetype, $allowed)) {
            // File upload path
            $targetFilePath = "upload/" . $filename;
            // Check whether file exists before uploading it
            if (file_exists($targetFilePath)) {
                echo $filename . " already exists.";
            } else {
                if (move_uploaded_file($_FILES["gambar_produk"]["tmp_name"], $targetFilePath)) {
                    // File upload success, proceed with inserting form data into database
                } else {
                    die("Error: There was an error uploading your file.");
                }
            }
        } else {
            die("Error: There was a problem with your file. Please try again.");
        }
    } else {
        die("Error: " . $_FILES["gambar_produk"]["error"]);
    }

    // Prepare SQL statement to insert form data into database
    $sql = "INSERT INTO katalog (kode_produk, nama_produk, harga, kategori_produk, deskripsi, gambar_produk) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters and execute
    $stmt->execute([$kode_produk, $nama_produk, $harga, $kategori_produk, $deskripsi, $filename]);

    // Redirect or inform the user
    echo "Product added successfully.";
    // Optionally, redirect to another page
    header("Location: lihatproduk.php");
}
?>