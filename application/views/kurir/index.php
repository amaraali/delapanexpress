<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#kurirbarumodal"><i class="fas fa-plus"></i> Tambah Kurir</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($kurir as $k) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $k['nama_kurir']; ?></td>
                            <td><?= $k['jenis_kelamin']; ?></td>
                            <td><?= $k['telepon']; ?></td>
                            <td><?= $k['alamat']; ?></td>
                            <td>
                                <a href="<?= base_url('kurir/ubahkurir/') . $k['id_kurir']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('kurir/hapuskurir/') . $k['id_kurir']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['nama_kurir']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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

<!-- Modal Tambah kurir baru-->
<div class="modal fade" id="kurirbarumodal" tabindex="-1" role="dialog" aria-labelledby="kurirbaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurirbaru">Tambah Kurir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kurir'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_kurir" id="nama_kurir" placeholder="Masukkan Nama " class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                            <option>- Pilih Jenis Kelamin -</option>
                            <option id="jenis_kelamin" >Laki-laki</option>
                            <option id="jenis_kelamin" >Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Masukkan No.Telepon ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat ">
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