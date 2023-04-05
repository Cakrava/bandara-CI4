<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_pembatalan extends Model
{
 

    public function getLastdata()
    {
        return $this->db
        ->table('pembatalan')
        ->where('tgl_pembatalan',date('Y-m-d'))
        ->orderBy('id', 'desc')
        ->limit(0, 1)
        ->get();
    }
      


      
    protected $table = 'detail_pembatalan';
    protected $primaryKey = 'id';

    public function getCount()
    {
        return $this->countAllResults();
    }

  


  
  public function getTableTiket()
  {
      $builder = $this->db->query("select * from detail_pembatalan,maskapai,penumpang where maskapai.id_maskapai = detail_pembatalan.id_maskapai and detail_pembatalan.id_penumpang=penumpang.id_penumpang");
      return $builder;
  }


  
  public function getPemesanan()
  {
      $builder = $this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and pemesanan.id_penumpang=penumpang.id_penumpang");
      return $builder;
  }


  





  public function gettiket($id)
  {
      $builder =$this->db->query("select * from detail_pembatalan,maskapai,penumpang where maskapai.id_maskapai = detail_pembatalan.id_maskapai and detail_pembatalan.id='$id'");
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
 



  public function savepembatalan($data)
  {
      $query =$this->db->table('pembatalan')->insert($data);
      return $query;
  }



  

  
  public function masuk($data)
  {
      $query =$this->db->table('detail_pembatalan')->insert($data);
      return $query;
  }








}