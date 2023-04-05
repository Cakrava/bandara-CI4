<?php

namespace App\Controllers;

use App\pModels\model_penumpang;
class penumpang extends BaseController
{


   










        







    public function penumpang()
    {
        $session = session();
        $model = new model_penumpang();
        $data['penumpang']=$model->getpenumpang()->getResult();

        return view ('master/v_penumpang',$data);
    }


    public function save_penumpang()
    {
        $model = new model_penumpang();
        $data =array(
            'id_penumpang' =>$this->request->getPost('id_penumpang'),
          
            'nama_penumpang' =>$this->request->getPost('nama_penumpang'),
            'no_penumpang' =>$this->request->getPost('no_penumpang'),
     
            
     
        );
        if (!$this ->validate([
            'id_penumpang'=>[
                'rules' => 'required',
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
            $model->spenumpang($data);
            return redirect()->to('penumpang/penumpang');
                    
                   
            }
            
    

    public function delete_penumpang()
    {
        $model = new model_penumpang();
        $id_penumpang = $this->request->getPost('id_penumpang');
        $model->dpenumpang($id_penumpang);
        return redirect()->to('penumpang/penumpang');
        }


        public function update_penumpang(){
            $model=new model_penumpang();
            $id_penumpang =$this->request->getPost('id_penumpang');
            $data = array(
           
                'nama_penumpang' =>$this->request->getPost('nama_penumpang'),
                'no_penumpang' =>$this->request->getPost('no_penumpang'),
         
                
        
            );
            $model->upenumpang($data,$id_penumpang);
            return redirect()->to('penumpang/penumpang');
        }
        







    }
