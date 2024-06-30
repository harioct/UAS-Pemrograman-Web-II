<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="text-center">Kuisioner Mahasiswa</h1>
    <p class="text-center">Isi kuisioner bagi mahasiswa aktif FT ULM untuk peningkatan kualitas dan evaluasi layanan FT ULM</p>
    <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Layanan Akademik</div>
    </div><br>
    <h5 class="text-center mb-3"><strong>Keandalan (Reliability)</strong></h5>
    <p class="text-center mb-4">Aspek Keandalan (Reliability) bertujuan untuk mengukur sejauh mana layanan akademik yang diberikan oleh Fakultas Teknik dapat diandalkan dan konsisten.</p><br>
    <form id="akademikForm" action="<?= base_url('kuisioner/layanan_kemahasiswaan') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kejelasan materi yang disampaikan oleh dosen</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_materi" id="kejelasan_materi4" value="Kurang" required>
                <label class="form-check-label" for="kejelasan_materi4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_materi" id="kejelasan_materi3" value="Cukup" required>
                <label class="form-check-label" for="kejelasan_materi3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_materi" id="kejelasan_materi2" value="Baik" required>
                <label class="form-check-label" for="kejelasan_materi2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_materi" id="kejelasan_materi1" value="Sangat Baik" required>
                <label class="form-check-label" for="kejelasan_materi1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Ketepatan waktu pelaksanaan perkuliahan</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketepatan_waktu" id="ketepatan_waktu4" value="Kurang" required>
                <label class="form-check-label" for="ketepatan_waktu4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketepatan_waktu" id="ketepatan_waktu3" value="Cukup" required>
                <label class="form-check-label" for="ketepatan_waktu3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketepatan_waktu" id="ketepatan_waktu2" value="Baik" required>
                <label class="form-check-label" for="ketepatan_waktu2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketepatan_waktu" id="ketepatan_waktu1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketepatan_waktu1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kelengkapan referensi untuk pembelajaran (handout, buku, modul, ppt, dll)</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kelengkapan_referensi" id="kelengkapan_referensi4" value="Kurang" required>
                <label class="form-check-label" for="kelengkapan_referensi4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kelengkapan_referensi" id="kelengkapan_referensi3" value="Cukup" required>
                <label class="form-check-label" for="kelengkapan_referensi3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kelengkapan_referensi" id="kelengkapan_referensi2" value="Baik" required>
                <label class="form-check-label" for="kelengkapan_referensi2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kelengkapan_referensi" id="kelengkapan_referensi1" value="Sangat Baik" required>
                <label class="form-check-label" for="kelengkapan_referensi1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Kesesuaian keahlian dosen mengajar sesuai bidang keahliannya</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesesuaian_keahlian" id="kesesuaian_keahlian4" value="Kurang" required>
                <label class="form-check-label" for="kesesuaian_keahlian4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesesuaian_keahlian" id="kesesuaian_keahlian3" value="Cukup" required>
                <label class="form-check-label" for="kesesuaian_keahlian3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesesuaian_keahlian" id="kesesuaian_keahlian2" value="Baik" required>
                <label class="form-check-label" for="kesesuaian_keahlian2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesesuaian_keahlian" id="kesesuaian_keahlian1" value="Sangat Baik" required>
                <label class="form-check-label" for="kesesuaian_keahlian1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kemampuan staf akademik untuk melayani administrasi kemahasiswaan</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kemampuan_staf" id="kemampuan_staf4" value="Kurang" required>
                <label class="form-check-label" for="kemampuan_staf4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kemampuan_staf" id="kemampuan_staf3" value="Cukup" required>
                <label class="form-check-label" for="kemampuan_staf3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kemampuan_staf" id="kemampuan_staf2" value="Baik" required>
                <label class="form-check-label" for="kemampuan_staf2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kemampuan_staf" id="kemampuan_staf1" value="Sangat Baik" required>
                <label class="form-check-label" for="kemampuan_staf1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Kualitas layanan staf akademik untuk memenuhi kepentingan mahasiswa</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kualitas_layanan" id="kualitas_layanan4" value="Kurang" required>
                <label class="form-check-label" for="kualitas_layanan4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kualitas_layanan" id="kualitas_layanan3" value="Cukup" required>
                <label class="form-check-label" for="kemampuan_staf3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kualitas_layanan" id="kualitas_layanan2" value="Baik" required>
                <label class="form-check-label" for="kualitas_layanan2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kualitas_layanan" id="kualitas_layanan1" value="Sangat Baik" required>
                <label class="form-check-label" for="kualitas_layanan1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kejelasan pedoman [kurikulum dan akademik]</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_pedoman" id="kejelasan_pedoman4" value="Kurang" required>
                <label class="form-check-label" for="kemampuan_staf4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_pedoman" id="kejelasan_pedoman3" value="Cukup" required>
                <label class="form-check-label" for="kejelasan_pedoman3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_pedoman" id="kejelasan_pedoman2" value="Baik" required>
                <label class="form-check-label" for="kejelasan_pedoman2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kejelasan_pedoman" id="kejelasan_pedoman1" value="Sangat Baik" required>
                <label class="form-check-label" for="kejelasan_pedoman1">Sangat Baik</label>
            </div>
        </div>
    </form><br>
    <h5 class="text-center mb-3"><strong>Daya Tanggap (Responsiveness)</strong></h5>
    <p class="text-center mb-4">Aspek Daya Tanggap (Responsiveness) bertujuan untuk mengukur sejauh mana layanan akademik yang diberikan oleh Fakultas Teknik responsif terhadap kebutuhan dan permintaan mahasiswa.</p><br>
    <form id="akademikForm2" action="<?= base_url('kuisioner/layanan_kemahasiswaan') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kepedulian dosen dan staf dalam memahami kepentingan dan kesulitan mahasiswa</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian" id="kepedulian4" value="Kurang" required>
                <label class="form-check-label" for="kepedulian4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian" id="kepedulian3" value="Cukup" required>
                <label class="form-check-label" for="kepedulian3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian" id="kepedulian2" value="Baik" required>
                <label class="form-check-label" for="kepedulian2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian" id="kepedulian1" value="Sangat Baik" required>
                <label class="form-check-label" for="kepedulian1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Kecepatan dosen dan karyawan dalam menanggapi keluhan mahasiswa</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan" id="kecepatan4" value="Kurang" required>
                <label class="form-check-label" for="kecepatan4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan" id="kecepatan3" value="Cukup" required>
                <label class="form-check-label" for="kecepatan3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan" id="kecepatan2" value="Baik" required>
                <label class="form-check-label" for="ketepatan_waktu2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan" id="kecepatan1" value="Sangat Baik" required>
                <label class="form-check-label" for="kecepatan1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kecepatan dalam memberikan pelayanan</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan_pelayanan" id="kecepatan_pelayanan4" value="Kurang" required>
                <label class="form-check-label" for="kecepatan_pelayanan4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan_pelayanan" id="kecepatan_pelayanan3" value="Cukup" required>
                <label class="form-check-label" for="kelengkapan_referensi3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan_pelayanan" id="kecepatan_pelayanan2" value="Baik" required>
                <label class="form-check-label" for="kecepatan_pelayanan2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kecepatan_pelayanan" id="kecepatan_pelayanan1" value="Sangat Baik" required>
                <label class="form-check-label" for="kecepatan_pelayanan1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Sikap profesionalisme dalam memberikan pelayanan</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="sikap_pelayanan" id="sikap_pelayanan4" value="Kurang" required>
                <label class="form-check-label" for="sikap_pelayanan4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="sikap_pelayanan" id="sikap_pelayanan3" value="Cukup" required>
                <label class="form-check-label" for="sikap_referensi3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="sikap_pelayanan" id="sikap_pelayanan2" value="Baik" required>
                <label class="form-check-label" for="sikap_pelayanan2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="sikap_pelayanan" id="sikap_pelayanan1" value="Sangat Baik" required>
                <label class="form-check-label" for="sikap_pelayanan1">Sangat Baik</label>
            </div>
        </div>
    </form><br>
    <h5 class="text-center mb-3"><strong>Kepastian (Assurance)</strong></h5>
    <p class="text-center mb-4">Aspek Kepastian (Assurance) bertujuan untuk mengukur tingkat keyakinan dan rasa aman yang dirasakan oleh mahasiswa terkait dengan kompetensi dan kredibilitas staf akademik.</p><br>
    <form id="akademikForm3" action="<?= base_url('kuisioner/layanan_kemahasiswaan') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Permasalahan akademik dikonsultasikan dan ditangani oleh dosen pembimbing akademik</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="permasalahan_akademik" id="permasalahan_akademik4" value="Kurang" required>
                <label class="form-check-label" for="permasalahan_akademik4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="permasalahan_akademik" id="permasalahan_akademik3" value="Cukup" required>
                <label class="form-check-label" for="permasalahan_akademik3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="permasalahan_akademik" id="permasalahan_akademik2" value="Baik" required>
                <label class="form-check-label" for="permasalahan_akademik2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="permasalahan_akademik" id="permasalahan_akademik1" value="Sangat Baik" required>
                <label class="form-check-label" for="permasalahan_akademik1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Keramahan dan kesopanan staf akademik dalam memberikan pelayanan</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="keramahan_staf" id="keramahan_staf4" value="Kurang" required>
                <label class="form-check-label" for="keramahan_staf4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="keramahan_staf" id="keramahan_staf3" value="Cukup" required>
                <label class="form-check-label" for="keramahan_staf3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="keramahan_staf" id="keramahan_staf2" value="Baik" required>
                <label class="form-check-label" for="keramahan_staf2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="keramahan_staf" id="keramahan_staf1" value="Sangat Baik" required>
                <label class="form-check-label" for="keramahan_staf1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Transparansi dan keterukuran sistem penilaian</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="transparansi_penilaian" id="transparansi_penilaian4" value="Kurang" required>
                <label class="form-check-label" for="transparansi_penilaian4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="transparansi_penilaian" id="transparansi_penilaian3" value="Cukup" required>
                <label class="form-check-label" for="transparansi_penilaian3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="transparansi_penilaian" id="transparansi_penilaian2" value="Baik" required>
                <label class="form-check-label" for="kecepatan_pelayanan2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="transparansi_penilaian" id="transparansi_penilaian1" value="Sangat Baik" required>
                <label class="form-check-label" for="transparansi_penilaian1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Suasana akademik</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="suasana_akademik" id="suasana_akademik4" value="Kurang" required>
                <label class="form-check-label" for="suasana_akademik4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="suasana_akademik" id="suasana_akademik3" value="Cukup" required>
                <label class="form-check-label" for="suasana_akademik3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="suasana_akademik" id="suasana_akademik2" value="Baik" required>
                <label class="form-check-label" for="suasana_akademik2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="suasana_akademik" id="suasana_akademik1" value="Sangat Baik" required>
                <label class="form-check-label" for="suasana_akademik1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Penerapan sanksi bagi mahasiswa yang melanggar peraturan yang telah ditetapkan dan <br> berlaku untuk semua mahasiswa tampa terkecuali</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="penerapan_sanksi" id="penerapan_sanksi4" value="Kurang" required>
                <label class="form-check-label" for="penerapan_sanksi4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="penerapan_sanksi" id="penerapan_sanksi3" value="Cukup" required>
                <label class="form-check-label" for="penerapan_sanksi3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="penerapan_sanksi" id="penerapan_sanksi2" value="Baik" required>
                <label class="form-check-label" for="penerapan_sanksi2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="penerapan_sanksi" id="penerapan_sanksi1" value="Sangat Baik" required>
                <label class="form-check-label" for="penerapan_sanksi1">Sangat Baik</label>
            </div>
        </div>
    </form><br>
    <h5 class="text-center mb-3"><strong>Empati (Empathy)</strong></h5>
    <p class="text-center mb-4">Aspek Empati (Empathy) bertujuan untuk mengukur kemampuan Dosen dan stafnya untuk memahami dan merespons kebutuhan, minat bakat, dan keadaan individu mahasiswa.</p><br>
    <form id="akademikForm4" action="<?= base_url('kuisioner/layanan_kemahasiswaan') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kepedulian dosen dan staf dalam memahami kepentingan dan kesulitan mahasiswa</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian_memahami" id="kepedulian_memahami4" value="Kurang" required>
                <label class="form-check-label" for="kepedulian_memahami4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian_memahami" id="kepedulian_memahami3" value="Cukup" required>
                <label class="form-check-label" for="kepedulian_memahami3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian_memahami" id="kepedulian_memahami2" value="Baik" required>
                <label class="form-check-label" for="kepedulian_memahami2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kepedulian_memahami" id="kepedulian_memahami1" value="Sangat Baik" required>
                <label class="form-check-label" for="kepedulian_memahami1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Proses monitoring terhadap kemajuan mahasiswa melalui dosen pembimbing akademik</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="proses_monitoring" id="proses_monitoring4" value="Kurang" required>
                <label class="form-check-label" for="proses_monitoring4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="proses_monitoring" id="proses_monitoring3" value="Cukup" required>
                <label class="form-check-label" for="proses_monitoring3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="proses_monitoring" id="proses_monitoring2" value="Baik" required>
                <label class="form-check-label" for="proses_monitoring2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="proses_monitoring" id="proses_monitoring1" value="Sangat Baik" required>
                <label class="form-check-label" for="proses_monitoring1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kesediaan dosen dalam membantu mahasiswa yang mengalami kesulitan bidang <br> akademik/mata kuliah</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesediaan_dosen" id="kesediaan_dosen4" value="Kurang" required>
                <label class="form-check-label" for="kesediaan_dosen4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesediaan_dosen" id="kesediaan_dosen3" value="Cukup" required>
                <label class="form-check-label" for="kesediaan_dosen3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesediaan_dosen" id="kesediaan_dosen2" value="Baik" required>
                <label class="form-check-label" for="kesediaan_dosen2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kesediaan_dosen" id="kesediaan_dosen1" value="Sangat Baik" required>
                <label class="form-check-label" for="kesediaan_dosen1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Fakultas berusaha memahami minat dan bakat mahasiswa dan berusaha mengembangkannya</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="minkat_mahasiswa" id="minkat_mahasiswa4" value="Kurang" required>
                <label class="form-check-label" for="minkat_mahasiswa4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="minkat_mahasiswa" id="minkat_mahasiswa3" value="Cukup" required>
                <label class="form-check-label" for="minkat_mahasiswa3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="minkat_mahasiswa" id="minkat_mahasiswa2" value="Baik" required>
                <label class="form-check-label" for="minkat_mahasiswa2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="minkat_mahasiswa" id="minkat_mahasiswa1" value="Sangat Baik" required>
                <label class="form-check-label" for="minkat_mahasiswa1">Sangat Baik</label>
            </div>
        </div>
    </form><br>
    <h5 class="text-center mb-3"><strong>Tangible (Keberwujudan sarana prasarana)</strong></h5>
    <p class="text-center mb-4">Aspek Tangible (Keberwujudan sarana prasarana) bertujuan untuk mengukur kepuasan mahasiswa terhadap kualitas dan kondisi sarana prasarana yang disediakan oleh Fakultas Teknik.</p><br>
    <form id="akademikForm5" action="<?= base_url('kuisioner/layanan_kemahasiswaan') ?>" method="post">
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Kerapian dan kebersihan ruang kuliah</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kerapian_ruang" id="kerapian_ruang4" value="Kurang" required>
                <label class="form-check-label" for="kerapian_ruang4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kerapian_ruang" id="kerapian_ruang3" value="Cukup" required>
                <label class="form-check-label" for="kerapian_ruang3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kerapian_ruang" id="kerapian_ruang2" value="Baik" required>
                <label class="form-check-label" for="kejelesan_materi2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="kerapian_ruang" id="kerapian_ruang1" value="Sangat Baik" required>
                <label class="form-check-label" for="kerapian_ruang1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Ketersediaan ruang kuliah/studio/laboratorium</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_ruang" id="ketersediaan_ruang4" value="Kurang" required>
                <label class="form-check-label" for="ketersediaan_ruang4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_ruang" id="ketersediaan_ruang3" value="Cukup" required>
                <label class="form-check-label" for="ketersediaan_ruang3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_ruang" id="ketersediaan_ruang2" value="Baik" required>
                <label class="form-check-label" for="ketersediaan_ruang2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_ruang" id="ketersediaan_ruang1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketersediaan_ruang1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Ketersediaan sarana pembelajaran di ruang kuliah (lcd, papan tulis, kursi, meja, dll)</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_sarana" id="ketersediaan_sarana4" value="Kurang" required>
                <label class="form-check-label" for="ketersediaan_sarana4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_sarana" id="ketersediaan_sarana3" value="Cukup" required>
                <label class="form-check-label" for="ketersediaan_sarana3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_sarana" id="ketersediaan_sarana2" value="Baik" required>
                <label class="form-check-label" for="ketersediaan_sarana2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_sarana" id="ketersediaan_sarana1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketersediaan_sarana1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Ketersediaan buku referensi yang ada diperpustakaan/ruang baca</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_buku" id="ketersediaan_buku4" value="Kurang" required>
                <label class="form-check-label" for="ketersediaan_buku4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_buku" id="ketersediaan_buku3" value="Cukup" required>
                <label class="form-check-label" for="ketersediaan_buku3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_buku" id="ketersediaan_buku2" value="Baik" required>
                <label class="form-check-label" for="ketersediaan_buku2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_buku" id="ketersediaan_buku1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketersediaan_buku1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3" style="background-color: #F0EEEE;">
            <label><strong>Ketersediaan fasilitas ibadah, kamar kecil yang rapi dan bersih</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_fasilitas" id="ketersediaan_fasilitas4" value="Kurang" required>
                <label class="form-check-label" for="ketersediaan_fasilitas4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_fasilitas" id="ketersediaan_fasilitas3" value="Cukup" required>
                <label class="form-check-label" for="ketersediaan_fasilitas3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_fasilitas" id="ketersediaan_fasilitas2" value="Baik" required>
                <label class="form-check-label" for="ketersediaan_fasilitas2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_fasilitas" id="ketersediaan_fasilitas1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketersediaan_fasilitas1">Sangat Baik</label>
            </div>
        </div>
        <div class="form-group mb-3 bg-white">
            <label><strong>Ketersediaan tempat parkir yang luas</strong></label>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_parkir" id="ketersediaan_parkir4" value="Kurang" required>
                <label class="form-check-label" for="ketersediaan_parkir4">Kurang</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_parkir" id="ketersediaan_parkir3" value="Cukup" required>
                <label class="form-check-label" for="ketersediaan_parkir3">Cukup</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_parkir" id="ketersediaan_parkir2" value="Baik" required>
                <label class="form-check-label" for="ketersediaan_parkir2">Baik</label>
            </div>
            <div class="form-check form-check-inline float-right">
                <input class="form-check-input" type="radio" name="ketersediaan_parkir" id="ketersediaan_parkir1" value="Sangat Baik" required>
                <label class="form-check-label" for="ketersediaan_parkir1">Sangat Baik</label>
            </div>
        </div><br>
        <div class="form-group text-right">
            <a href="<?= base_url('kuisioner/visi_misi') ?>" class="btn btn-secondary">Sebelumnya</a>
            <button type="submit" class="btn btn-primary">Lanjut</button>
        </div>
    </form><br>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('akademikFormRadio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('akademikForm').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('akademikFormRadio', JSON.stringify(formData));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('akademikForm2Radio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('akademikForm2').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('akademikForm2Radio', JSON.stringify(formData));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('akademikForm3Radio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('akademikForm3').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('akademikForm3Radio', JSON.stringify(formData));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('akademikForm4Radio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('akademikForm4').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('akademikForm4Radio', JSON.stringify(formData));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formData = JSON.parse(localStorage.getItem('akademikForm5Radio')) || {};
        for (const [key, value] of Object.entries(formData)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            fields.forEach(field => {
                if (field.type === 'radio' && field.value === value) {
                    field.checked = true;
                }
            });
        }
    });

    document.getElementById('akademikForm5').addEventListener('input', function() {
        const formData = {};
        this.querySelectorAll('input[type="radio"]').forEach(field => {
            if (field.checked) {
                formData[field.name] = field.value;
            }
        });
        localStorage.setItem('akademikForm5Radio', JSON.stringify(formData));
    });
</script>
<?= $this->endSection() ?>