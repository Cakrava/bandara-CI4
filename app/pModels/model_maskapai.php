<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_maskapai extends Model
{
    public function getmaskapai()
    {
        $builder = $this->db->table('maskapai');
        $builder->select('*');

        return $builder->get();
    }




   
    public function getCount()
    {
        return $this->countAllResults();
    }
   
    protected $table = 'maskapai';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_maskapai', 'nama_maskapai', 'logo'];
    
   

    public function sMaskapai($data)
    {
        $this->db->table($this->table)->insert($data);
    }

    
   

    public function dmaskapai($id_maskapai)
    {
        
        $query=$this->db->table('maskapai')->delete (array('id_maskapai' =>$id_maskapai));

        return $query;
    }



    public function umaskapai($data,$id_maskapai){
        $query=$this->db->table('maskapai')->update($data,array('id_maskapai'=>$id_maskapai));
        return $query;
    }





    

    public function laporan_maskapai($id_maskapai)
    {
    
    // $builder = $this->db->query("select * from antrian, poli, pasien where antrian.jenis_poli=poli.id_poli and antrian.idpasien=pasien.idpasien and antrian.jenis_poli='$id_maskapai'");
    
    // return $builder;
    


    $builder = $this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and pemesanan.id_penumpang=penumpang.id_penumpang and pemesanan.idmaskapai='$id_maskapai");
    return $builder;
    
    }



}

    
    















