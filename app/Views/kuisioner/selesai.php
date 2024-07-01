<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    body {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<div class="container mt-5 text-center">
    <h1>Kuisioner Mahasiswa</h1>
    <p>Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
    <h4 class="text-center">Selesai</h4>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
    </div>
    <div>
        <img src="<?= base_url('img/img_hal_selesai.png') ?>" alt="Illustration" class="img-fluid mb-4" style="max-width: 400px;">
    </div>
    <h2>Anda telah mengisi kuisioner</h2>
    <p>Terima kasih atas partisipasi anda dalam pengisian kuisioner ini. Semoga masukkan dari anda dapat membuat Layanan FT ULM menjadi lebih baik.</p>
    <div class="text-center mt-5">
        <a href="<?= base_url('dashboard') ?>" class="btn btn-primary">Kembali ke Dashboard</a>
    </div>
</div>
<?= $this->endSection() ?>
