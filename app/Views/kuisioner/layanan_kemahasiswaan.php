<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    body {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center">Kuisioner Mahasiswa</h1>
    <p class="text-center">Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
    <h4 class="text-center">Layanan Kemahasiswaan</h4>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
    </div><br><br>
    <form id="kuisionerForm" action="<?= base_url('kuisioner/submit') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Bagaimana tingkat kepuasan anda terhadap layanan di bidang penalaran, minat, bakat?</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_minkat" id="tingkat_kepuasan_minkat4" value="Kurang" required>
                <label class="form-check-label" for="tingkat_kepuasan_minkat4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_minkat" id="tingkat_kepuasan_minkat3" value="Cukup" required>
                <label class="form-check-label" for="tingkat_kepuasan_minkat3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_minkat" id="tingkat_kepuasan_minkat2" value="Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_minkat2">Puas</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_minkat" id="tingkat_kepuasan_minkat1" value="Sangat Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_minkat1">Sangat Puas</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Bagaimana tingkat kepuasan anda terhadap layanan bimbingan karir dan kewirausahaan?</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_karir" id="tingkat_kepuasan_karir4" value="Kurang" required>
                <label class="form-check-label" for="tingkat_kepuasan_karir4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_karir" id="tingkat_kepuasan_karir3" value="Cukup" required>
                <label class="form-check-label" for="tingkat_kepuasan_karir3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_karir" id="tingkat_kepuasan_karir2" value="Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_karir2">Puas</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_karir" id="tingkat_kepuasan_karir1" value="Sangat Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_karir1">Sangat Puas</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Bagaimana tingkat kepuasan anda terhadap layanan bimbingan konseling, beasiswa, dan <br> kesehatan?</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_konseling" id="tingkat_kepuasan_konseling4" value="Kurang" required>
                <label class="form-check-label" for="tingkat_kepuasan_konseling4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_konseling" id="tingkat_kepuasan_konseling3" value="Cukup" required>
                <label class="form-check-label" for="tingkat_kepuasan_konseling3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_konseling" id="tingkat_kepuasan_konseling2" value="Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_konseling2">Puas</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="tingkat_kepuasan_konseling" id="tingkat_kepuasan_konseling1" value="Sangat Baik" required>
                <label class="form-check-label" for="tingkat_kepuasan_konseling1">Sangat Puas</label>
            </div>
        </div><br>
        <div class="form-group text-right">
            <a href="<?= base_url('kuisioner/layanan_akademik') ?>" class="btn btn-secondary">Sebelumnya</a>
            <button type="button" class="btn btn-primary" id="kirimBtn">Kirim</button>
        </div>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('kuisionerFormRadio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('kuisionerForm').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('kuisionerFormRadio', JSON.stringify(formData));
    });
</script>
<script>
    document.getElementById('kirimBtn').addEventListener('click', function() {
        Swal.fire({
            title: 'Apakah Kamu Yakin?',
            text: 'Pastikan data yang kamu masukkan sudah benar',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Kirim',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                const storedData = JSON.parse(localStorage.getItem('kuisionerFormRadio')) || {};
                console.log('Data dari local storage:', storedData);

                const formData = new FormData(document.getElementById('kuisionerForm'));
                for (const [key, value] of Object.entries(storedData)) {
                    formData.append(key, value);
                }

                console.log('Data yang akan dikirim:', Array.from(formData.entries()));

                fetch('<?= base_url('kuisioner/submit') ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    return response.text().then(text => {
                        try {
                            return JSON.parse(text);
                        } catch {
                            throw new Error('Response is not valid JSON: ' + text);
                        }
                    });
                })
                .then(data => {
                    console.log('Success:', data);
                    Swal.fire(
                        'Data Kamu Sudah Terkirim',
                        '',
                        'success'
                    ).then(() => {
                        localStorage.removeItem('kuisionerFormRadio');
                        window.location.href = '<?= base_url('kuisioner/selesai') ?>';
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire(
                        'Gagal Mengirim Data',
                        'Terjadi kesalahan saat mengirim data. Silakan coba lagi. Error: ' + error.message,
                        'error'
                    );
                });
            }
        });
    });
</script>

<?= $this->endSection() ?>
