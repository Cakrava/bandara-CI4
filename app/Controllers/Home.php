<?php

namespace App\Controllers;
use App\pModels\model_akun;
use App\pModels\model_nama_pesawat;
use App\pModels\model_pesawat;
use App\pModels\model_pemesanan;
use App\pModels\model_pembatalan;
use App\pModels\model_maskapai;
use App\pModels\model_penumpang;
class Home extends BaseController
{



 


    public function index()
    {
        helper(['form']);
        $data=[
            'validation' => \Config\Services::validation()
        ];
        echo view('register/login', $data);
    }

    public function homapage()
    {
        $model = new model_pemesanan();
        $model2 = new model_pembatalan ();
        $model3 = new model_maskapai();
        $model4 = new model_penumpang ();

             $data['count'] = $model->getCount();
             $batal['batal'] = $model2->getCount();
             $penumpang['penumpang'] = $model4->getCount();
             $maskapai['maskapai'] = $model3->getCount();

        $users = session()->get('users');

        // Tampilkan halaman home
        return view('layout/homepage', ['users' => $users, 'data' => $data, 'batal' => $batal, 'penumpang' => $penumpang, 'maskapai' => $maskapai]);
   
        
    }

  
    public function profil()
    {
        echo view('register/profil');
    }

  
    public function ceklogin()
    {
        $session = session();
        $model = new model_akun();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $model->cek_login($username);
        if($cek)
        {
            $pass = $cek['password'];
            $veryfi = password_verify($password,$pass);
            if($veryfi)
            {
                session()->set('foto',$cek['foto']);
                session()->set('username',$cek['username']);
                session()->set('hak',$cek['hak']);
                return redirect()->to('Home/homapage');
            } else {
                $session->setFlashdata('msg','Password Salah');
                return redirect()->to('/home');
            }
            } else {
                $session->setFlashdata('msg','User Tidak Di Temukan');
                return redirect()->to('/home');
            }
        }
public function logout(){
    $session = session();
    $session->destroy();
    return redirect()->to('/home');
}


//untuk registrasi
public function saveakun()
{
    $file = $this->request->getFile('foto');
    $newName = $this->request->getVar('username');
    
    $rules =  [
        'email' => 'required|valid_email|is_unique[users.email]',
        'username' => 'required|min_length[3]',
        'password' => 'required|min_length[4]',
        'confirmpassword'=> 'matches[password]'
    ];

    $file->move(ROOTPATH . '/public/foto_user/', $newName.'.jpg');


    if (!$file->hasMoved()) {
        throw new \RuntimeException($file->getErrorString());
    }

    if ($this ->validate($rules)) {
        $model = new model_akun();
        $data = [
            'email' =>$this->request->getVar('email'),
            'username' => $newName,
            'hak' =>$this->request->getVar('hak'),
            'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
            'foto' => $newName.'.jpg'
        ];
        $model->saveregis($data);
        return redirect()->to('/home');
       }else{
           $data['validation'] = $this->validator;
           echo view('register/login', $data);
       }
}

//ini homepage


public function keluar()
{
    // Hapus semua data yang disimpan di session
    session()->destroy();

    // Redirect ke halaman login
    return redirect()->to('home');
}




    public function pesawat()
    {
        $session = session();
        $model = new model_pesawat();
        $data['pesawat']=$model->getPesawat()->getResult();

        return view ('master/v_pesawat',$data);
    }


    public function save_pesawat()
    {
        $model = new model_pesawat();
        $data =array(
            'id_pesawat' =>$this->request->getPost('id_pesawat'),
            'no_pesawat' =>$this->request->getPost('no_pesawat'),
            
            'nama_pesawat' =>$this->request->getPost('nama_pesawat'),
            'jenis_pesawat' =>$this->request->getPost('jenis_pesawat'),
            'jml_kursi' =>$this->request->getPost('jml_kursi'),
            'tarif_pesawat' =>$this->request->getPost('tarif_pesawat')
        );
        if (!$this ->validate([
            'id_pesawat'=>[
                'rules' => 'required|is_unique[pesawat.id_pesawat]',
                'error' => [
                    'required'=>'{field}Mohon Isi ID Pasien',
                    'is_unique'=>'{field}ID Pasien Sudah Ada'
            
                ]
                ]
                    
            ])){
                session()->setFlashdata('error',$this->validator->listErrors());
                return redirect()->back()->withInput();
            }else{
               
                print_r($this->request->getVar());
            }
            $model->sPesawat($data);
            return redirect()->to('Home/pesawat');
                    
                   
            }
            
    

    public function delete_pesawat()
    {
        $model = new model_pesawat();
        $id_pesawat = $this->request->getPost('id_pesawat');
        $model->dPesawat($id_pesawat);
        return redirect()->to('Home/pesawat');
        }


        public function update_pesawat(){
            $model=new model_pesawat();
            $id_pesawat =$this->request->getPost('id_pesawat');
            $data = array(
                'no_pesawat' =>$this->request->getPost('no_pesawat'),
                
                'nama_pesawat' =>$this->request->getPost('nama_pesawat'),
                'jenis_pesawat' =>$this->request->getPost('jenis_pesawat'),
                'jml_kursi' =>$this->request->getPost('jml_kursi'),
                'tarif_pesawat' =>$this->request->getPost('tarif_pesawat')
        
            );
            $model->uPesawat($data,$id_pesawat);
            return redirect()->to('Home/pesawat');
        }
        




















        public function buka()
        {
            // Ambil data pengguna dari session
            $user = session()->get('user');
    
            // Jika pengguna tidak ditemukan, tampilkan pesan error
            if (!$user) {
                session()->setFlashdata('error', 'User tidak ditemukan');
                return redirect()->to('home/homapage');
            }
    
            // Ambil input dari form
            $nama = $this->request->getPost('nama');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $image = $this->request->getFile('image');
    
            // Validasi input
            if (empty($nama) || empty($username) || empty($email)) {
                // Tampilkan pesan error
                session()->setFlashdata('error', 'Nama, username, dan email harus diisi');
                return redirect()->to('/profile');
            }
    
            // Persiapkan data untuk disimpan ke database
            $data = [
                'nama' => $nama,
                'username' => $username,
                'email' => $email,
            ];
    
            // Jika ada gambar yang diupload
            if ($image->getError() == 4) {
                // Tidak ada gambar yang diupload, gunakan gambar yang sudah ada
                $data['image'] = $user->image;
            } else {
                // Ada gambar yang diupload, simpan gambar ke folder public/images
                $path = ROOTPATH . 'public/images';
                $image->move($path, $image->getRandomName());
                $data['image'] = $image->getRandomName();

                $model = new model_akun();
                $model->update($user->id, $data);
        
                // Update data pengguna di session
                session()->set('user', (object) $data);
        
                // Tampilkan pesan sukses
                session()->setFlashdata('success', 'Profil berhasil diperbarui');
                return redirect()->to('/profile');
            }
        }

    }
