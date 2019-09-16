<div class="container">
       <h1>Input Barang Keluar</h1>
</div>
<br/>
<div class="container">
<?php if($this->session->flashdata('data')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Barang Keluar <strong>berhasil</strong> <?= $this->session->flashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if($this->session->flashdata('data_error')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Barang Keluar <strong>Gagal</strong> <?= $this->session->flashdata('data_error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
       <div class="col-6">
              <form action="" method="post">
                     <div class="form-group">
                            <label for="id_barang">Nama Barang</label>
                            <select class="form-control" id="id_barang" name="id_barang" >
                                   <option value="" selected="" disabled="">-</option>
                                   <?php foreach ($data_barang as $data_barang): ?>
                                   <option value="<?=$data_barang ['id_barang']; ?>"><?=$data_barang ['nama_barang']; ?></option>
                                   <?php endforeach;?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="id_customer">Nama Customer</label>
                            <select class="form-control" id="id_customer" name="id_customer">
                                   <option value="" selected="" disabled="">-</option>
                                   <?php foreach ($data_customer as $data_customer): ?>
                                   <option value="<?=$data_customer ['id_customer']; ?>"><?=$data_customer ['nama_customer']; ?></option>
                                   <?php endforeach;?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_customer')?></small>
                     </div>
                     <div class="form-group">
                            <label for="jumlah">Jumlah Barang</label>
                            <input type="limit" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Barang">
                            <small class="form-text text-danger"><?= form_error('jumlah')?></small>
                     </div>
                     <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                            <small class="form-text text-danger"><?= form_error('catatan')?></small>
                     </div>
                     <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
       </div>
</div>