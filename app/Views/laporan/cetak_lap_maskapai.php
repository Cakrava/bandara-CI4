<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isihome') ?>

                                            

<div class="row">
    <div class="col-md-1">
        
        <a href="<?= site_url('laporan/') ?>" class="btn btn-info btn-flat">
            <span class="fa fa-arrow-circle-left"></span>
            Kembali 
        </a>
    </div>   
            
    <div class="col-md-2">
                                        <div class="col-12">
                                            <button onclick="printContent('div1')" class="btn btn-primary">
                                                <i class="fa fa-print"></i> Print</button>
                                            </div>
                                            </div>
                                            <br>
                                                                  

<div class="col-sm-7">
    <div class="card card-iutline ">
       
        <div class="card-body">
           
        </div>
        <?php
        ?>
        <div class="invoice col-sm-30 p-3 mb-3">
            <!-- title row --->

            <div id="div1">
                <div class="row">
                    <div class="col-12">
                        <table>
                            <tr>
                                <td width=200>
                                    <img src="<?= base_url()?>/gambar/logobaru.png" width="200" alt="">
                                </td>
                                <td width=580>
                                    <center>
                                        <p>
                                        <h1>Daftar Maskapai
                                        </h1>
                                        </p>
                                        <P>Mehivra-Ticket For Anywhere
                                        </H5>
                                        </P>
                                    </center>
                                    
                                </td>
                               
                                

                           
    
                            </tr>
                        </table>
                        <hr>
                        
                       
                    </div>
                    <!--- /.col --->
                </div>
                <!--- info row --->
               
                    <br>
                    <br>
                    <div class="row">
                        
                                <div class="card-body">
                                    <div class="table-responive-sm">
                                        
                                           
                                                <body>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                    <th>NO</th>  
                                                    <th>ID Maskapao</th>  
                                                    <th>Nama Maskapai</th>  
                                                    <th>Logo</th>  
                                                   
                                                    </tr></thead>
                                                    <tbody>
        <?php $no = 0
        ?>
        <?php ?>
        <?php foreach($cetakmaskapai as $row): $no++;?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['id_maskapai'];?></td>
            <td><?=$row['nama_maskapai'];?></td>
            
        
        </tr>
        <?php endforeach;?>
    </tbody>

            </body>
                                                
                                         
                                       
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
        </div>
        


        <script>
            function printContent(el) {
                var restorepage = document.body.innerHTML;
                var printContent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printContent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>

        <?= $this->endSection('') ?>





        