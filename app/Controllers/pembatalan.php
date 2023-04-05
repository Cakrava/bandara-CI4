<?php

namespace App\Controllers;

use App\pModels\model_pembatalan;
use App\pModels\model_penumpang;

class pembatalan extends BaseController
{


    
    
    
    public function index()
    {

        $data=[
            'validation' => \Config\Services::validation()
        ];

       
       {

        $model = new model_pembatalan();
        $data['datatampil']=$model->getTableTiket()->getResultArray();
        $data['pemesanan']=$model->getPemesanan()->getResult();
   
        echo view ('transaksi/v_pembatalan',$data);

       } 

     

    }



    public function save_pembatalan()
    {
        $model = new model_pembatalan();
        $lastdata=$model->getLastdata()->getRowArray();
        if($lastdata){
            $pembatalan=$lastdata['id_pembatalan'];
            $pembatalan=$pembatalan+1;

        }
        else{
            $pembatalan=1;
        }
        $data=array(
            'id_pembatalan'=>$pembatalan,
            'id_pemesanan'=>$this->request->getVar('id'),
        );
        
        $model->savePembatalan($data);
    
        return redirect()->to('pembatalan/');
    }



}