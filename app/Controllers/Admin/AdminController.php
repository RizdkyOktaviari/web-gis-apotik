<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ApotikModel;
use App\Models\UserModel;

class AdminController extends BaseController
{
    public function registerForm()
    {
        return view('admin\register');
    }

    public function loginForm()
    {
        return view('admin\login');
    }

    public function register()
    {
        $data = [];

        $validationRules = [
            'name'     => 'required',
            'username' => 'required|is_unique[tb_user.username]',
            'password' => 'required|min_length[5]',
        ];

        if ($this->request->getMethod() === 'post') {
            if ($this->validate($validationRules)) {
                $userData = [
                    'name'     => $this->request->getPost('name'),
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                ];

                $userModel = new UserModel();
                $userModel->insert($userData);

                return redirect()->to('/login')->with('success', 'Registration successful. You can now log in.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('admin/register', $data);
    }

    // public function login()
    // {
    //     $data = [];

    //     $validationRules = [
    //         'username' => 'required',
    //         'password' => 'required',
    //     ];

    //     if ($this->request->getMethod() === 'post') {
    //         if ($this->validate($validationRules)) {
    //             $username = $this->request->getPost('username');
    //             $password = $this->request->getPost('password');

    //             $userModel = new UserModel();
    //             $user = $userModel->where('username', $username)->first();

    //             if ($user && password_verify($password, $user['password'])) {
    //                 return redirect()->to('/dashboard')->with('success', 'Login successful.');
    //             } else {
    //                 $data['error'] = 'Invalid username or password.';
    //             }
    //         } else {
    //             $data['validation'] = $this->validator;
    //         }
    //     }

    //     return view('admin/login', $data);
    // }

    public function login()
    {
        $data = [];

        $validationRules = [
            'username' => 'required',
            'password' => 'required',
        ];

        if ($this->request->getMethod() === 'post') {
            if ($this->validate($validationRules)) {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $userModel = new UserModel();
                $user = $userModel->where('username', $username)->first();

                if ($user && password_verify($password, $user['password'])) {
                    // Menyimpan informasi pengguna dalam session
                    $session = session();
                    $sessionData = [
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        // Anda dapat menambahkan informasi pengguna lainnya yang diperlukan
                    ];
                    $session->set($sessionData);

                    return redirect()->to('/dashboard')->with('success', 'Login successful.');
                } else {
                    $data['error'] = 'Invalid username or password.';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('admin/login', $data);
    }


    public function dashboard()
    {
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('login')->with('error', 'You must login first.');
        }
        return view('admin\dashboard');
    }

    public function viewApotik()
    {
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('login')->with('error', 'You must login first.');
        }
        $apotikModel = new ApotikModel();

        $data['apotikData'] = $apotikModel->findAll();

        return view('admin\data_apotik', $data);
    }

    public function formApotik()
    {
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('login')->with('error', 'You must login first.');
        }
        return view('admin\tambah_apotik');
    }

    public function saveApotik()
    {
        $data = [];

        $validationRules = [
            'name'        => 'required',
            'contact'     => 'required',
            'description' => 'required',
            'latitude'    => 'required',
            'longitude'   => 'required',
            'address'     => 'required',
            'rating'      => 'required',
            'open_to_close' => 'required|differs[close_to_open]',
            'close_to_open' => 'required|differs[open_to_close]',
        ];

        if ($this->request->getMethod() === 'post') {
            if ($this->validate($validationRules)) {
                $apotikData = [
                    'name'        => $this->request->getPost('name'),
                    'contact'     => $this->request->getPost('contact'),
                    'description' => $this->request->getPost('description'),
                    'latitude'    => $this->request->getPost('latitude'),
                    'longitude'   => $this->request->getPost('longitude'),
                    'address'     => $this->request->getPost('address'),
                    'rating'      => $this->request->getPost('rating'),
                    'open_to_close' => $this->request->getPost('open_to_close'),
                    'close_to_open' => $this->request->getPost('close_to_open'),
                ];

                $apotikModel = new ApotikModel();
                $apotikModel->insert($apotikData);

                return redirect()->to('/data-apotik')->with('success', 'Apotik data added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return redirect()->back()->withInput()->with('error', 'Failed to add Apotik data. Please check your input.');
    }


    public function edit($id)
    {
        $session = session();
        if (!$session->has('user_id')) {
            return redirect()->to('login')->with('error', 'You must login first.');
        }
        $apotikModel = new ApotikModel();
        $apotik = $apotikModel->find($id);

        if ($apotik) {
            $data['apotik'] = $apotik;
            return view('admin\edit_apotik', $data);
        } else {
            return redirect()->to('/data-apotik')->with('error', 'Apotik not found');
        }
    }

    public function update($id)
    {
        $apotikModel = new ApotikModel();
    
        $postData = [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'description' => $this->request->getPost('description'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'address' => $this->request->getPost('address'),
            'rating' => $this->request->getPost('rating'),
            'open_to_close' => $this->request->getPost('open_to_close'),
            'close_to_open' => $this->request->getPost('close_to_open'),
        ];
    
        $apotikModel->update($id, $postData);
    
        return redirect()->to('/data-apotik')->with('success', 'Apotik updated successfully');
    }

    public function delete($id)
    {
        $apotikModel = new ApotikModel();
        $apotik = $apotikModel->find($id);

        if ($apotik) {
            $apotikModel->delete($id);
            return redirect()->to('/data-apotik')->with('success', 'Apotik deleted successfully');
        } else {
            return redirect()->to('/data-apotik')->with('error', 'Apotik not found');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('login')->with('success', 'Logout successful.');
    }
}
