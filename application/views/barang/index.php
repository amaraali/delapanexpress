<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#barangbarumodal"><i class="fas fa-plus"></i> Tambah Barang</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No.Resi</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($barang as $b) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $b['nama_barang']; ?></td>
                            <td><?= $b['no_resi']; ?></td>
                            <td><?= $b['berat']; ?></td>
                            <td>
                                <a href="<?= base_url('barang/ubahbarang/') . $b['id_barang']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('barang/hapusbarang/') . $b['id_barang']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['nama_barang']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah barang baru-->
<div class="modal fade" id="barangbarumodal" tabindex="-1" role="dialog" aria-labelledby="barangbaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="barangbaru">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('barang'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" name="no_resi" id="no_resi" placeholder="Masukkan No Resi" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="berat" name="berat" placeholder="Masukkan Berat ">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Menu -->