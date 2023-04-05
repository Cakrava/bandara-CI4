<?php  namespace App\pModels;
use CodeIgniter\Model;
 
class model_akun extends Model
{
    protected $table = 'users';



public function saveregis($data){
    $query = $this->db->table('users')->insert($data);
    return $query;
}

public function cek_login($username){
    return $this->db->table('users')
    ->where(array('username'=>$username))
    ->get()->getRowArray();
}


protected $primaryKey = 'id';
protected $useTimestamps = true;
protected $allowedFields = ['nama', 'username', 'email', 'password', 'gambar', 'alamat', 'nohp', 'hak'];

public function getUserById($id)
{
    return $this->where(['id' => $id])->first();
}


}