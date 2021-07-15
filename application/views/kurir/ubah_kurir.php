<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Nama Kurir tidak boleh Kosong</div>');
                redirect('kurir/ubahKurir/' . $k['id_kurir']);
            } ?>
            <?php foreach ($kurir as $k) { ?>
                <form action="<?= base_url('kurir/ubahkurir'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_kurir" id="id_kurir" value="<?php echo $k['id_kurir']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama_kurir" name="nama_kurir" placeholder="Masukkan Nama Kurir" value="<?= $k['nama_kurir']; ?>">
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-user">
                            <option value="<?= $k['jenis_kelamin']; ?>"><?= $k['jenis_kelamin']; ?></option>
                            <option id="jenis_kelamin" >Laki-laki</option>
                            <option id="jenis_kelamin" >Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Masukkan No. Telepon" value="<?= $k['telepon']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="<?= $k['alamat']; ?>">
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