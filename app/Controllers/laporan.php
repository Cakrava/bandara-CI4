<?php

namespace App\Controllers;

use App\pModels\model_bandara;
use App\pModels\model_pemesanan;
use App\pModels\model_maskapai;
use App\pModels\model_laporan;
use App\pModels\model_penumpang;
use App\pModels\model_pesawat;

class laporan extends BaseController

{
    public function index(){


        $model = new model_maskapai();
        
        $data['maskapai'] = $model->getmaskapai()->getResultArray(); echo view('laporan/lap_pemesanan', $data);
        
    }        




    public function pembatalan(){


        $model = new model_maskapai();
        
        $data['maskapai'] = $model->getmaskapai()->getResultArray(); echo view('laporan/lap_pembatalan', $data);
        
    }        






    public function cetak_maskapai()

{

    $model = new model_maskapai ();
    $model4 = new model_laporan();
$id = $this->request->getVar('maskapai');
$logo = $this->request->getVar('maskapai');
$data['datamaskapai'] =$model4->get_laporan($id)->getResultArray();

// $data['poli'] = $model2->getPoliByid ($idpoli)->getRow();

echo view('laporan/cetak_pemesanan_maskapai', $data);


}


public function cetak_pembatalan()

{

    $model = new model_maskapai ();
    $model4 = new model_laporan();
$id = $this->request->getVar('maskapai');
$logo = $this->request->getVar('maskapai');
$data['datamaskapai'] =$model4->get_laporan_pembatalan($id)->getResultArray();

// $data['poli'] = $model2->getPoliByid ($idpoli)->getRow();

echo view('laporan/cetak_pembatalan', $data);


}



public function cetak_periode()
{
    $model = new model_maskapai();
    $model4 = new model_laporan();
  
    $tglAwal = $this->request->getVar('tglAwal');
    $tglAkhir = $this->request->getVar('tglAkhir');
    $data1 = [];
    $data['tglAwal'] = $tglAwal;
    $data['tglAkhir'] = $tglAkhir;
    $data['dataperiode'] =$model4->get_laporan_periode($tglAwal, $tglAkhir)->getResultArray();

    echo view('laporan/cetak_pemesanan_periode', $data,$data1);
}




public function cetak_pembatalan_periode()
{
    $model = new model_maskapai();
    $model4 = new model_laporan();
  
    $tglAwal = $this->request->getVar('tglAwal');
    $tglAkhir = $this->request->getVar('tglAkhir');

    $data1 = [];
$data['tglAwal'] = $tglAwal;
$data['tglAkhir'] = $tglAkhir;
    $data['dataperiode'] =$model4->get_laporan_pembatalan_periode($tglAwal, $tglAkhir)->getResultArray();

    echo view('laporan/cetak_pembatalan_periode', $data,$data1);
}












public function cetak_info_maskapai()
    {
       
        $model = new model_maskapai();
        $data['cetakmaskapai']=$model->getmaskapai()->getResultArray();

        return view ('laporan/cetak_lap_maskapai',$data);
    }


    
public function cetak_penumpang()
{
   
    $model = new model_penumpang();
    $data['cetakpenumpang']=$model->getpenumpang()->getResultArray();

    return view ('laporan/cetak_lap_penumpang',$data);
}



    
public function cetak_pesawat()
{
   
    $model = new model_pesawat();
    $data['cetakpesawat']=$model->getPesawat()->getResultArray();

    return view ('laporan/cetak_lap_pesawat',$data);
}


    
public function cetak_bandara()
{
   
    $model = new model_bandara();
    $data['cetakbandara']=$model->getbandara()->getResultArray();

    return view ('laporan/cetak_lap_bandara',$data);
}






    
}
