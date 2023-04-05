<?php

namespace App\Controllers;

use App\pModels\model_bandara;
class bandara extends BaseController
{


   




    public function bandara()
    {
        $session = session();
        $model = new model_bandara();
        $data['bandara']=$model->getbandara()->getResult();

        return view ('master/v_bandara',$data);
    }


    public function save_bandara()
    {
        $model = new model_bandara();
        $data =array(
            'id_bandara' =>$this->request->getPost('id_bandara'),
            'kode_bandara' =>$this->request->getPost('kode_bandara'),
            
            'nama_bandara' =>$this->request->getPost('nama_bandara'),
            'lokasi_bandara' =>$this->request->getPost('lokasi_bandara'),
     
            
     
        );
        if (!$this ->validate([
            'id_bandara'=>[
                'rules' => 'required|is_unique[bandara.id_bandara]',
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
            $model->sbandara($data);
            return redirect()->to('bandara/bandara');
                    
                   
            }
            
    

    public function delete_bandara()
    {
        $model = new model_bandara();
        $id_bandara = $this->request->getPost('id_bandara');
        $model->dbandara($id_bandara);
        return redirect()->to('bandara/bandara');
        }


        public function update_bandara(){
            $model=new model_bandara();
            $id_bandara =$this->request->getPost('id_bandara');
            $data = array(
                'kode_bandara' =>$this->request->getPost('kode_bandara'),
                
                'nama_bandara' =>$this->request->getPost('nama_bandara'),
                'lokasi_bandara' =>$this->request->getPost('lokasi_bandara'),
         
                
        
            );
            $model->ubandara($data,$id_bandara);
            return redirect()->to('bandara/bandara');
        }
        









    }
