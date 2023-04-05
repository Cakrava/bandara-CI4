
<?=$this->extend('Layout/main')?>
<?=$this->extend('Layout/menu')?>
<?=$this->section('isihome')?>
<head>


<?php
$kode="PS-0";

?>

<script>
function kode(){
document.tambah.id_pesawat.value="PS-0";

}
document.getElementById("id_pesawat ").focus();
    </script>

<script src="<?=base_url()?>/assetshori/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<link href="<?=base_url()?>/assetshori/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assetshori/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      
    </head>









    

<form action="<?php echo base_url('Home/save_pesawat'); ?>" method="post" name="tambah">
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
                <div class="row align-items-center b-b-default">

                                                            
                                         <div class="col-sm-6 b-r-default p-b-20 p-t-20">                
                                            <div class="col-md-10">
                                                <label>ID Pesawat</label>
                                                <input type="text" class="form-control id_pesawat" name="id_pesawat" required="" autofocus="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>No Pesawat</label>
                                                <input type="text" class="form-control no_pesawat" name="no_pesawat" id="no_pesawat">
                                            </div>
                                        
                        
                                            <div class="col-md-10">
                                            <label>nama_pesawat</label><br> 
                            <select name="nama_pesawat" size="1" class="form-control nama_pesawat" onclick="maska()">
                    
                    
                           <option  value="Airbus A320">Airbus A320</option>
                            <option  value="Boeing 737">Boeing 737</option>
                            <option  value="McDonnell Douglas MD-80">McDonnell Douglas MD-80</option>
                            <option  value="Bombardier Q400">Bombardier Q400</option>
                            <option  value="Embraer E190">Embraer E190</option>
                            <option  value="Fokker 70">Fokker 70</option>
                            <option  value="Sukhoi Superjet 100">Sukhoi Superjet 100</option>
                            <option  value="Airbus A350">Airbus A350</option>
                            <option  value="Airbus A380">Airbus A380</option>
                            <option  value="Boeing 747">Boeing 747</option>
                            
                    
                            </select>
                            
                                         
                        </div>
                        </div>
                       
                        <div class="col-sm-6 p-b-20 p-t-20">
                       
                        
                        <label>Jenis Pesawat</label><br> 
                            <select name="jenis_pesawat" size="1" class="form-control jenis_pesawat">
                    
                    
                           <option  value="Aircraft Passenger">Aircraft Passenger</option>
                            <option  value="Aircraft Cargo">Aircraft Cargo</option>
                           
                            
                        
                            </select>
                            
                        
                                            
                                              
                                            <div class="col-md-10">
                                                <label>Jumlah Kursi </label>
                                                <input type="text" class="form-control jml_kursi" name="jml_kursi">
                                            </div>
                                      
                        
                        
                                            <div class="col-md-10">
                                                <label>Tarif</label>
                                                <input type="text" class="form-control tarif_pesawat" name="tarif_pesawat">
                                            </div>
                        
                        
                        
                                          
                        </div>
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
                        


                        
<form action="<?php echo base_url('Home/update_pesawat'); ?>" method="post">
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
                <div class="modal-body">
                <div class="row align-items-center b-b-default">

                                                            
                                         <div class="col-sm-6 b-r-default p-b-20 p-t-20">                
                                            <div class="col-md-10">
                                                <label>ID Pesawat</label>
                                                <input type="text" class="form-control id_pesawat" name="id_pesawat" required="">
                                            </div>
                                            <div class="col-md-10">
                                                <label>No Pesawat</label>
                                                <input type="text" class="form-control no_pesawat" name="no_pesawat" id="no_pesawat">
                                            </div>
                                        
                        
                                            <div class="col-md-10">
                                            <label>Nama Pesawat</label><br> 
                            <select name="nama_pesawat" size="1" class="form-control nama_pesawat" onclick="maska()">
                    
                    
                           <option  value="Airbus A320">Airbus A320</option>
                            <option  value="Boeing 737">Boeing 737</option>
                            <option  value="McDonnell Douglas MD-80">McDonnell Douglas MD-80</option>
                            <option  value="Bombardier Q400">Bombardier Q400</option>
                            <option  value="Embraer E190">Embraer E190</option>
                            <option  value="Fokker 70">Fokker 70</option>
                            <option  value="Sukhoi Superjet 100">Sukhoi Superjet 100</option>
                            <option  value="Airbus A350">Airbus A350</option>
                            <option  value="Airbus A380">Airbus A380</option>
                            <option  value="Boeing 747">Boeing 747</option>
                            
                    
                            </select>
                            
                                         
                        </div>
                        </div>
                       
                        <div class="col-sm-6 p-b-20 p-t-20">
                       
                        
                        <label>Jenis Pesawat</label><br> 
                            <select name="jenis_pesawat" size="1" class="form-control jenis_pesawat">
                    
                    
                           <option  value="Aircraft Passenger">Aircraft Passenger</option>
                            <option  value="Aircraft Cargo">Aircraft Cargo</option>
                           
                            
                        
                            </select>
                            
                        
                                            
                                              
                                            <div class="col-md-10">
                                                <label>Jumlah Kursi </label>
                                                <input type="text" class="form-control jml_kursi" name="jml_kursi">
                                            </div>
                                      
                        
                        
                                            <div class="col-md-10">
                                                <label>Tarif</label>
                                                <input type="text" class="form-control tarif_pesawat" name="tarif_pesawat">
                                            </div>
                        
 
                                          
                        </div>
                        </div>
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


