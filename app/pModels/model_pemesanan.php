<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_pemesanan extends Model
{
 


    
    protected $table = 'pemesanan';
    protected $primaryKey = 'id';

    public function getCount()
    {
        return $this->countAllResults();
    }


  

    public function getLastdata()
    {
        return $this->db
        ->table('pemesanan')
        ->where('tgl_pemesanan',date('Y-m-d'))
        ->orderBy('id', 'desc')
        ->limit(0, 1)
        ->get();
    }
        public function getDataViewAntrian($idPemesanan)
        {
            return $this->db
            ->table('pemesanan')
            ->where('id', $idPemesanan)
            ->orderBy('id', 'desc')
            ->limit(0, 1)
            ->get();
        }

  

  public function getTableTikset()
  {
      $builder = $this->db->query("select * from pemesanan");
      return $builder;
    //   and pemesanan.tgl_pemesanan = curdate()


    // $builder = $this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and pemesanan.id_penumpang=penumpang.id_penumpang");
    // return $builder;
  }

  public function getTableTiket()
  {
      $builder = $this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and pemesanan.id_penumpang=penumpang.id_penumpang");
      return $builder;
  }


  




  public function gettiket($id)
  {
      $builder =$this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and pemesanan.id='$id'");
      return $builder;
  }



  public function getPenumpang()
  {
      
      $builder = $this->db->table('penumpang');
      return $builder->get();
      
  }



  
  public function getMaskapai()
  {
      
      $builder = $this->db->table('maskapai');
      return $builder->get();
      
  }
  public function getBandara()
  {
      
      $builder = $this->db->table('bandara');
      return $builder->get();
      
  }
  public function getantrian($id)
  {
      $builder =$this->db->query("select * from antrian,poli,penumpang where poli.id_poli = antrian.jenis_poli and antrian.id='$id'");
      return $builder;
  }




  public function savePemesanan($data)
  {
      $query =$this->db->table('pemesanan')->insert($data);
      return $query;
  }




  public function saveAntri($data)
{
    // Cari urutan terakhir yang terdaftar dengan kategori yang sama
    $last_order = $this->where('jenis_poli', $data['jenis_poli'])
        ->orderBy('no_antrian', 'desc')
        ->first();

    // Tambahkan 1 pada urutan terakhir jika terdapat data sebelumnya, atau set urutan menjadi 1 jika data baru
    $data['no_antrian'] = $last_order ? $last_order['no_antrian'] + 1 : 1;

    // Simpan data
    return $this->insert($data);
}






}