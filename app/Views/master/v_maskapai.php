
<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>

<div id="preview">
    
    <img src="" id="image" width="200">
</div>

<head>


<?php
$kode="";

?>

<script>
function kode(){
document.tambah.id_maskapai.value="B-0";

}
document.getElementById("id_maskapai ").focus();
    </script>

<script src="<?=base_url()?>/assetshori/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<link href="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assetshori/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      
    </head>







    

<form action="<?php echo base_url('maskapai/save_maskapai'); ?>" method="post" name="tambah" enctype="multipart/form-data">
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
        Tambah Data maskapai
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
                                                <label>Id maskapai</label>
                                                <input type="text" class="form-control id_maskapai" name="id_maskapai" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>Nama Maskapai</label>
                                                <input type="text" class="form-control nama_maskapai" name="nama_maskapai" id="nama_maskapai">
                                            </div>
                                        
                                            <div class="col-md-10">
                                                <label>Nama Maskapai</label>
                                                <input type="file" class="form-control logo" name="logo" id="logo">
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
                        


                        
<form action="<?php echo base_url('maskapai/update_maskapai'); ?>" method="post" enctype="multipart/form-data">>
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
                                                <label>Id maskapai</label>
                                                <input type="text" class="form-control id_maskapai" name="id_maskapai" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>Nama Maskapai</label>
                                                <input type="text" class="form-control nama_maskapai" name="nama_maskapai" id="nama_maskapai">
                                            </div>
                                        
                                            <div class="col-md-10">
                                                <label>Logo Maskapai</label>
                                                <input type="file" class="form-control logo" name="logo" id="logo">
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
                        

<form action="<?php echo base_url('maskapai/delete_maskapai'); ?>" method="post">

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
                  <input type="hidden" name="id_maskapai" class="id_maskapai">
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
    <h4 class="mt-0 header-title">Data maskapai</h4>
        <table class="table table-striped table-bordered"id ="barang" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>ID maskapai</th>

            <th>Nama maskapai</th>
            <th>Logo maskapai</th>
    
            <th>Action</th>
        </tr>   

    </thead>


    <tbody>
        <?php $no = 0
        ?>
        <?php  $rp = "Rp." ?>
        <?php foreach($maskapai as $row): $no++;?>
        <tr  onmouseover="showPreview('<?php echo base_url('gambar/logomaskapai/' . $row->logo) ?>', event)" onmouseout="hidePreview()">
            <td><?=$no?></td>
            <td><?=$row->id_maskapai;?></td>
            <td><?=$row->nama_maskapai;?></td>
           
           
            <td><?php
                        if (!empty($row->logo)) {
                            echo '<img src="'.base_url("gambar/logomaskapai/$row->logo").'" width="100">';
                        }
                    ?></td>
            <td>
                
           
        
            <!-- <button class="btn btn-success btn-detail" ><i class="fa fa-book">Info</i></button> -->
            <button type="button" class="btn btn-info  btn-edit" 
           
           
            data-id_maskapai="<?=$row->id_maskapai;?>"
            data-nama_maskapai="<?=$row->nama_maskapai;?>"
        

            data-logo="<?=$row->logo;?>"><i class="fa fa-book"></i></button>
            
            

        
            
            <button class="btn btn-danger btn-delete" data-id_maskapai="<?=$row->id_maskapai;?>"><i class="fa fa-trash"></i></button>
        
            </td>
        
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>

    

</p>
</div>
    </div>
</div>


<style>
    #preview {
        display: none;
        position: absolute;
        z-index: 999;
    }

    </style>
<script> 


function showPreview(imageUrl, event) {
        var preview = document.getElementById('preview');
        var image = document.getElementById('image');
        image.src = imageUrl;
        preview.style.display = 'block';
        preview.style.top = event.pageY + 0 + 'px';
        preview.style.left = event.pageX + 0 + 'px';
    }

    function hidePreview() {
        var preview = document.getElementById('preview');
        preview.style.display = 'none';
    }


$(document).ready(function(){
    $('#barang').DataTable();
});barang


 //edit modal
 $('.btn-edit').on('click',function(){
        $('#editmodal').modal('show')
        $('#detail').modal('close')

    });

    $('.btn-edit').on('click',function(){
        const id_maskapai=$(this).data('id_maskapai');
        const nama_maskapai=$(this).data('nama_maskapai');
        const logo=$(this).data('logo');
       
       

        
        $('.id_maskapai').val(id_maskapai);
        $('.nama_maskapai').val(nama_maskapai);
        $('.logo').val(logo).trigger('change');
        $('#editmodal').modal('show');
        $('#detail').modal('close');

    });


    
$('.btn-delete').on('click',function(){
    const id_maskapai =$(this).data('id_maskapai');
    $('.id_maskapai').val(id_maskapai);
    $('#hapusdata').modal('show');

});

//datepicker

</script>

<?=$this->endSection('')?>7