<form action="<?php echo base_url('Home/delete_pesawat'); ?>" method="post">

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
                  <input type="hidden" name="id_pesawat" class="id_pesawat">
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
            <th>ID Pesawat</th>
            <th>No Pesawat</th>
      
            <th>Nama Pesawat</th>
            <th>Jenis</th>
        
            <th>Kursi</th>

            <th>Tarif</th>
            <th>Action</th>
        </tr>

    </thead>


    <tbody>
        <?php $no = 0
        ?>
        <?php  $rp = "Rp." ?>
        <?php foreach($pesawat as $row): $no++;?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row->id_pesawat;?></td>
            <td><?=$row->no_pesawat;?></td>
           
            <td><?=$row->nama_pesawat;?></td>
            <td><?=$row->jenis_pesawat;?></td>
            <td><?=$row->jml_kursi;?></td>
            <td><?=$row->tarif_pesawat;?></td>
          
            <td>
                
           
        
            <!-- <button class="btn btn-success btn-detail" ><i class="fa fa-book">Info</i></button> -->
            <button type="button" class="btn btn-info  btn-edit" 
           
           
            data-id_pesawat="<?=$row->id_pesawat;?>"
            data-no_pesawat="<?=$row->no_pesawat;?>"
        
            data-nama_pesawat="<?=$row->nama_pesawat;?>"
            data-jenis_pesawat="<?=$row->jenis_pesawat;?>"
           
            data-jml_kursi="<?=$row->jml_kursi;?>"
            data-tarif_pesawat="<?=$row->tarif_pesawat;?>"> <i class="fa fa-book"></i></button>
            
            

        
            
            <button class="btn btn-danger btn-delete" data-id_pesawat="<?=$row->id_pesawat;?>"><i class="fa fa-trash"></i></button>
        
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
        const id_pesawat=$(this).data('id_pesawat');
        const no_pesawat=$(this).data('no_pesawat');
        const nama_pesawat=$(this).data('nama_pesawat');
        const jml_kursi=$(this).data('jml_kursi');
        const tarif_pesawat=$(this).data('tarif_pesawat');
       

        
        $('.id_pesawat').val(id_pesawat);
        $('.no_pesawat').val(no_pesawat);
        $('.nama_pesawat').val(nama_pesawat);
        $('.jml_kursi').val(jml_kursi);
        $('.tarif_pesawat').val(tarif_pesawat).trigger('change');
        $('#editmodal').modal('show');
        $('#detail').modal('close');

    });


    
$('.btn-delete').on('click',function(){
    const id_pesawat =$(this).data('id_pesawat');
    $('.id_pesawat').val(id_pesawat);
    $('#hapusdata').modal('show');

});

//datepicker

</script>

<?=$this->endSection('')?>