
<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>
<head>


<?php
$kode="PS-0";

?>

<script>
function kode(){
document.tambah.id_penumpang.value="PS-0";

}
document.getElementById("id_penumpang ").focus();
    </script>

<script src="<?=base_url()?>/assetshori/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<link href="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assetshori/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      
    </head>









    

<form action="<?php echo base_url('penumpang/save_penumpang'); ?>" method="post" name="tambah">
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
                                                <label>ID penumpang</label>
                                                <input type="text" class="form-control id_penumpang" name="id_penumpang" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>Nama Penumpang</label>
                                                <input type="text" class="form-control nama_penumpang" name="nama_penumpang" id="nama_penumpang">
                                            </div>
                                        
                                            <div class="col-md-10">
                                                <label>No Penumpang</label>
                                                <input type="text" class="form-control no_penumpang" name="no_penumpang" id="no_penumpang">
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
                        


                        
<form action="<?php echo base_url('penumpang/update_penumpang'); ?>" method="post">
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
                                                <label>ID penumpang</label>
                                                <input type="text" class="form-control id_penumpang" name="id_penumpang" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>Nama Penumpang</label>
                                                <input type="text" class="form-control nama_penumpang" name="nama_penumpang" id="nama_penumpang">
                                            </div>
                                        
                                            <div class="col-md-10">
                                                <label>No Penumpang</label>
                                                <input type="text" class="form-control no_penumpang" name="no_penumpang" id="no_penumpang">
                                            </div>
                            
                        </div>
                                   
                                       
                                   
                                 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Change</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


<form action="<?php echo base_url('penumpang/delete_penumpang'); ?>" method="post">

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
                  <input type="hidden" name="id_penumpang" class="id_penumpang">
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
    <h4 class="mt-0 header-title">Data Unit</h4>
        <table class="table table-striped table-bordered"id ="barang" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Penumpang</th>
            
            <th>Nama Penumpang</th>
            <th>No Penumpang</th>
       
            <th>Action</th>
        </tr>

    </thead>


    <tbody>
        <?php $no = 0
        ?>
        <?php  $rp = "Rp." ?>
        <?php foreach($penumpang as $row): $no++;?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row->id_penumpang;?></td>
            
            <td><?=$row->nama_penumpang;?></td>
            <td><?=$row->no_penumpang;?></td>
          
          
            <td>
                
           
        
            <!-- <button class="btn btn-success btn-detail" ><i class="fa fa-book">Info</i></button> -->
            <button type="button" class="btn btn-info  btn-edit" 
           
           
            data-id_penumpang="<?=$row->id_penumpang;?>"
            
            data-nama_penumpang="<?=$row->nama_penumpang;?>"
            data-no_penumpang="<?=$row->no_penumpang;?>"> <i class="fa fa-book"></i></button>
            
            

        
            
            <button class="btn btn-danger btn-delete" data-id_penumpang="<?=$row->id_penumpang;?>"><i class="fa fa-trash"></i></button>
        
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
        const id_penumpang=$(this).data('id_penumpang');
        const nama_penumpang=$(this).data('nama_penumpang');
        const no_penumpang=$(this).data('no_penumpang');
   

        
        $('.id_penumpang').val(id_penumpang);
        $('.no_penumpang').val(no_penumpang);
        $('.nama_penumpang').val(nama_penumpang).trigger('change');
        $('#editmodal').modal('show');
        $('#detail').modal('close');

    });


    
$('.btn-delete').on('click',function(){
    const id_penumpang =$(this).data('id_penumpang');
    $('.id_penumpang').val(id_penumpang);
    $('#hapusdata').modal('show');

});

//datepicker

</script>

<?=$this->endSection('')?>