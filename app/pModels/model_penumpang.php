<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_penumpang extends Model
{
    public function getpenumpang()
    {
        $builder = $this->db->table('penumpang');
        $builder->select('*');

        return $builder->get();
    }

    
    public function spenumpang($data)
    {
        $query=$this->db->table('penumpang')->insert($data);
        return $query;
    }

    public function upenumpang($data,$id_penumpang){
        $query=$this->db->table('penumpang')->update($data,array('id_penumpang'=>$id_penumpang));
        return $query;
    }

    public function dpenumpang($id_penumpang)
    {
        $query=$this->db->table('penumpang')->delete (array('id_penumpang' =>$id_penumpang));
        return $query;
    }


   
    protected $table = 'penumpang';
    protected $primaryKey = 'id_penumpang';

    public function getCount()
    {
        return $this->countAllResults();
    }
}