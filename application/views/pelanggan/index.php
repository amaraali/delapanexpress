<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#pelangganbarumodal"><i class="fas fa-plus"></i> Tambah Pelanggan</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($pelanggan as $p) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $p['nama_pelanggan']; ?></td>
                            <td><?= $p['telepon']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td>
                                <a href="<?= base_url('pelanggan/ubahpelanggan/') . $p['id_pelanggan']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('pelanggan/hapuspelanggan/') . $p['id_pelanggan']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $p['nama_pelanggan']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

<!-- Modal Tambah pelanggan baru-->
<div class="modal fade" id="pelangganbarumodal" tabindex="-1" role="dialog" aria-labelledby="pelangganbaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurirbaru">Tambah Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pelanggan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukan Nama Pelanggan " class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Masukan No Telepon ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Alamat ">
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