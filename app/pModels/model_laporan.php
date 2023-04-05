<?php
namespace App\pModels;

use CodeIgniter\Model;

class model_laporan extends Model
{
    public function get_data_laporan()
    {
        $start_date = $this->input->post('tgl_awal');
        $end_date = $this->input->post('tgl_akhir');
        $builder = $this->db->query("SELECT * FROM pemesanan,maskapai,penumpang
        WHERE maskapai.id_maskapai = pemesanan.id_maskapai
        AND pemesanan.id_penumpang=penumpang.id_penumpang
        AND pemesanan.tgl_pemesanan BETWEEN '$start_date' AND '$end_date'");
        return $builder;
}





public function laporan_maskapai($id_maskapai)
{

$builder = $this->db->query("select * from pemesanan, maskapai, penumpang where maskapai.id_maskapai=maskapai.id_maskapai and pemesanan.id_penumpang=penumpang.id_penumpang and pemesanan.id_maskapai='$id_maskapai'");

return $builder;



}


public function get_laporan($id)
{
    $builder =$this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and penumpang.id_penumpang = pemesanan.id_penumpang and pemesanan.id_maskapai='$id'");
    return $builder;
}


public function get_laporan_pembatalan($id)
{
    $builder =$this->db->query("select * from detail_pembatalan,maskapai,penumpang where maskapai.id_maskapai = detail_pembatalan.id_maskapai and penumpang.id_penumpang = detail_pembatalan.id_penumpang and detail_pembatalan.id_maskapai='$id'");
    return $builder;
}




public function get_laporan_periode($tglAwal, $tglAkhir)
{
    $builder =$this->db->query("select * from pemesanan,maskapai,penumpang where maskapai.id_maskapai = pemesanan.id_maskapai and penumpang.id_penumpang = pemesanan.id_penumpang and tgl_pemesanan between '$tglAwal' and '$tglAkhir' ");
    return $builder;
}

public function get_laporan_pembatalan_periode($tglAwal, $tglAkhir)
{
    $builder =$this->db->query("select * from detail_pembatalan,maskapai,penumpang where maskapai.id_maskapai = detail_pembatalan.id_maskapai and penumpang.id_penumpang = detail_pembatalan.id_penumpang and tgl_pemesanan between '$tglAwal' and '$tglAkhir' ");
    return $builder;
}





}
