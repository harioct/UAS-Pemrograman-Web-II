<?php

namespace App\Models;

use CodeIgniter\Model;

class KuisionerModel extends Model
{
    protected $table = 'kuisioner';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap', 'nim', 'program_studi', 'no_handphone', 'semester', 'tahun_akademik', 'domisili',
        'membaca_visi_misi', 'sumber_visi_misi', 'sosialisasi_visi_misi', 'pemahaman_visi_misi',
        'akomodasi_kegiatan_akademik', 'segi_visi_misi', 'kejelasan_materi', 'ketepatan_waktu',
        'kelengkapan_referensi', 'kesesuaian_keahlian', 'kemampuan_staf', 'kualitas_layanan', 'kejelasan_pedoman',
        'kepedulian', 'kecepatan', 'kecepatan_pelayanan', 'sikap_pelayanan', 'permasalahan_akademik', 'keramahan_staf',
        'transparansi_penilaian', 'suasana_akademik', 'penerapan_sanksi', "kepedulian_memahami", 'proses_monitoring',
        'kesediaan_dosen', 'minkat_mahasiswa', 'kerapian_ruang', 'ketersediaan_ruang', 'ketersediaan_sarana',
        'ketersediaan_buku', 'ketersediaan_fasilitas', 'ketersediaan_parkir', 'tingkat_kepuasan_minkat', 'tingkat_kepuasan_karir',
        'tingkat_kepuasan_konseling',
        'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    public function insertData($data)
    {
        if (!$this->insert($data)) {
            log_message('error', 'Insert Data Error: ' . json_encode($this->errors()));
            return false;
        }
        return true;
    }
}
