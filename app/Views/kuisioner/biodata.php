<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Kuisioner Mahasiswa</h1>
    <p class="text-center">Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Biodata</div>
    </div>
    <form id="biodataForm" action="<?= base_url('kuisioner/visi_misi') ?>" method="post">
        <div class="form-group mb-3">
            <label for="nama_lengkap"><strong>Nama Lengkap</strong></label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="nim"><strong>NIM</strong></label>
            <input type="text" name="nim" id="nim" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="program_studi"><strong>Program Studi</strong></label>
            <select name="program_studi" id="program_studi" class="form-control" required>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
                <option value="Rekayasa Elektro">Rekayasa Elektro</option>
                <option value="Rekayasa Geologi">Rekayasa Geologi</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="no_handphone"><strong>No. Handphone</strong></label>
            <input type="text" name="no_handphone" id="no_handphone" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="semester"><strong>Semester</strong></label>
            <select name="semester" id="semester" class="form-control" required>
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tahun_akademik"><strong>Tahun Akademik</strong></label>
            <select name="tahun_akademik" id="tahun_akademik" class="form-control" required>
                <option value="2021/2022">2021/2022</option>
                <option value="2022/2023">2022/2023</option>
                <option value="2023/2024">2023/2024</option>
                <option value="2024/2025">2024/2025</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="domisili"><strong>Domisili</strong></label>
            <input type="text" name="domisili" id="domisili" class="form-control" required>
        </div>
        <div class="form-group text-right">
            <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Lanjut</button>
        </div>
    </form>
</div>

<script>
    // Load data from Local Storage
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('biodataForm')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const field = document.querySelector(`[name="${key}"]`);
            if (field) {
                field.value = value;
            }
        }

        // Add asterisk to required fields
        const labels = document.querySelectorAll('label strong');
        labels.forEach(label => {
            const asterisk = document.createElement('span');
            asterisk.textContent = ' *';
            asterisk.style.color = 'red';
            label.appendChild(asterisk);
        });
    });

    // Save data to Local Storage on form change
    document.getElementById('biodataForm').addEventListener('input', function() {
        const formData = {};
        new FormData(this).forEach((value, key) => formData[key] = value);
        localStorage.setItem('biodataForm', JSON.stringify(formData));
    });
</script>
<?= $this->endSection() ?>
