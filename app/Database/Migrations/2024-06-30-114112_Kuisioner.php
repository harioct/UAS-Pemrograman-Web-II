<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKuisionerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],

            // Biodata
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '13',
            ],
            'program_studi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_handphone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'semester' => [
                'type' => 'INT',
            ],
            'tahun_akademik' => [
                'type' => 'VARCHAR',
                'constraint' => '9',
            ],
            'domisili' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            // Visi Misi
            'membaca_visi_misi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'sumber_visi_misi' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'sosialisasi_visi_misi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'pemahaman_visi_misi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'akomodasi_kegiatan_akademik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'segi_visi_misi' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],

            // Layanan Akademik - Keandalan
            'kejelasan_materi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketepatan_waktu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kelengkapan_referensi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kesesuaian_keahlian' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kemampuan_staf' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kualitas_layanan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kejelasan_pedoman' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // Layanan Akademik - Daya Tanggap
            'kepedulian' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kecepatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kecepatan_pelayanan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'sikap_pelayanan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // Layanan Akademik - Kepastian
            'permasalahan_akademik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'keramahan_staf' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'transparansi_penilaian' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'suasana_akademik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'penerapan_sanksi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // Layanan Akademik - Empati
            'kepedulian_memahami' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'proses_monitoring' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'kesedian_dosen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'minkat_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // Layanan Akademik - Tangible
            'kerapian_ruang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketersediaan_ruang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketersediaan_sarana' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketersediaan_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketersediaan_fasilitas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'ketersediaan_parkir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // Layanan Kemahasiswaan
            'tingkat_kepuasan_minkat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'tingkat_kepuasan_karir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'tingkat_kepuasan_konseling' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],
            
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('kuisioner');
    }

    public function down()
    {
        $this->forge->dropTable('kuisioner');
    }
}
