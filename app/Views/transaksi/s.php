<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isihome') ?>

<div class="col-sm-12">
    <div class="page-content-wrapper ">
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h4 class="mt-0 header-title">Data Kunjungan Pasien</h4>
                    </div>
                    <div class="card-body">

                        <div class="col-md-12">
                            <button type="button" class="btn btn-sm btn-primary" data-target="#addModal" data-toggle="modal">Tambah Data</button>
                        </div>
                        <br>
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-sm table-striped" id="datadokter">
                                        <thead>
                                            <tr role="row">
                                                <th>No</th>
                                                <th>No Rekam Medis</th>
                                                <th>Tanggal Berobat</th>
                                                <th>Nama Pasien</th>
                                                <th>Jenis Poli</th>
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
                                                    <td><?= 'RM0' . $val['id_pemesanan'] ?></td>
                                                    <td><?= $val['tgl_pemesanan'] ?></td>
                                                    <td><?= $val['nama_penumpang']; ?></td>
                                                    <td><?= $val['nama_maskapai']; ?></td>
                                                    


                                                    <td>
                                                        <a type="button" class="btn btn-info btn-sm" href="<?= site_url('dokter/cetak_antrian/' . $val['id']) ?>">
                                                            <i class="fa fa-print"> Print</i>
                                                        </a>
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

<?= $this->endSection('') ?>