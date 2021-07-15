<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
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
                            <a href="<?= base_url('userkurir/ubahpengiriman/').$p['id_pengiriman'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>