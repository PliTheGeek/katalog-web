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

</style>

</head>

<body >



<?php include 'component/navbar.php'; ?>


    
    <!-- Card -->

    

    <div class="container my-5">

        

            <h1 class="text-center p-5">Best Seller</h1>



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

    <!-- All Product -->
    



  
    
  















    

 
    <!-- Footer  -->

    <?php include 'component/footer.php'; ?>


    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>