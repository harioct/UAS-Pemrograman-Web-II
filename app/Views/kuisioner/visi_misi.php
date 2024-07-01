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
    <h4 class="text-center">Visi Misi FT ULM</h4>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
    </div>
    <form id= "visimisiForm" action="<?= base_url('kuisioner/layanan_akademik') ?>" method="post">
        <div class="form-group mb-3">
            <label><strong>Apakah Anda sudah pernah membaca "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</strong></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="membaca_visi_misi" id="membaca_visi_misi1" value="Ya" required>
                <label class="form-check-label" for="membaca_visi_misi1">Ya</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="membaca_visi_misi" id="membaca_visi_misi2" value="Tidak" required>
                <label class="form-check-label" for="membaca_visi_misi2">Tidak</label>
            </div><br>
        </div>
        <div class="form-group mb-3">
            <label><strong>Jika Ya, dari manakah anda mengetahui visi dan misi Fakultas? Boleh dipilih lebih dari satu</strong></label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sumber_visi_misi[]" id="sumber1" value="Website / Media Sosial">
                <label class="form-check-label" for="sumber1">Website / Media Sosial</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sumber_visi_misi[]" id="sumber2" value="Brosur">
                <label class="form-check-label" for="sumber2">Brosur</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sumber_visi_misi[]" id="sumber3" value="Pidato / Sosialisasi Pimpinan">
                <label class="form-check-label" for="sumber3">Pidato / Sosialisasi Pimpinan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sumber_visi_misi[]" id="sumber4" value="Banner / Pamflet">
                <label class="form-check-label" for="sumber4">Banner / Pamflet</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sumber_visi_misi[]" id="sumber5" value="Papan Informasi">
                <label class="form-check-label" for="sumber5">Papan Informasi</label>
            </div>
        </div>
        <div class="form-group mb-3">
            <label><strong>Apakah Anda sudah pernah mendapatkan sosialisasi/penjelasan tentang "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</strong></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sosialisasi_visi_misi" id="sosialisasi_visi_misi1" value="Sering" required>
                <label class="form-check-label" for="sosialisasi_visi_misi1">Sering</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sosialisasi_visi_misi" id="sosialisasi_visi_misi2" value="Beberapa Kali" required>
                <label class="form-check-label" for="sosialisasi_visi_misi2">Beberapa Kali</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sosialisasi_visi_misi" id="sosialisasi_visi_misi3" value="Satu Kali" required>
                <label class="form-check-label" for="sosialisasi_visi_misi3">Satu Kali</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sosialisasi_visi_misi" id="sosialisasi_visi_misi4" value="Tidak Sama Sekali" required>
                <label class="form-check-label" for="sosialisasi_visi_misi4">Tidak Sama Sekali</label>
            </div><br>
        </div>
        <div class="form-group mb-3">
            <label><strong>Bagaimanakah tingkat pemahaman anda terhadap "Visi, Misi, Tujuan dan Strategi" Fakultas Teknik ULM?</strong></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemahaman_visi_misi" id="pemahaman_visi_misi1" value="Sangat Paham" required>
                <label class="form-check-label" for="pemahaman_visi_misi1">Sangat Paham</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemahaman_visi_misi" id="pemahaman_visi_misi2" value="Paham" required>
                <label class="form-check-label" for="pemahaman_visi_misi2">Paham</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemahaman_visi_misi" id="pemahaman_visi_misi3" value="Kurang Paham" required>
                <label class="form-check-label" for="pemahaman_visi_misi3">Kurang Paham</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pemahaman_visi_misi" id="pemahaman_visi_misi4" value="Tidak Paham" required>
                <label class="form-check-label" for="pemahaman_visi_misi4">Tidak Paham</label>
            </div><br>
        </div>
        <div class="form-group mb-3">
            <label><strong>Menurut Anda apakah semua aspek kegiatan akademik sudah terakomodasi dalam visi dan misi Fakultas Teknik ULM?</strong></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="akomodasi_kegiatan_akademik" id="akomodasi_kegiatan_akademik1" value="Sudah" required>
                <label class="form-check-label" for="akomodasi_kegiatan_akademik1">Sudah</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="akomodasi_kegiatan_akademik" id="akomodasi_kegiatan_akademik2" value="Sebagian" required>
                <label class="form-check-label" for="akomodasi_kegiatan_akademik2">Sebagian</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="akomodasi_kegiatan_akademik" id="akomodasi_kegiatan_akademik3" value="Hanya Sedikit" required>
                <label class="form-check-label" for="akomodasi_kegiatan_akademik3">Hanya Sedikit</label>
            </div><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="akomodasi_kegiatan_akademik" id="akomodasi_kegiatan_akademik4" value="Tidak Ada" required>
                <label class="form-check-label" for="akomodasi_kegiatan_akademik4">Tidak Ada</label>
            </div><br>
        </div>
        <div class="form-group mb-3">
            <label><strong>Berdasarkan pertanyaan di atas, sudah tercermin dalam segi apakah visi dan misi Fakultas Teknik ULM? Boleh memilih jawaban lebih dari satu!</strong></label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="segi_visi_misi[]" id="segi1" value="Kurikulum & Kompetensi Lulusan">
                <label class="form-check-label" for="segi1">Kurikulum & Kompetensi Lulusan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="segi_visi_misi[]" id="segi2" value="Proses Pembelajaran">
                <label class="form-check-label" for="segi2">Proses Pembelajaran</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="segi_visi_misi[]" id="segi3" value="Penelitian / Pengabdian">
                <label class="form-check-label" for="segi3">Penelitian / Pengabdian</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="segi_visi_misi[]" id="segi4" value="Kompetensi dosen / karyawan">
                <label class="form-check-label" for="segi4">Kompetensi dosen / karyawan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="segi_visi_misi[]" id="segi5" value="Tidak Ada">
                <label class="form-check-label" for="segi5">Tidak Ada</label>
            </div>
        </div>
        <div class="form-group text-right">
            <a href="<?= base_url('kuisioner/biodata') ?>" class="btn btn-secondary">Sebelumnya</a>
            <button type="submit" class="btn btn-primary">Lanjut</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('visimisiFormRadio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('visimisiForm').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('visimisiFormRadio', JSON.stringify(formData));
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('visimisiFormCheckbox')) || {};
        for (const [key, values] of Object.entries(formData)) {
            values.forEach(value => {
                const field = document.querySelector(`[id="${value}"]`);
                if (field && field.type === 'checkbox') {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('visimisiForm').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="checkbox"]').forEach(field => {
            if (!formData[field.name]) {
                formData[field.name] = [];
            }
            if (field.checked) {
                formData[field.name].push(field.id);
            }
        });
        localStorage.setItem('visimisiFormCheckbox', JSON.stringify(formData));
    });
</script>


<?= $this->endSection() ?>
            