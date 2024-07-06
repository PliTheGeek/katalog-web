<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .fixed-sidebar {
            height: 100vh;
            position: fixed;
            overflow-y: auto;
        }

        .content-wrapper {
            margin-left: 280px;
            /* Adjust based on sidebar width */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 fixed-sidebar bg-light p-3">

                <?php include '../component/sidebar.php'; ?>

            </div>
        
            <?php include 'db.php'; // Step 1: Include your database connection ?>
            
            <div class="col-md-9 offset-md-3 content-wrapper">
                <div>
                    <h1 class="text-left p-5">Lihat Produk</h1>
                </div>
                <?php
                // Step 2: Fetch Data from Database
                $sql = "SELECT id, kode_produk, nama_produk, harga, kategori_produk, deskripsi, gambar_produk FROM katalog";
                $result = $pdo->query($sql);

                if ($result->rowCount() > 0) {
                    // Step 3: Display Data in HTML Table
                    echo "<table class='table'>
        <thead>
        <tr>
        <th>ID</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Kategori Produk</th>
        <th>Deskripsi</th>
        <th>Gambar Produk</th>
        </tr>
        </thead>
        <tbody>";
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $imagePath = "upload/" . $row["gambar_produk"];
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["kode_produk"] . "</td><td>" . $row["nama_produk"] . "</td><td>" . $row["harga"] . "</td><td>" . $row["kategori_produk"] . "</td><td>" . $row["deskripsi"] . "</td><td><img src='" . $imagePath . "' height='100'></td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "No products found";
                }
                ?>
            </div>

                
                
        
                
                


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>
</body>

</html>