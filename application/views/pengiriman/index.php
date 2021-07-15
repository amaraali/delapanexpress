<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#pengirimanbarumodal"><i class="fas fa-plus"></i> Tambah Pengiriman</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Pengiriman</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Kurir</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $a = 1;
                        foreach ($data_pengiriman as $p) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $p['id_pengiriman']; ?></td>
                        <td><?= $p['tanggal']; ?></td>
                        <td><?= $p['nama_pelanggan']; ?></td>
                        <td><?= $p['nama_barang']; ?></td>
                        <td><?= $p['nama_kurir']; ?></td>
                        <td><?= $p['layanan']; ?></td>
                        <td><?= $p['penerima']; ?></td>
                        <td><?= $p['keterangan']; ?></td>
                        <td class="text-success"><b><?= $p['status']; ?></b></td>
                        <td>
                            <a href="<?= base_url('pengiriman/ubahpengiriman/').$p['id_pengiriman'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('pengiriman/hapuspengiriman/').$p['id_pengiriman'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$p['id_pengiriman'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
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
<div class="modal fade" id="pengirimanbarumodal" tabindex="-1" role="dialog" aria-labelledby="pengirimanbaruLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kurirbaru">Tambah Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengiriman'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="id_pengiriman" id="id_pengiriman" placeholder="Masukan Id Pengiriman " class="form-control form-control-user">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control form-control-user" id="tanggal" name="tanggal" value="<?=date('Y-m-d')?>" placeholder="Masukkan Tanggal ">
                    </div>
                    <div class="form-group">
                        <select name="id_pelanggan" id="id_pelanggan" class="form-control form-control-user">
                            <option value="">- Pilih Pelanggan -</option>
                            <?php
                            foreach ($pelanggan as $p) { ?>
                                <option value="<?= $p['id_pelanggan'];?>"><?= $p['nama_pelanggan'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="id_barang" id="id_barang" class="form-control form-control-user" multiple="">
                            <option value="">- Pilih Barang -</option>
                            <?php
                            foreach ($barang as $b) { ?>
                                <option value="<?= $b['id_barang'];?>"><?= $b['nama_barang'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="id_kurir" id="id_kurir" class="form-control form-control-user">
                            <option value="">- Pilih Kurir -</option>
                            <?php
                            foreach ($kurir as $k) { ?>
                                <option value="<?= $k['id_kurir'];?>"><?= $k['nama_kurir'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="id_layanan" id="id_layanan" class="form-control form-control-user">
                            <option value="">- Pilih Layanan -</option>
                            <?php
                            foreach ($layanan as $l) { ?>
                                <option value="<?= $l['id_layanan'];?>"><?= $l['layanan'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukan Keterangan ">
                    </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control form-control-user">
                            <option>- Pilih Status -</option>
                            <option id="status" >Dikirim</option>
                            <option id="status" >Diterima</option>
                        </select>
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