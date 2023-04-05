<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_bandara extends Model
{
    public function getbandara()
    {
        $builder = $this->db->table('bandara');
        $builder->select('*');

        return $builder->get();
    }

    
    public function sbandara($data)
    {
        $query=$this->db->table('bandara')->insert($data);
        return $query;
    }

    public function ubandara($data,$id_bandara){
        $query=$this->db->table('bandara')->update($data,array('id_bandara'=>$id_bandara));
        return $query;
    }

    public function dbandara($id_bandara)
    {
        $query=$this->db->table('bandara')->delete (array('id_bandara' =>$id_bandara));
        return $query;
    }}