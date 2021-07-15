<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a target="_blank" href="<?= base_url('laporan/cetak_laporan_pengiriman'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
            <a target="_blank" href="<?= base_url('laporan/laporan_pengiriman_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
            <a target="_blank" href="<?= base_url('laporan/export_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export ke Excel</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Pengiriman</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Penerima</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Layanan</th>
                        <th scope="col">Status</th>
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
                            <td><?= $p['penerima']; ?></td>
                            <td><?= $p['nama_barang']; ?></td>
                            <td><?= $p['layanan']; ?></td>
                            <td class="text-success"><b><?= $p['status']; ?></b></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>