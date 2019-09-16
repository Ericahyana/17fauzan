<div class="container">
       <h1>Tambah Data Barang</h1>
</div>
<br/>
<div class="container">
       <div class="col-6">
              <form action="" method="post">
                     <div class="card-body">
                     <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
                            <small class="form-text text-danger"><?= form_error('kode_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang">
                            <small class="form-text text-danger"><?= form_error('nama_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi')?></small>
                     </div>
                     <div class="form-group">
                            <label for="exampleInputPassword1">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Jumlah Barang">
                            <small class="form-text text-danger"><?= form_error('harga')?></small>
                     </div>
                     <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
              </form>
       </div>
</div>