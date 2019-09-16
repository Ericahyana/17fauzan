<div class="container">
       <h1>Ubah Data customer</h1>
</div>
<br/>
<div class="container">
       <div class="col-6">
              <form action="" method="post">
              <input type="hidden" name="id_customer" value="<?= $data_customer['id_customer'];?>">
                    <div class="form-group">
                            <label for="nama_customer">Nama customer</label>
                            <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="<?= $data_customer['nama_customer'];?>">
                            <small class="form-text text-danger"><?= form_error('nama_customer')?></small>
                     </div>
                     <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_customer['alamat_customer'];?>">
                            <small class="form-text text-danger"><?= form_error('alamat')?></small>
                     </div>
                     <div class="form-group">
                            <label for="noTlp">No Telpon</label>
                            <input type="text" class="form-control" id="noTlp" name="noTlp" value="<?= $data_customer['no_tlp'];?>">
                            <small class="form-text text-danger"><?= form_error('noTlp')?></small>
                     </div>
                     <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
              </form>
       </div>
</div>