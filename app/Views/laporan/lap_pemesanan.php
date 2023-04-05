

<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>


<div style="overflow: auto;">
  <div style="float: left; width: 49%; padding: 10px;">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Laporan Pemesanan Berdasarkan Maskapai</h3>
        </div>
        <div class="card-body">
            <form action="<?=base_url ()?>/laporan/cetak_maskapai" method="post">
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label for="cbReport"></label>
                
        <select name="maskapai" class="form-control" required="">
                            <option value="" >Pilih Maskapai</option>
                            <?php
                            foreach ($maskapai as $key=> $val) {
                                echo '<option value="' . $val['id_maskapai'] . '">' . $val['nama_maskapai'] . '</option>';
                            }
                            ?>
                        </select>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label for=""></label><br>
                <button type="submit" class="btn btn-sm btn-primary" id="btnPrintReport">
                  <i class="fa fa-print"></i> Tampilkan
                </button>
              </div>
            </div>
          </div>
            </form>
          



        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div style="float: left; width: 49%; padding: 10px;">
<div class="container-fluid">
<form action="<?=base_url ()?>/laporan/cetak_periode" method="post">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Laporan Pemesanan Berdasarkan Periode</h3>
        </div>
        <div class="card-body">
        

        <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="tglAwal">Tanggal Awal</label>
                <input type="date" class="form-control" name="tglAwal"id="tglAwal" required="">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="tglAkhir">Tanggal Akhir</label>
                <input type="date" class="form-control" name="tglAkhir" id="tglAkhir" required="">
              </div>
            </div>
            <div class="col-md-2">
            <label ></label>
            <br>
            
                <button type="submit" class="btn btn-sm btn-primary" id="btnPrintDate">
                  <i class="fa fa-print"></i> Tampilkan
                </button>
             
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</form>
</div>
</div>
</div>


<?=$this->endSection('')?>