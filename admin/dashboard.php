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
            <h1 class="text-left p-5">Dashboard</h1>
        </div>
    
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script>
</body>
</html>