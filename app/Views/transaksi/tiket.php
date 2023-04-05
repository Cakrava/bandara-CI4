<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isihome') ?>

                                            

<div class="row">
    <div class="col-md-1">
        
        <a href="<?= site_url('pemesanan/pemesanan') ?>" class="btn btn-info btn-flat">
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
                                        <h1>Mehivra Airport
                                        </h1>
                                        </p>
                                        <P>Ticket For Anywhere
                                        </H5>
                                        </P>
                                    </center>
                                    
                                </td>
                    
                                <td><?php
                        if (!empty($datatiket->logo)) {
                            echo '<img src="'.base_url("gambar/logomaskapai/$datatiket->logo").'" width="200">';
                        }
    ?></td>

    
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
                                                    <table>
                                                       
                                                    <tr class="">
                                                        <th scope="row"> ID Pemesanan :</th>
                                                        <td>ID0<?= $datatiket->id_pemesanan ?></td>
<th width="100"></th>
<th >|</th>
<th width="100"></th>

                                                        <th scope="row">Rute Keberangkatan  :</th>
                                                        <td><?= $datatiket->nama_bandara_a ?>-<?=$datatiket->nama_bandara_t ?></td>
                                                    </tr>
                                                    
                                                         
                                                    <tr class="">
                                                        <th scope="row"> Nomor Tiket :</th>
                                                        <td>TK0<?= $datatiket->id_pemesanan ?></td>
<th width="100"></th>
<th >|</th>
<th width="100"></th>
                                                        <th scope="row">ID Pemesan  :</th>
                                                        <td><?= $datatiket->id_penumpang ?></td>
                                                    </tr>
                                                    
                                                    <tr class="">
                                                        <th scope="row">Tanggal Pemesanan :</th>
                                                        <td><?= $datatiket->tgl_pemesanan ?></td>
<th width="100"></th>
<th >|</th>
<th width="100"></th>
                                                        <th scope="row">Nama Pemesan  :</th>
                                                        <td><?= $datatiket->nama_penumpang ?></td>
                                                    </tr>
                                                    
                                                            
                                                    <tr class="">
                                                        <th scope="row">Tanggal Keberangkatan :</th>
                                                        <td><?= $datatiket->tgl_keberangkatan ?></td>
<th width="100"></th>
<th >|</th>
<th width="100"></th>
                                                        <th scope="row">Nomor Pemesan  :</th>
                                                        <td><?= $datatiket->no_penumpang ?></td>
                                                    </tr>

                                                    <tr class="">
                            
                                                        <th scope="row">Nomor Kursi  :</th>
                                                        <td><?= $datatiket->nomor_kursi ?></td>
                                                    </tr>
                                                    
                                                    
                                                    </table>
                                                    <br>


                                                    <table class="table">
                                                    <tr class="">
                                                        <th scope="row">Maskapai Penerbangan :</th>
                                                        <td><?= $datatiket->nama_maskapai ?></td>
<th width="150"></th>
                                                        <th scope="row">Kelas  :</th>
                                                        <td><?= $datatiket->kelas ?></td>
                                                    </tr>

                                                    <tr class="">
                                                        <th scope="row">Jumlah Tiket :</th>
                                                        <td><?= $datatiket->jml_tiket ?></td>
<th width="150"></th>
                                                        <th scope="row">Jadwal Penerbangan  :</th>
                                                        <td><?= $datatiket->jadwal ?></td>
                                                    </tr>
                                                    
                                                    <tr class="">
                                                        <th scope="row">Tiket Dewasa :</th>
                                                        <td><?= $datatiket->dewasa ?> Orang</td>
<th width="150"></th>
                                                        <th scope="row">Tiket Anak</th>
                                                        <td><?= $datatiket->anak ?> Anak</td>
                                                    </tr>

                                                    <tr class="">
                                                        <th scope="row">Tarif :</th>
                                                        <td><?= $datatiket->tarif ?></td>
<th width="150"></th>
                                                        <th scope="row">Total Biaya</th>
                                                        <td><?= $datatiket->total ?></td>
                                                    </tr>
                                                    <th width="150"></th>
                                                    </table>


<center>
                                                    <p>
                                                Terima Kasih sudah memesan tiket di Mehivra Airport
                    </p>

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





        