<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Barang tidak boleh Kosong</div>');
                redirect('barang/ubahbarang/' . $b['id_barang']);
            } ?>
            <?php foreach ($barang as $b) { ?>
                <form action="<?= base_url('barang/ubahbarang'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_barang" id="id_barang" value="<?php echo $b['id_barang']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" value="<?= $b['nama_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="no_resi" name="no_resi" placeholder="Masukkan Nomor Resi" value="<?= $b['no_resi']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="berat" name="berat" placeholder="Masukkan Berat" value="<?= $b['berat']; ?>">
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