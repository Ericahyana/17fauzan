<div class="container">
       <h1>Input Barang Masuk</h1>
</div>
<br/>
<div class="container">
<?php if($this->session->flashdata('data')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Barang Masuk <strong>berhasil</strong> <?= $this->session->flashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
       <div class="col-6">
              <form action="<?= base_url('input_barang_masuk');?>" method="post">
                     <div class="form-group">
                            <label for="id_barang">Nama Barang</label>
                            <select class="form-control" id="id_barang" name="id_barang">
                                   <option value="" selected="" disabled="">-</option>
                                   <?php foreach ($data_barang as $data_barang): ?>
                                   <option value="<?=$data_barang ['id_barang']; ?>"><?=$data_barang ['nama_barang']; ?></option>
                                   <?php endforeach;?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="id_supplier">Nama Supplier</label>
                            <select class="form-control" id="id_supplier" name="id_supplier">
                                   <option value="" selected="" disabled="">-</option>
                                   <?php foreach ($data_supplier as $data_supplier): ?>
                                   <option value="<?=$data_supplier ['id_supplier']; ?>"><?=$data_supplier ['nama_supplier']; ?></option>
                                   <?php endforeach;?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('id_supplier')?></small>
                     </div>
                     <div class="form-group">
                            <label for="jumlah">Jumlah Barang</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Barang">
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