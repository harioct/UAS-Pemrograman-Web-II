<?php namespace App\Controllers;

use App\Models\KuisionerModel;

class KuisionerController extends BaseController
{
    public function biodata()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/');
        }

        if ($this->request->getMethod() === 'post') {
            // Simpan data ke sesi
            $biodata = $this->request->getPost();
            session()->set('biodata', $biodata);
            log_message('debug', 'Biodata disimpan: ' . json_encode($biodata));
            return redirect()->to('kuisioner/visi_misi');
        }

        $data = [
            'title' => 'Biodata | Form Kuisioner'
        ];

        return view('kuisioner/biodata', $data);
    }

    public function visi_misi()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/');
        }

        if ($this->request->getMethod() === 'post') {
            $data = $this->request->getPost();
            $data['sumber_visi_misi'] = implode(', ', $this->request->getPost('sumber_visi_misi') ?? []);
            $data['segi_visi_misi'] = implode(', ', $this->request->getPost('segi_visi_misi') ?? []);
            session()->set('visi_misi', $data);
            log_message('debug', 'Visi Misi disimpan: ' . json_encode($data));
            return redirect()->to('kuisioner/layanan_akademik');
        }

        $data = [
            'title' => 'Visi Misi FT ULM | Form Kuisioner',
            'sessionData' => session()->get('visi_misi')
        ];

        return view('kuisioner/visi_misi', $data);
    }

    public function layanan_akademik()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/');
        }

        if ($this->request->getMethod() === 'post') {
            // Simpan data ke sesi
            $layanan_akademik = $this->request->getPost();
            session()->set('layanan_akademik', $layanan_akademik);
            log_message('debug', 'Layanan Akademik disimpan: ' . json_encode($layanan_akademik));
            return redirect()->to('kuisioner/layanan_kemahasiswaan');
        }

        $data = [
            'title' => 'Layanan Akademik | Form Kuisioner'
        ];

        return view('kuisioner/layanan_akademik', $data);
    }

    public function layanan_kemahasiswaan()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/');
        }

        if ($this->request->getMethod() === 'post') {
            // Simpan data ke sesi
            $layanan_kemahasiswaan = $this->request->getPost();
            session()->set('layanan_kemahasiswaan', $layanan_kemahasiswaan);
            log_message('debug', 'Layanan Kemahasiswaan disimpan: ' . json_encode($layanan_kemahasiswaan));
            return redirect()->to('kuisioner/submit');
        }

        $data = [
            'title' => 'Layanan Kemahasiswaan | Form Kuisioner'
        ];

        return view('kuisioner/layanan_kemahasiswaan', $data);
    }

    public function submit()
    {
        log_message('debug', 'Submit started');
        
        if (! $this->isLoggedIn()) {
            log_message('error', 'Unauthorized access attempt');
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Unauthorized'
            ])->setStatusCode(401);
        }

        log_message('debug', 'User is logged in');

        $biodata = session()->get('biodata') ?? [];
        $visi_misi = session()->get('visi_misi') ?? [];
        $layanan_akademik = session()->get('layanan_akademik') ?? [];
        $layanan_kemahasiswaan = $this->request->getPost() ?? [];

        log_message('debug', 'Biodata: ' . json_encode($biodata));
        log_message('debug', 'Visi Misi: ' . json_encode($visi_misi));
        log_message('debug', 'Layanan Akademik: ' . json_encode($layanan_akademik));
        log_message('debug', 'Layanan Kemahasiswaan: ' . json_encode($layanan_kemahasiswaan));

        if (empty($biodata) || empty($visi_misi) || empty($layanan_akademik) || empty($layanan_kemahasiswaan)) {
            log_message('error', 'Data tidak lengkap');
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data tidak lengkap. Silakan isi semua data kuisioner.'
            ])->setStatusCode(400);
        }

        $data = array_merge($biodata, $visi_misi, $layanan_akademik, $layanan_kemahasiswaan);

        log_message('debug', 'Data to be saved: ' . json_encode($data));

        $model = new KuisionerModel();
        if ($model->insertData($data)) {
            session()->remove(['biodata', 'visi_misi', 'layanan_akademik', 'layanan_kemahasiswaan']);
            log_message('info', 'Data berhasil disimpan');
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Data berhasil disimpan'
            ]);
        } else {
            log_message('error', 'Gagal menyimpan data ke database');
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Gagal menyimpan data ke database.'
            ])->setStatusCode(500);
        }
    }

    public function selesai()
    {
        $data = [
            'title' => 'Kuisioner Selesai | Form Kuisioner'
        ];

        return view('kuisioner/selesai', $data);
    }

    private function isLoggedIn() : bool
    {
        return session()->get('logged_in') === TRUE;
    }
}
