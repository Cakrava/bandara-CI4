<?php

namespace App\Controllers;

use App\pModels\model_maskapai;
class maskapai extends BaseController
{


   




    public function maskapai()
    {
        $session = session();
        $model = new model_maskapai();
        $data['maskapai']=$model->getmaskapai()->getResult();

        return view ('master/v_maskapai',$data);
    }


    public function save_maskapai()
    {
        // Ambil input dari form
        $id_maskapai = $this->request->getPost('id_maskapai');
        $nama_maskapai = $this->request->getPost('nama_maskapai');
        $logo = $this->request->getFile('logo');

        // Tentukan lokasi file yang akan diupload
        $path = 'gambar/logomaskapai';

        // Upload file
        $logo->move($path);

        // Masukkan data ke database
        $model = new Model_Maskapai();
        $model->sMaskapai([
            'id_maskapai' => $id_maskapai,
            'nama_maskapai' => $nama_maskapai,
            'logo' => $logo->getName()
        ]);
        
        return redirect()->to ('maskapai/maskapai');
    }

    public function delete_maskapai()
    {
        $model = new model_maskapai();
        $id_maskapai = $this->request->getPost('id_maskapai');
        $model->dmaskapai($id_maskapai);
        return redirect()->to('maskapai/maskapai');
        }





        public function update_maskapai(){
            $model=new model_maskapai();
            $logo =$this->request->getFile('logo');
            $id_maskapai =$this->request->getPost('id_maskapai');
            $path = 'public/gambar/logomaskapai';

            $data = array(
                'nama_maskapai' =>$this->request->getPost('nama_maskapai'),
              
              
        
            );
            
              
            $model->umaskapai($data,$id_maskapai);
            return redirect()->to('maskapai/maskapai');
        }



    
}
