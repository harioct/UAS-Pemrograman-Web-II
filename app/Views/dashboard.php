<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Fakultas Teknik Universitas Lambung Mangkurat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            
        }

        .sidebar .nav-link {
            color: #6c757d;
            font-size: 16px;
        }

        .sidebar .nav-link.active {
            background-color: #dbeafe;
            color: #0d6efd;
            border-radius: 8px;
        }

        .sidebar .nav-link:hover {
            background-color: #e2e6ea;
            color: #0d6efd;
            border-radius: 8px;
        }

        .sidebar .nav-link .icon {
            margin-right: 10px;
        }

        .sidebar .menu-header {
            font-weight: bold;
            font-size: 14px;
            color: #adb5bd;
            margin-top: 20px;
            margin-bottom: 10px;
            padding-left: 15px;
        }

        .content {
            margin-left: 5px;
            padding: 20px;
        }

        .jumbotron {
            background-color: #007bff;
            color: #fff;
        }

        .ringkasan-h3 {
            color: #515452;
            font-size: small;
        }

        .card {
            width: 80%;
            margin: 10px;
        }
        
        .card-bawah {
            width: 80%;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="menu-header">Menu</li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="icon"></i> Dashboard
                            </a>
                        </li>
                        <li class="menu-header">Layanan</li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> e-Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> e-Command Center
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> e-Response
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> e-Commerce
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> e-Office
                            </a>
                        </li>
                        <li class="menu-header">Other</li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=base_url('kuisioner/biodata'); ?>">
                                <i class="icon"></i> Kuisioner
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('logout'); ?>">
                                <i class="icon"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="content">
                    <div class="alert alert-warning" role="alert">
                        Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="<?=base_url('kuisioner/biodata'); ?>" class="alert-link">Disini</a>.
                    </div>
                    <div class="jumbotron text-center">
                    <h1>Selamat Datang, <?= session()->name ?></h1>
                    <p class="lead">Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya.</p>
                    </div>
                    <h3 class="ringkasan-h3">Ringkasan</h3>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2</h5>
                                    <p class="card-text">Layanan diajukan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">1</h5>
                                    <p class="card-text">Layanan disetujui</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">1</h5>
                                    <p class="card-text">Layanan ditolak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-5">Mungkin yang kamu butuhkan</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-bawah">
                                <img src="img/Surat_Keterangan_Lulus.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Surat Keterangan Lulus</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-bawah">
                                <img src="img/suratpengantar.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Surat Pengantar Izin PKL</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>