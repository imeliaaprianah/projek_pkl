<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\PenggunaM;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    protected $akun;

    public function __construct()
    {
        $this->akun = new PenggunaM();
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->akun->getLogin($username);

        $validate = $this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ]
        ]);


        if ($validate) {
            // var_dump($hashedPassword = password_hash("12345", PASSWORD_DEFAULT));
            // echo "<br>";
            // var_dump($user['password']);
            // exit;
            if ($user && password_verify($password, $user['password'])) {
                // var_dump('a');
                // exit;
                session()->set('isLogin', true);
                session()->set('id_akun', $user['id_akun']);
                session()->set('username', $user['username']);
                session()->set('password', $user['password']);
                session()->set('level', $user['level']);

                session()->setFlashdata('welcome_message', 'Selamat datang, ' . $user['username'] . '!');

                if ($user['level'] == 'admin') {
                    return redirect()->to(base_url('dashboard-admin'));
                } elseif ($user['level'] == 'karyawan') {
                    return redirect()->to(base_url('dashboard-k'));
                } elseif ($user['level'] == 'manager') {
                    return redirect()->to(base_url('dashboard-m'));
                } else {
                    return redirect()->to(base_url('login'))->with('pesan', 'Level pengguna tidak dikenali.');
                }
            } else {
                // var_dump('b');
                // exit;
                session()->setFlashdata('pesan', 'Username atau password salah.');
                return redirect()->back()->withInput();
            }
        } else {
            return redirect()->back()->withInput()->with('pesan', 'Username dan Password Tidak Boleh Kosong');
        }
    }

    public function logout()
    {
        session()->remove('isLogin');
        session()->remove('id_akun');
        session()->remove('username');
        session()->remove('password');
        session()->remove('level');
        return redirect()->to('/');
    }
}
