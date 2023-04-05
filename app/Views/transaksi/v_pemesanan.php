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
                        <h4 class="mt-0 header-title">Data Pemesanan Tiket</h4>
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
                                                
                                                <th>Action</th>
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
                                                    


                                                    <td>
                                                        <a type="button" class="btn btn-info btn-sm" href="<?= site_url('pemesanan/cetak_tiket/' . $val['id']) ?>">
                                                            <i class="fa fa-print"> Print</i>
                                                        </a>


                                                        <!-- <a class="btn btn-danger btn-sm"  href="<?= base_url('pemesanan/batalkan/' . $val['id']) ?>" onclick="return confirm('Apakah Anda yakin untuk membatalkannya?')"> <i class="fa fa-recycle"> Batal</i></a></td> -->
      
                                                    </td>

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





<form action="<?=base_url ()?>/pemesanan/save_pemesanan" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ini adalah script -->
                  
 



<script>



    function cekRute() {
      var asal = document.getElementById("nama_bandara_a").value;
      var tujuan = document.getElementById("nama_bandara_t").value;
      var tarif = document.getElementById("tarif");
      var jadwal = document.getElementById("jadwal");
      var kelas = document.getElementById("kelas").value;
      var maskapai = document.getElementById("maskapai").value;
      var tiketAnak = document.getElementById("anak").value;
  var tiketDewasa = document.getElementById("dewasa").value;
  if (tiketAnak === "") {
    tiketAnak = 0;
}

if (tiketDewasa === "") {
    tiketDewasa = 0;
}
  var totalTiket = parseInt(tiketAnak) + parseInt(tiketDewasa);
  document.getElementById("jml_tiket").value = totalTiket;
 

      var total = 0;
     
      

      if ((asal == "Minangkabau" && tujuan == "Fatmawati") || (asal == "Fatmawati" && tujuan == "Minangkabau") ){
        keterangan.value = "Rute tersedia";
        tarif.value = "500000";
        
        jadwal.innerHTML = "<option value='19.00'>19.00 WIB</option><option value='22.00'>22.00 WIB</option>";
      }
     


      else if((asal == "Minangkabau" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Minangkabau" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Minangkabau" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Minangkabau" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Minangkabau")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Minangkabau")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Minangkabau" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Minangkabau")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Minangkabau" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Minangkabau")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}



else if((asal == "Sultan Syarif Kasim II " && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Sultan Syarif Kasim II " && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Sultan Syarif Kasim II ")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Sultan Syarif Kasim II ")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Sultan Syarif Kasim II ")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Sultan Syarif Kasim II " && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Sultan Syarif Kasim II ")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}




else if((asal == "Halim Perdana Kusuma" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "1200000";
    jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
    }


    else if((asal == "Halim Perdana Kusuma" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "2000000";
    jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

    }

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "700000";
    jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "800000";
    jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "650000";
    jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "600000";
    jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "1000000";
    jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
    }  

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Halim Perdana Kusuma")){
    keterangan.value = "Rute tersedia";
    tarif.value = "750000";
    jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Halim Perdana Kusuma")){
    keterangan.value = "Rute tersedia";
    tarif.value = "600000";
    jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
    } 

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Halim Perdana Kusuma")){
    keterangan.value = "Rute tersedia";
    tarif.value = "450000";
    jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
    }

    else if ((asal == "Halim Perdana Kusuma" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Halim Perdana Kusuma")) {
    keterangan.value = "Rute tersedia";
    tarif.value = "400000";
    jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
    }


    

else if((asal == "Lunyuk" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Lunyuk" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Lunyuk" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Lunyuk" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Lunyuk")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Lunyuk")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Lunyuk" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Lunyuk")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Lunyuk" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Lunyuk")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}



else if((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Sultan Aji Muhammad Sulaiman")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Sultan Aji Muhammad Sulaiman")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Sultan Aji Muhammad Sulaiman")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Sultan Aji Muhammad Sulaiman")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}



else if((asal == "Fatmawati" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Fatmawati" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Fatmawati" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Fatmawati" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Fatmawati")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Fatmawati")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Fatmawati" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Fatmawati")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Fatmawati" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Fatmawati")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}



else if((asal == "Sultan Iskandar Muda" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Sultan Iskandar Muda" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Sultan Iskandar Muda")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Sultan Iskandar Muda")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Sultan Iskandar Muda")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Sultan Iskandar Muda" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Sultan Iskandar Muda")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}




