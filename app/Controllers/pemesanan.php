<?php

namespace App\Controllers;

use App\pModels\model_pemesanan;
use App\pModels\model_penumpang;
use App\pModels\model_pembatalan;

class pemesanan extends BaseController
{


    
    private $db;

    public function __construct()
    {
      $this->db = \Config\Database::connect();
    }
    
    public function pemesanan()
    {
        

        $data=[
            'validation' => \Config\Services::validation()
        ];

       
       {

        $model = new model_pemesanan();
        $data['datatampil']=$model->getTableTiket()->getResultArray();
        $data['penumpang']=$model->getPenumpang()->getResult();
        $data['maskapai']=$model->getMaskapai()->getResultArray();
        $data['bandara']=$model->getBandara()->getResult();
        echo view ('transaksi/v_pemesanan',$data);

       } 

     

    }



    public function save_pemesanan()
    {
        $model = new model_pemesanan();
        $model2 = new model_penumpang();
        $lastdata=$model->getLastdata()->getRowArray();
        if($lastdata){
            $pemesanan=$lastdata['id_pemesanan'];
            $pemesanan=$pemesanan+1;

        }
        else{
            $pemesanan=1;
        }
        $data=array(
            'id_pemesanan'=>$pemesanan,
            'tgl_pemesanan'=>$this->request->getVar('tgl_pemesanan'),
            'tgl_keberangkatan'=>$this->request->getVar('tgl_keberangkatan'),
            'id_penumpang'=>$this->request->getVar('id_penumpang'),
            'id_maskapai'=>$this->request->getVar('maskapai'),
            'nama_bandara_a'=>$this->request->getVar('nama_bandara_a'),
            'nama_bandara_t'=>$this->request->getVar('nama_bandara_t'),
            'kelas'=>$this->request->getVar('kelas'),
            'dewasa'=>$this->request->getVar('dewasa'),
            'anak'=>$this->request->getVar('anak'),
            'jadwal'=>$this->request->getVar('jadwal'),
            'jml_tiket'=>$this->request->getVar('jml_tiket'),
            'tarif'=>$this->request->getVar('tarif'),
            'total'=>$this->request->getVar('total'),
    
        );
        
      
        $model->savePemesanan($data);
  
        return redirect()->to('pemesanan/pemesanan');
    }















    public function save_pemessanan()
    {
        $model = new model_pemesanan();
        $model2 = new model_penumpang();
        $lastdata=$model->getLastdata()->getRowArray();
        if($lastdata){
            $pemesanan=$lastdata['id_pemesanan'];
            $tanggal=['dmY'];
            $pemesanan=$tanggal+$pemesanan+1;
    
        }
        else{
            $pemesanan=1;
        }
        $data=array(
            'id_pemesanan'=>$pemesanan,
            'tgl_pemesanan'=>$this->request->getVar('tgl_pemesanan'),
            'tgl_keberangkatan'=>$this->request->getVar('tgl_keberangkatan'),
            'id_penumpang'=>$this->request->getVar('id_penumpang'),
            'id_maskapai'=>$this->request->getVar('maskapai'),
            'nama_bandara_a'=>$this->request->getVar('nama_bandara_a'),
            'nama_bandara_t'=>$this->request->getVar('nama_bandara_t'),
            'kelas'=>$this->request->getVar('kelas'),
            'dewasa'=>$this->request->getVar('dewasa'),
            'anak'=>$this->request->getVar('anak'),
            'jadwal'=>$this->request->getVar('jadwal'),
            'jml_tiket'=>$this->request->getVar('jml_tiket'),
            'tarif'=>$this->request->getVar('tarif'),
            'total'=>$this->request->getVar('total'),
    
        );
        
        $data2=array(
            'id_penumpang'=>$this->request->getVar('id_penumpang'),
            'nama_penumpang'=>$this->request->getVar('nama_penumpang'),
            'no_penumpang'=>$this->request->getVar('no_penumpang'),
           
        );
    
        $query = $this->db->table('penumpang')->getWhere(['id_penumpang' => $data2['id_penumpang']])->getRowArray();
    
        if($query){
            $this->db->table('penumpang')->update(['nama_penumpang' => $data2['nama_penumpang'], 'no_penumpang' => $data2['no_penumpang']], ['id_penumpang' => $data2['id_penumpang']]);
        }else{
            $model2->spenumpang($data2);
        }
    
        $model->savePemesanan($data);
        return redirect()->to('pemesanan/pemesanan');
    }



    
    public function cetak_tiket($id)
    {
        $model = new model_pemesanan();
        $data['datatiket'] =$model->gettiket($id)->getRow();
        echo view ('transaksi/tiket',$data);
    }






    public function batalkan($id)
    {
        $model = new model_pemesanan();
        $data = $model->find($id);
        
        if ($data) {
            $data = [
                'id_pemesanan' => $data['id_pemesanan'],
                'tgl_pemesanan' => $data['tgl_pemesanan'],
                'tgl_keberangkatan' => $data['tgl_keberangkatan'],
                'id_penumpang' => $data['id_penumpang'],
                'id_maskapai' => $data['id_maskapai'],
                'nama_bandara_a' => $data['nama_bandara_a'],
                'nama_bandara_t' => $data['nama_bandara_t'],
                'kelas' => $data['kelas'],
                'dewasa' => $data['dewasa'],
                'anak' => $data['anak'],
                'jadwal' => $data['jadwal'],
                'tarif' => $data['tarif'],
                'total' => $data['total'],
                'jml_tiket' => $data['jml_tiket'],
                'nomor_kursi' => $data['nomor_kursi']
            ];
            
            $model = new model_pembatalan();
            $model->masuk($data);
  
            
            $model = new model_pemesanan();
            $model->delete($id);
            
            session()->setFlashdata('success', 'Data berhasil dibatalkan.');
        } else {
            session()->setFlashdata('error', 'Data tidak ditemukan.');
        }
        
        return redirect()->to('/pemesanan');
    }
}


