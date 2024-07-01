<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="jumbotron text-center" style="height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
    <div class="center-content">
        <h1 class="mb-4" style="font-weight: bold;">FORM KUISIONER</h1>
        <img src="img/logoulm.png" alt="Logo" style="width: 100px; margin-bottom: 20px;display: block; margin-left: auto; margin-right: auto; width: 200px; margin-bottom: 20px; ">
        <p class="lead text-muted mb-4">
            Fakultas Teknik Universitas Lambung Mangkurat
        </p>
        <a href="<?= base_url('login'); ?>" class="btn btn-outline-dark btn-lg btn-custom">LOGIN</a>
        <a href="<?= base_url('register'); ?>" class="btn btn-outline-dark btn-lg btn-custom">REGISTER</a>
    </div>
>>>>>>> branch-baru1
</section>

<?= $this->endSection() ?>
