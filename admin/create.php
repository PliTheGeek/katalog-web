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
      margin-left: 280px; /* Adjust based on sidebar width */
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 fixed-sidebar bg-light p-3">
    
    <?php include '../component/sidebar.php'; ?>

    </div>
    <div class="col-md-9 offset-md-3 content-wrapper">
    
        <div>
            <h1 class="text-left p-5">Tambah Produk</h1>
        </div>

        <!-- Form -->

        <form action="prosestambah.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="productName" class="form-label">Kode Produk</label>
        <input type="text" class="form-control" id="kode_produk" name="kode_produk" required>
    </div>
    <div class="mb-3">
        <label for="productName" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">Harga</label>
        <input type="number" step="0.01" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="mb-3">
            <label for="productCategory" class="form-label">Kategori Produk</label>
            <select class="form-select" id="productCategory" name="kategori_produk" required>
                <option value="#" selected>Pilih kategori</option>
                <option value="Pashmina">Pashmina</option>
                <option value="SegiEmpat">Segi Empat</option>
                <option value="Bergo">Bergo</option>
            </select>
        </div>
     <div class="mb-3">
        <label for="productDescription" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="productImage" class="form-label">Gambar Produk</label>
        <input type="file" class="form-control" id="gambar_produk" name="gambar_produk">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
</body>
</html>