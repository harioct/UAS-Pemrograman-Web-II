<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="jumbotron text-center">
    <h1>Welcome, <?= session()->name ?></h1>
    <p>Untuk logout dari sistem silakan klik <a href="<?= base_url('logout'); ?>">Logout</a></p>
    <p>Untuk mengisi form kuisioner, silakan klik <a href="<?= base_url('kuisioner/biodata'); ?>">Form Kuisioner</a></p>
</section>
<?= $this->endSection() ?>
