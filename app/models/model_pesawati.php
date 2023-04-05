<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_pesawat extends Model
{
    public function getMaskapai()
    {
        $builder = $this->db->table('maskapai');
        $builder->select('*');

        return $builder->get();
    }

    
    public function sMaskapai($data)
    {
        $query=$this->db->table('maskapai')->insert($data);
        return $query;
    }

    public function UpdateMaskapai($data,$id){
        $query=$this->db->table('maskapai')->update($data,array('idmaskapai'=>$id));
        return $query;
    }

    public function DeleteMaskapai($id)
    {
        $query=$this->db->table('maskapai')->delete (array('idmaskapai' =>$id));
        return $query;
    }}