<!-- <img src="<?= base_url() ?>assets/img/banner2.png" width="100%" height="500px"> -->
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?= base_url() ?>assets/img/yuki.png" alt="" width="15%">
    <h2>Data Pengiriman</h2>
    <p class="lead">PT. DELAPAN GROUP INDONESIA</p>
  </div>
</div>
<div class="container">

  <div class="row mt-3">
    <div class="col-md-6">

      <form class="need-validation" action="" method="post">
        <label class="text-black"><b>
            <font>Cari Data Pengiriman</font>
          </b>
          <img src="<?= base_url() ?>assets/img/delivery-time.png" width="5%">
        </label>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Masukan id pengiriman" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <hr class="mb-4">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID Pengiriman</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Kurir</th>
          <th scope="col">Penerima</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($data_pengiriman as $p) { ?>
          <tr>
            <td><?= $p['id_pengiriman']; ?></td>
            <td><?= $p['tanggal']; ?></td>
            <td><?= $p['nama_kurir']; ?></td>
            <td><?= $p['penerima']; ?></td>
            <td><?= $p['keterangan']; ?></td>
            <td class="text-success"><b><?= $p['status']; ?></b></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>


</div>