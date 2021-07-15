<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#layananBaruModal"><i class="fas fa-plus"></i> Tambah Layanan</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Proses</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $a = 1;
                    foreach ($layanan as $l) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $l['layanan']; ?></td>
                            <td><?= $l['proses']; ?></td>
                            <td>Rp. <?= $l['harga']; ?></td>
                            <td>
                                <a href="<?= base_url('layanan/ubahlayanan/') . $l['id_layanan']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('layanan/hapuslayanan/') . $l['id_layanan']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $l['layanan']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

<!-- Modal Tambah layanan baru-->
<div class="modal fade" id="layananBaruModal" tabindex="-1" role="dialog" aria-labelledby="layananBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="layananBaruModalLabel">Tambah Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('layanan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="layanan" id="layanan" placeholder="Masukkan Nama Layanan" class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="proses" name="proses" placeholder="Masukkan proses">
                    </div>
                    <div class="form-group">
                        <input type="numeric" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan harga">
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