else if((asal == "Kualanamu" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Kualanamu" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Kualanamu" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Kualanamu" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Kualanamu")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Kualanamu")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Kualanamu" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Kualanamu")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Kualanamu" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Kualanamu")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}



else if((asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Raja Haji Fisabilillah" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Raja Haji Fisabilillah")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Raja Haji Fisabilillah")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Raja Haji Fisabilillah")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Raja Haji Fisabilillah" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Raja Haji Fisabilillah")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}




else if((asal == "Radin Inten II" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Radin Inten II" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Radin Inten II" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Radin Inten II" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Radin Inten II")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Radin Inten II")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Radin Inten II" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Radin Inten II")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Radin Inten II" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Radin Inten II")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}

else if((asal == "Soekarno Hatta" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Soekarno Hatta" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Soekarno Hatta" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Soekarno Hatta" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Soekarno Hatta")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Soekarno Hatta")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Soekarno Hatta" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Soekarno Hatta")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Soekarno Hatta" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Soekarno Hatta")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}




else if((asal == "H.A.S Hanandjoeddin" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "H.A.S Hanandjoeddin" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "H.A.S Hanandjoeddin")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "H.A.S Hanandjoeddin")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "H.A.S Hanandjoeddin")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "H.A.S Hanandjoeddin" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "H.A.S Hanandjoeddin")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}

