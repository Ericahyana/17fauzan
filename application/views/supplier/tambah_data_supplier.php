<div class="container">
       <h1>Tambah Data Supplier</h1>
</div>
<br/>
<div class="container">
       <div class="col-6">
              <form action="" method="post">
                    <div class="form-group">
                            <label for="nama_supplier">Nama Supplier</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="Masukan Nama Supplier">
                            <small class="form-text text-danger"><?= form_error('nama_supplier')?></small>
                     </div>
                     <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                            <small class="form-text text-danger"><?= form_error('alamat')?></small>
                     </div>
                     <div class="form-group">
                            <label for="noTlp">No Telpon</label>
                            <input type="text" class="form-control" id="noTlp" name="noTlp"placeholder="Masukan No Telepon">
                            <small class="form-text text-danger"><?= form_error('noTlp')?></small>
                     </div>
                     <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
              </form>
       </div>
</div>