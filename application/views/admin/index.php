<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- row ux-->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2 bg-primary">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Layanan</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $this->ModelLayanan->getLayanan()->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('layanan'); ?>"><i class="fa fa-list-alt fa-3x text-warning"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2 bg-warning">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Barang</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $this->ModelBarang->getBarang()->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('barang'); ?>"><i class="fas fa-briefcase fa-3x text-primary"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2 bg-danger">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Kurir</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $this->ModelKurir->getKurir()->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('kurir'); ?>"><i class="fa fa-fw fa-users fa-3x text-success"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2 bg-success">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Pelanggan</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?= $this->ModelPelanggan->getPelanggan()->num_rows(); ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('pelanggan'); ?>"><i class="fa fa-fw fa-users fa-3x text-danger"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  <!-- End row ux-->

   <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- row table-->
  <div class="row">
    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fas fa-truck text-primary mt-2 "> Data Pengiriman</span>
        <a class="text-danger" href="<?= base_url('pengiriman'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
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
                    </tr>
                    <?php } ?>
                </tbody>
      </table>
    </div>


    <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span class="fa fa-fw fa-address-book text-warning mt-2"> Laporan Pengiriman</span>
        <a href="<?= base_url('laporan'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
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
  </div>
  <!-- end of row table-->
  </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->