<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Pelanggan tidak boleh Kosong</div>');
                redirect('Pelanggan/ubahpelanggan/' . $p['id_pelanggan']);
            } ?>
            <?php foreach ($pelanggan as $p) { ?>
                <form action="<?= base_url('Pelanggan/ubahpelanggan'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="<?php echo $p['id_pelanggan']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukan Nama Pelanggan" value="<?= $p['nama_pelanggan']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Masukan No Telepon" value="<?= $p['telepon']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $p['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>