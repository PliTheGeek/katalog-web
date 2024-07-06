<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog demo</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.carousel-item img {
    height: 100%; /* Adjust this value based on your needs */
    object-fit: cover; /* This makes the image cover the height, might crop the image */
}

.font {
    font-family: 'Poppins', sans-serif;
}

</style>

</head>

<body class="font" >



<?php include 'component/navbar.php'; ?>
<?php include 'admin/db.php'; // Step 1: Include your database connection ?>
<?php include 'admin/functions.php'; // Step 2: Include your functions file ?>


    <!-- Carousel -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.co/800x400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/800x400" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/800x400" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    
    <!-- Card -->

    

    <div class="container my-5">

        <div>

            <h1 class="text-center">Produk Terbaru</h1>

        </div>

        <div class="row justify-content-center g-3">
                <?php 
                
    
    $products = fetchProducts($pdo); // Fetch products using the function?>

        <!-- HTML structure to display products -->
        <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-auto m-5">
                            <div class="card" style="width: 18rem;">
                               <img src="<?php echo "admin/upload/" . htmlspecialchars($product['gambar_produk']); ?>" class="card-img-top" alt="Product Image">                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($product['nama_produk']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($product['deskripsi']); ?></p>
                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No products found.</p>
                <?php endif; ?>
           
        

        <div>

            <h1 class="text-center">Best Seller</h1>



        </div>

        <div class="row justify-content-center g-3">
            <div class="col-auto m-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/png" class="card-img-top" alt="https://placehold.co/600x400/png">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-auto m-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/png" class="card-img-top" alt="https://placehold.co/600x400/png">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>

            

            <div class="col-auto m-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://placehold.co/600x400/png" class="card-img-top" alt="https://placehold.co/600x400/png">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>

            

            
        </div>


    </div>

   <!-- Footer -->

    <?php include 'component/footer.php'; ?>
 
    

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>