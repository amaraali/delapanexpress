<!-- Begin Page Content -->
<div class="container-fluid">

   <div class="table-responsive table-bordered col-sm-12 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fa fa-fw fa-address-book text-warning mt-2"> Laporan Pengiriman</span>
        <a href="<?= base_url('gudang/laporan'); ?>>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
      </div>
      <div class="table-responsive">
        <table class="table mt-3" id="table-datatable">
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
  <!-- end of row table-->

</div>
</div>