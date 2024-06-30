<?php namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('dashboard'));
        }

        $data = [
            'title' => 'Login | Form Kuisioner'
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        $data = $this->request->getPost(['username', 'password']);

        if (! $this->validate([
            'username' => 'required|exact_length[13]|numeric',
            'password' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $credentials = ['username' => $username];

        $user = $this->model->where($credentials)->first();

        if (! $user) {
            session()->setFlashdata('error', 'Username atau password Anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'Username atau password Anda salah.');
            return redirect()->back();
        }

        $userData = [
            'name' => $user['name'],
            'username' => $user['username'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('dashboard'));
    }

    private function isLoggedIn(): bool
    {
        return session()->get('logged_in') === TRUE;
    }
}
