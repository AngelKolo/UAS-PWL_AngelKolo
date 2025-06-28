<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Web Profile' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan CSS DataTables dan FontAwesome -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Kontainer menu kiri (biarkan menu yang ada diambil dari file lain atau view) -->
        <div class="me-auto d-flex align-items-center">
            <!-- Menu navigasi lain di-load dari view utama -->
        </div>

        <!-- Login & Logout di kanan -->
    <div class="d-flex">
    <!-- <a href="<?= base_url('login') ?>" class="btn btn-outline-light me-2">Login</a> -->
    <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
    </div>

</nav>


            
