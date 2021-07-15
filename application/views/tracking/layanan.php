<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?= base_url() ?>assets/img/yuki.png" alt="" width="15%">
    <h2>Daftar Layanan DELAPAN EXPRESS</h2>
    <p class="lead">PT. DELAPAN GROUP INDONESIA</p>
  </div>
</div>
<div class="container pt-3 pb-3">

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Layanan</th>
        <th scope="col">Proses</th>
        <th scope="col">Harga</th>
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
        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>

<div class="container text-center">
  <img src="<?= base_url() ?>assets/img/barang.png" width="90%">
</div>