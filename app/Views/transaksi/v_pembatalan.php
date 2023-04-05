<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isihome') ?>

<head>
    <!-- DataTables -->
    <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

</head>
<div class="col-sm-12">
    <div class="page-content-wrapper ">
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h4 class="mt-0 header-title">Data tiket yang dibatalkan</h4>
                    </div>
                    <div class="card-body">

                       
             
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-sm table-striped" id="datadokter">
                                        <thead>
                                            <tr role="row">
                                                <th>No</th>
                                                <th>No Pemesanan</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Tanggal Keberangkatan</th>
                                                <th>Nama Penumpang</th>
                                                <th>Maskapai</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 0;
                                            foreach ($datatampil as $val) {
                                                $no++;

                                            ?>
                                                <tr role="row" class="odd">
                                                    <td><?= $no; ?></td>
                                                    <td><?= 'TK0' . $val['id_pemesanan'] ?></td>
                                                    <td><?= $val['tgl_pemesanan'] ?></td>
                                                    <td><?= $val['tgl_keberangkatan'] ?></td>
                                                    <td><?= $val['nama_penumpang']; ?></td>
                                                    <td><?= $val['nama_maskapai']; ?></td>
                                                    <td><t>Dibatalkan</t></td>
                                                    <style>
                                                        #t{
                                                            background-color: red;
                                                        }
                                                    </style>


                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>





<form action="<?=base_url ()?>/pembatalan/save_pembatalan" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pembatalan Tiket</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ini adalah script -->
                  
 



                <div class="row">
                  
                    <div class="col-md-12">
                        <label></label>
                        <div class="row">
                           
                          
                            <div class="col-sm-6">
                        <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" readonly name="id"  id="id" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nomor Tiket</label>
                                    <input type="text" readonly  id="id_pemesanan" name="id_pemesanan" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-sm-6">
                        <div class="form-group">
                                    <label>Tanggal Pemesanan</label>
                                    <input type="text"  readonly name="tgl_pemesanan"  id="tgl_pemesanan" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Pemesan</label>
                                    <input type="text" readonly id="nama_penumpang" name="nama_penumpang" class="form-control">
                                </div>
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-sm-12">
                            <div class="form-group">
                        <br>
                        
                              
                        <button type="button" data-toggle="modal" data-target="#modal_tiket" class="btn btn-xs btn-primary" ><i class="fa fa-book">Cari Tiket</i></button>
                               </div>
                            </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="tutup">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</form>






<div class="modal fade" id="modal_tiket">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pilih Pemesanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Id Pemesanan</th>
                            <th>Nama Pemesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($pemesanan as $d) :
                            $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $d->id ?></td>
                                <td><?= $d->id_pemesanan ?></td>
                                <td><?= $d->tgl_pemesanan ?></td>
                                <td><?= $d->nama_penumpang ?></td>
                           
                    
                
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="return pilih_tiket('<?= $d->id ?>','<?= $d->id_pemesanan ?>','<?= $d->tgl_pemesanan ?>','<?= $d->nama_penumpang ?>')">
                                        Pilih
                                    </button>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" id="tutup_bandara_t">Close</button>
            </div>
        </div>
    </div>
</div>






<script>
    $('#tutup').on('click', function() {
        $('#addModal').modal('hide');
        $('#modal_tiket').modal('hide');
        // $('#modal_pasien').modal('hide');
        $('#addmodal.close').click()
        $('#modal_tiket.close').click()
   
    });


    
    function pilih_tiket(id,id_pemesanan,tgl_pemesanan,nama_penumpang) {
        $('#id').val(id);
        $('#id_pemesanan').val(id_pemesanan);
        $('#tgl_pemesanan').val(tgl_pemesanan);
        $('#nama_penumpang').val(nama_penumpang);
        $('#modal_tiket').modal().hide();
        $('#modal_tiket.close').click()
        // $('#modal_obat .close').click()

    }
    

</script>


<script>
  $(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#example1 tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $("#cari").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#example1 tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<?= $this->endSection('') ?>