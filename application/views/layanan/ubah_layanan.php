<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Layanan tidak boleh Kosong</div>');
                redirect('layanan/ubahLayanan/' . $l['id_layanan']);
            } ?>
            <?php foreach ($layanan as $l) { ?>
                <form action="<?= base_url('layanan/ubahlayanan'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_layanan" id="id_layanan" value="<?php echo $l['id_layanan']; ?>">
                        <input type="text" class="form-control form-control-user" id="layanan" name="layanan" placeholder="Masukan Nama Layanan" value="<?= $l['layanan']; ?>" >
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id_layanan" id="id_layanan" value="<?php echo $l['id_layanan']; ?>">
                        <input type="text" class="form-control form-control-user" id="proses" name="proses" placeholder="Masukan Proses" value="<?= $l['proses']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id_layanan" id="id_layanan" value="<?php echo $l['id_layanan']; ?>">
                        <input type="numeric" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukan Harga" value="<?= $l['harga']; ?>">
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