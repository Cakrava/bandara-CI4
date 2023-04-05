<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_pesawat extends Model
{
    public function getPesawat()
    {
        $builder = $this->db->table('pesawat');
        $builder->select('*');

        return $builder->get();
    }

    
    public function sPesawat($data)
    {
        $query=$this->db->table('pesawat')->insert($data);
        return $query;
    }

    public function uPesawat($data,$id_pesawat){
        $query=$this->db->table('pesawat')->update($data,array('id_pesawat'=>$id_pesawat));
        return $query;
    }

    public function dPesawat($id_pesawat)
    {
        $query=$this->db->table('pesawat')->delete (array('id_pesawat' =>$id_pesawat));
        return $query;
    }}