else if((asal == "Sultan Thaha" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Sultan Thaha" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Sultan Thaha" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Sultan Thaha" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Sultan Thaha")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Sultan Thaha")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Sultan Thaha" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Sultan Thaha")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Sultan Thaha" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Sultan Thaha")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}


else if((asal == "Syamsuddin Noor" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Internasional Sultan Aji Muhammad Sulaiman" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "1200000";
jadwal.innerHTML = "<option value='08.00'>08.00 WIB</option><option value='14.00'>14.00 WIB</option>";
}


else if((asal == "Syamsuddin Noor" && tujuan == "Radin Inten II") || (asal == "Radin Inten II" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "2000000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";

}

else if ((asal == "Syamsuddin Noor" && tujuan == "Sultan Syarif Kasim II") || (asal == "Sultan Syarif Kasim II" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "700000";
jadwal.innerHTML = "<option value='10.00'>10.00 WIB</option><option value='14.00'>14.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Halim Perdana Kusuma") || (asal == "Halim Perdana Kusuma" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "800000";
jadwal.innerHTML = "<option value='8.00'>8.00 WIB</option><option value='12.00'>12.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Sultan Aji Muhammad Sulaiman") || (asal == "Sultan Aji Muhammad Sulaiman" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "650000";
jadwal.innerHTML = "<option value='11.00'>11.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Raja Haji Fisabilillah") || (asal == "Raja Haji Fisabilillah" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='9.00'>9.00 WIB</option><option value='17.00'>17.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Soekarno Hatta") || (asal == "Soekarno Hatta" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "1000000";
jadwal.innerHTML = "<option value='7.00'>7.00 WIB</option><option value='20.00'>20.00 WIB</option>";
}  

else if ((asal == "Syamsuddin Noor" && tujuan == "Syamsuddin Noor") || (asal == "Syamsuddin Noor" && tujuan == "Syamsuddin Noor")){
keterangan.value = "Rute tersedia";
tarif.value = "750000";
jadwal.innerHTML = "<option value='07.00'>07.00 WIB</option><option value='11.00'>11.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Sultan Iskandar Muda") || (asal == "Sultan Iskandar Muda" && tujuan == "Syamsuddin Noor")){
keterangan.value = "Rute tersedia";
tarif.value = "600000";
jadwal.innerHTML = "<option value='09.00'>09.00 WIB</option><option value='15.00'>15.00 WIB</option>";
} 

else if ((asal == "Syamsuddin Noor" && tujuan == "Lunyuk") || (asal == "Lunyuk" && tujuan == "Syamsuddin Noor")){
keterangan.value = "Rute tersedia";
tarif.value = "450000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='17.00'>17.00 WIB</option>";
}

else if ((asal == "Syamsuddin Noor" && tujuan == "Kualanamu") || (asal == "Kualanamu" && tujuan == "Syamsuddin Noor")) {
keterangan.value = "Rute tersedia";
tarif.value = "400000";
jadwal.innerHTML = "<option value='12.00'>12.00 WIB</option><option value='15.00'>15.00 WIB</option>";
}
else {
        tarif.value = "";
        jadwal.innerHTML = "";
        keterangan.value = "Rute tidak tersedia";
        
      }



      var maskapai = document.getElementById("maskapai").value;
      if (maskapai == "Garuda Indonesia") {
        if (kelas == "bisnis") {
          total += 300000;
          
        }
        else if (kelas == "ekonomi") {
          total += 250000;
        }
      }
      else if (maskapai == "Lion Air") {
        if (kelas == "bisnis") {
          total += 200000;
        }
        else if (kelas == "ekonomi") {
          total += 100000;
        }
      }
      else if (maskapai == "Citilink") {
        if (kelas == "bisnis") {
          total += 250000;
        }
        else if (kelas == "ekonomi") {
          total += 200000;
        }
      }

      else if (maskapai == "Asia Link") {
        if (kelas == "bisnis") {
          total += 100000;
        }
        else if (kelas == "ekonomi") {
          total += 50000;
        }
      }
      else if (maskapai == "Batik Air") {
        if (kelas == "bisnis") {
          total += 150000;
        }
        else if (kelas == "ekonomi") {
          total += 100000;
        }
      }
      else if (maskapai == "Mandala Air") {
        if (kelas == "bisnis") {
          total += 120000;
        }
        else if (kelas == "ekonomi") {
          total += 80000;
        }
      }

      else {
        if (kelas == "bisnis") {
          total += 700000;
        }
        else if (kelas == "ekonomi") {
          total += 400000;
        }
      }




        var     ta=(total * parseInt(tiketAnak))/2/2;
        var     td=(total * parseInt(tiketDewasa));
        var tt=td+ta;

    //   document.getElementById("total").value = "Rp."+tt;
      tt += parseInt(tarif.value.replace("Rp. ", "").replace(".", ""));
   
      document.getElementById("total").value = "Rp. " + tt.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function validate() {
        var dewasa = document.getElementById("dewasa").value;
        var anak = document.getElementById("anak").value;

        if (dewasa == "") {
          alert("Mohon masukkan jumlah dewasa");
          document.getElementById("anak").disabled = true;
          return false;
        } else {
          document.getElementById("anak").disabled = false;
        }
      }
  </script>


<body>
  <form>
   
<!--    
  <label for="maskapai">Maskapai:</label><br>
    <select name="maskapai" class="form-control" id="maskapai" onchange="cekRute()">
      <option value="">Pilih Maskapai</option>
      <option value="Garuda">Garuda</option>
      <option value="Lion Air">Lion Air</option>
      <option value="Citilink">Citilink</option>
      <option value="Mandala Air">Mandala Air</option>
      <option value="Batik Air">Batik Air</option>
      <option value="Asia Link">Asia Link</option>
    </select><br>
    <label for="kelas">Kelas:</label><br>
    <select name="kelas" class="form-control" id="kelas" onchange="cekRute()">
      <option value="">Pilih Kelas</option>
      <option value="bisnis">Bisnis</option>
      <option value="ekonomi">Ekonomi</option>
    </select><br> -->
  
  </form>



                <div class="row">
                    <div class="col-md-6">
                   
                        <label>Tanggal Pemesanan</label>
                        <input type="date" class="form-control tgl_pemesanan" name="tgl_pemesanan"  value="<?php echo date('Y-m-d') ?>" readonly>
                    </div>
                    <div class="col-md-6">
                   
                   <label>Tanggal Keberangkatan</label>
                   <input type="date" class="form-control tgl_keberangkatan" name="tgl_keberangkatan">
               </div>
                    <div class="col-md-12">
                        <label>Pemesan</label>
                        <div class="row">
                            <div class="col-sm-1">
                            <div class="form-group">
                        <br>
                        
                                    <button  type="button" data-toggle="modal" data-target="#modal_pasien" id="buka_pasien" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></button>
                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">
                        
                            </div>
                            <div class="col-sm-3">
                        <div class="form-group">
                                    <label>ID Pemesan</label>
                                    <input type="text" name="id_penumpang"  id="id_penumpang" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Nama Pemesan</label>
                                    <input type="text"  id="nama_penumpang" name="nama_penumpang" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No Pemesan</label>
                                    <input type="text"  id="no_penumpang" name="no_penumpang" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>







    
                    <div class="col-md-12">
                        <label>Asal Keberangkatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tujuan Keberangkatan</label>
                        <div class="row">
                        <div class="col-sm-1">
                                <div class="form-group">
                        <br>
                        
                                    <button type="button" data-toggle="modal" data-target="#modal_bandara_a" class="btn btn-xs btn-primary"><i class="fa fa-book"></i></button>
                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">
                        
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nama Bandara</label>
                                    <input type="text"  id="nama_bandara_a" name="nama_bandara_a" onkeyup="cekRute()"class="form-control" >
                                </div>
                              
                            </div>


                            <div class="col-sm-1">
                                <div class="form-group">
                        <br>
                        
                        <button onclick="cekRute()"  type="button" id="swap" class="btn btn-xs btn-primary" >< ></i></button>
                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">
                        
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        
                            <div class="col-sm-1">
                           
                                <div class="form-group">
                        <br>
                       
                         
                                    <button type="button" data-toggle="modal" data-target="#modal_bandara_t" class="btn btn-xs btn-primary" ><i class="fa fa-book"></i></button>
                                </div>
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">
                        
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nama Bandara</label>
                                    <input type="text"  id="nama_bandara_t" name="nama_bandara_t" class="form-control"onkeyup="cekRute()" >
                                </div>
                            </div>
                            </div>
                            <script>
  document.getElementById("swap").addEventListener("click", function(){
    var temp = document.getElementById("nama_bandara_a").value;
    document.getElementById("nama_bandara_a").value = document.getElementById("nama_bandara_t").value;
    document.getElementById("nama_bandara_t").value = temp;
  });
</script>
<div class="row">

                    <div class="col-md-6">
                    
                        <label>Maskapai</label>
                        <select name="maskapai" class="form-control" id="maskapai" onchange="cekRute()">
                            <option value="">Pilih Maskapai</option>
                            <?php
                            foreach ($maskapai as $keymaskapai => $valmaskapai) {
                                echo '<option value="' . $valmaskapai['id_maskapai'] . '">' . $valmaskapai['nama_maskapai'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

       

                    <div class="col-md-6">  
    <label for="kelass">Kelas</label><br>
    <select name="kelas" class="form-control" id="kelas" onchange="cekRute()">
      <option value="">Pilih Kelas</option>
      <option value="bisnis">Bisnis</option>
      <option value="ekonomi">Ekonomi</option>
      
    </select><br>
                    </div>
                    </div>
                            <div class="row">
                           
                                <div class="col-md-5">
                   
    <label>Dewasa</label>
                   <input type="text" class="form-control" name="dewasa" id="dewasa" onchange="validate()" onkeyup="cekRute()">
<br>

    
               </div>

                                <div class="col-md-5">
                              
                 
    <label>Anak</label>
                   <input type="text" class="form-control" name="anak" id="anak" onkeyup="cekRute()">
               </div>

                                </div>
                           
                          
                            <div class="row">
                
                    <div class="col-md-2">
                   
                   <label>Jadwal</label>
                   <select id="jadwal" name="jadwal" class="form-control"></select>
                  
  
               </div>
               <div class="col-md-2">
            
                              <label>Jumlah</label>
                              <input type="text" id="jml_tiket" name="jml_tiket" readonly class="form-control">
                          </div>
               <div class="col-md-4">
                   
                   <label>Tarif</label>
                   <input type="text" id="tarif" name="tarif" readonly class="form-control">
               </div>

               <div class="col-md-4">
                   
                   <label>Total Harga</label>
             
                   <input type="text" id="total" name="total" readonly class="form-control">
                   <!-- <input type="text" id="total" readonly> -->
               </div>

                            </div>



                        
               

</div>


<div class="col-md-4">
                                <br>
                  
                 
    <input type="text" id="keterangan" readonly class="form-control">
  
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











<div class="modal fade" id="modal_pasien">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Pemesan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    

               <div class="col-sm-12">
                                <div class="form-group">
                                   
                                    <input type="text" id="cari" placeholder="Cari Pemesan" class="form-control">
                                </div>
                            </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Pemesan</th>
                            <th>Nama Pemesan</th>
                            <th>No Pemesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($penumpang as $d) :
                            $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $d->id_penumpang ?></td>
                                <td><?= $d->nama_penumpang ?></td>
                                <td><?= $d->no_penumpang?></td>
                
                                <td>
                                    <button   type="button" class="btn btn-primary" onclick="return pilih_penumpang('<?= $d->id_penumpang ?>','<?= $d->nama_penumpang ?>','<?= $d->no_penumpang ?>')">
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
            <button type="button" class="btn btn-danger pull-left" id="penumpang">Close</button>
            </div>
        </div>
    </div>
</div>






<div class="modal fade" id="modal_bandara_a">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Bandara Asal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>


               <div class="col-sm-12">
                                <div class="form-group">
                                   
                                    <input type="text" id="search" placeholder="Cari asal keberangkatan" class="form-control">
                                </div>
                            </div>

               <br>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Bandara</th>
                            <th>Nama Bandara</th>
                            <th>Provinsi</th>
                           
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($bandara as $d) :
                            $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $d->id_bandara ?></td>
                                <td><?= $d->nama_bandara ?></td>
                                <td><?= $d->provinsi ?></td>
                    
                
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="return pilih_bandara_a('<?= $d->nama_bandara ?>')">
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
                <button type="button" class="btn btn-danger pull-left" id="tutup_bandara_a">Close</button>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="modal_bandara_t">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Bandara Tujuan</h4>
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
                            <th>Id Bandara</th>
                            <th>Nama Bandara</th>
                            <th>Provinsi</th>
                           
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($bandara as $d) :
                            $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?= $d->id_bandara ?></td>
                                <td><?= $d->nama_bandara ?></td>
                                <td><?= $d->provinsi ?></td>
                    
                
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="return pilih_bandara_t('<?= $d->nama_bandara ?>')">
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
        $('#modal_bandara_a').modal('hide');
        $('#modal_bandara_t').modal('hide');
        $('#modal_pasien').modal('hide');
        // $('#modal_pasien').modal('hide');
        $('#addmodal.close').click()
        $('#modal_bandara_a.close').click()
        $('#modal_bandara_t.close').click()
        $('#modal_pasien.close').click()
    });

    $('#penumpang').on('click', function() {
        $('#modal_pasien').modal('hide');
        $('#modal_pasien.close').click()
    });




    $('#tutup_bandara_a').on('click', function() {
        $('#modal_bandara_a').modal('hide');
        $('#modal_bandara_a.close').click()
    });
 
    $('#tutup_bandara_t').on('click', function() {
        $('#modal_bandara_t').modal('hide');
        $('#modal_bandara_t.close').click()
    });

    
    function pilih_penumpang(id_penumpang, nama_penumpang,no_penumpang) {
        $('#id_penumpang').val(id_penumpang);
        $('#nama_penumpang').val(nama_penumpang);
        $('#no_penumpang').val(no_penumpang);
        $('#modal_pasien').modal().hide();
        $('#modal_pasien.close').click()
        // $('#modal_obat .close').click()

    }
        function pilih_bandara_a(nama_bandara_a) {

        $('#nama_bandara_a').val(nama_bandara_a);
        $('#modal_bandara_a.close').click()
        $('#modal_bandara_a').modal().hide();
        // $('#modal_obat .close').click()
    }

    function pilih_bandara_t(nama_bandara_t) {

$('#nama_bandara_t').val(nama_bandara_t);
$('#modal_bandara_t.close').click()
$('#modal_bandara_t').modal().hide();
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