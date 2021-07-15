<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama pengiriman tidak boleh Kosong</div>');
                redirect('pengiriman/ubahpengiriman/' . $p['id_pengiriman']);
            } ?>
            <?php foreach ($pengiriman as $p) { ?>
                <form action="<?= base_url('pengiriman/ubahpengiriman'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_pengiriman" id="id_pengiriman" value="<?php echo $p['id_pengiriman']; ?>">
                        <input type="text" class="form-control form-control-user" id="id_pengiriman" name="id_pengiriman" disabled value="<?= $p['id_pengiriman']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="tanggal" name="tanggal" value="<?= $p['tanggal']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="id_pelanggan" name="id_pelanggan" value="<?= $p['id_pelanggan']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="id_barang" name="id_barang" value="<?= $p['id_barang']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="id_kurir" name="id_kurir" value="<?= $p['id_kurir']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="id_layanan" name="id_layanan" value="<?= $p['id_layanan']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="penerima" name="penerima" placeholder="Masukkan Penerima" value="<?= $p['penerima']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan"  placeholder="Masukkan Keterangan" value="<?= $p['keterangan']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="status" id="status" class="form-control form-control-user">
                            <option>- Pilih Status -</option>
                            <option id="status" >Dikirim</option>
                            <option id="status" >Diterima</option>
                        </select>
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