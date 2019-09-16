<div class="container">
       <h1>Ubah Data Supplier</h1>
</div>
<br/>
<div class="container">
       <div class="col-6">
              <form action="" method="post">
              <input type="hidden" name="id_supplier" value="<?= $data_supplier['id_supplier'];?>">
                    <div class="form-group">
                            <label for="nama_supplier">Nama Supplier</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="<?= $data_supplier['nama_supplier'];?>">
                            <small class="form-text text-danger"><?= form_error('nama_supplier')?></small>
                     </div>
                     <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data_supplier['alamat_supplier'];?>">
                            <small class="form-text text-danger"><?= form_error('alamat')?></small>
                     </div>
                     <div class="form-group">
                            <label for="noTlp">No Telpon</label>
                            <input type="text" class="form-control" id="noTlp" name="noTlp" value="<?= $data_supplier['no_tlp'];?>">
                            <small class="form-text text-danger"><?= form_error('noTlp')?></small>
                     </div>
                     <button type="submit" name="tambah" class="btn btn-primary">Ubah</button>
              </form>
       </div>
</div>