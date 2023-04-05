
<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>
<head>


<?php
$kode="PS-0";

?>

<script>
function kode(){
document.tambah.id_bandara.value="B-0";

}
document.getElementById("id_bandara ").focus();
    </script>

<script src="<?=base_url()?>/assetshori/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<link href="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assetshori/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      
    </head>









    

<form action="<?php echo base_url('bandara/save_bandara'); ?>" method="post" name="tambah">
    <!-- Button trigger modal -->


    <?php if(!empty(session()->getFlashdata('error'))):?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <h4> Mohon Form Diperiksa Kembali</h4>
</hr />
<?php echo session()->getFlashdata('error');?>
<button type="button"  id="addmodal" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
</div>

<?php endif ?>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" onclick="kode()">
        Tambah Data Bandara
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                                                 
                                          <div class="col-md-10">
                                                <label>Id bandara</label>
                                                <input type="text" class="form-control id_bandara" name="id_bandara" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>No bandara</label>
                                                <input type="text" class="form-control kode_bandara" name="kode_bandara" id="kode_bandara">
                                            </div>
                                        
                                          
                       
                       
                        
                        <div class="col-md-10">
                                                <label>Nama Bandara</label>
                                                <input type="text" class="form-control nama_bandara" name="nama_bandara" id="nama_bandara">
                                            </div>
                        
      
                                            <div class="col-md-10">
                                                <label>Lokasi Bandara </label>
                                                <input type="text" class="form-control lokasi_bandara" name="lokasi_bandara">
                                            </div>
                                      
                        
                
                        
                                          
                       
                        </div>
                 
                                   
                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        


                        
<form action="<?php echo base_url('bandara/update_bandara'); ?>" method="post">
    <!-- Button trigger modal -->





    <!-- Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
              
                <div class="modal-body">
                                                 
                                          <div class="col-md-10">
                                                <label>Id bandara</label>
                                                <input type="text" class="form-control id_bandara" name="id_bandara" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>No bandara</label>
                                                <input type="text" class="form-control kode_bandara" name="kode_bandara" id="kode_bandara">
                                            </div>
                                        
                                          
                       
                       
                        
                        <div class="col-md-10">
                                                <label>Nama Bandara</label>
                                                <input type="text" class="form-control nama_bandara" name="nama_bandara" id="nama_bandara">
                                            </div>
                        
      
                                            <div class="col-md-10">
                                                <label>Lokasi Bandara </label>
                                                <input type="text" class="form-control lokasi_bandara" name="lokasi_bandara">
                                            </div>
                                      
                        
                
                        
                                          
                       
                        </div>
                 
                                   
                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        

<form action="<?php echo base_url('bandara/delete_bandara'); ?>" method="post">

    <!-- Modal -->
    <div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apa Anda Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                  <lable>Dengan ini anda akan kehilangan data secara permanen!!</lable>
                  <input type="hidden" name="id_bandara" class="id_bandara">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>






<div class="row">
    <div class="col-12">
<div class="card m-b-30">
   
</div>
    <h4 class="mt-0 header-title">Data Bandara</h4>
        <table class="table table-striped table-bordered"id ="barang" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Bandara</th>
            <th>Kode Bandara</th>
      
            <th>Nama Bandara</th>
            <th>lokasi Bandara</th>
    
            <th>Action</th>
        </tr>

    </thead>


    <tbody>
        <?php $no = 0
        ?>
        <?php  $rp = "Rp." ?>
        <?php foreach($bandara as $row): $no++;?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row->id_bandara;?></td>
            <td><?=$row->kode_bandara;?></td>
           
            <td><?=$row->nama_bandara;?></td>
            <td><?=$row->lokasi_bandara;?></td>
        
          
            <td>
                
           
        
            <!-- <button class="btn btn-success btn-detail" ><i class="fa fa-book">Info</i></button> -->
            <button type="button" class="btn btn-info  btn-edit" 
           
           
            data-id_bandara="<?=$row->id_bandara;?>"
            data-kode_bandara="<?=$row->kode_bandara;?>"
        
            data-nama_bandara="<?=$row->nama_bandara;?>"
            data-lokasi_bandara="<?=$row->lokasi_bandara;?>"><i class="fa fa-book"></i></button>
            
            

        
            
            <button class="btn btn-danger btn-delete" data-id_bandara="<?=$row->id_bandara;?>"><i class="fa fa-trash"></i></button>
        
            </td>
        
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>

</p>
</div>
    </div>
</div>

<script> 
$(document).ready(function(){
    $('#barang').DataTable();
});barang


 //edit modal
 $('.btn-edit').on('click',function(){
        $('#editmodal').modal('show')
        $('#detail').modal('close')

    });

    $('.btn-edit').on('click',function(){
        const id_bandara=$(this).data('id_bandara');
        const kode_bandara=$(this).data('kode_bandara');
        const nama_bandara=$(this).data('nama_bandara');
        const lokasi_bandara=$(this).data('lokasi_bandara');
       
       

        
        $('.id_bandara').val(id_bandara);
        $('.kode_bandara').val(kode_bandara);
        $('.nama_bandara').val(nama_bandara);
        $('.lokasi_bandara').val(lokasi_bandara).trigger('change');
        $('#editmodal').modal('show');
        $('#detail').modal('close');

    });


    
$('.btn-delete').on('click',function(){
    const id_bandara =$(this).data('id_bandara');
    $('.id_bandara').val(id_bandara);
    $('#hapusdata').modal('show');

});

//datepicker

</script>

<?=$this->endSection('')?>