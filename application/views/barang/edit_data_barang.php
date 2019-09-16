<div class="container">
       <h1>Ubah Data Barang</h1>
</div>
<br/>
<div class="container">
       <div class="col-6">
              <form action="" method="post">
                     <input type="hidden" name="id_barang" value="<?= $data_barang['id_barang'];?>">
                     <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?=$data_barang['kode_barang']?>">
                            <small class="form-text text-danger"><?= form_error('kode_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?=$data_barang['nama_barang']?>">
                            <small class="form-text text-danger"><?= form_error('nama_barang')?></small>
                     </div>
                     <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" ><?=$data_barang['deskripsi']?></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi')?></small>
                     </div>
                     <div class="form-group">
                            <label for="exampleInputPassword1">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?=$data_barang['harga']?>">
                            <small class="form-text text-danger"><?= form_error('harga')?></small>
                     </div>
                     <button type="submit" name="ubah" class="btn btn-primary">Ubah </button>
              </form>
       </div>
</div>