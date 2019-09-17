<div class="container">
  <h1>Stok data barang</h1>
</div>

<div class="container">
<?php if($this->session->flashdata('data')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-9">
      <a href="<?= base_url();?>kelola_data_barang/tambah_data_barang" class="btn btn-primary float-right">Tambah Data Barang</a>
    </div>
    <form action="" method="post">
        <div class="input-group mb-3 float-right">
          <input type="text" class="form-control" placeholder="Cari Barang" name="cari">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" >Cari</button>
          </div>
        </div>
      </form>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
    <table class="table" id="dataTable">
    <thead>
      <tr>
       <th scope="col">No.</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
       <th scope="col">Deskripsi</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
        <th scope="col" style="width: 15%">opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data_barang as $data_barang): ?>
      <tr>
        <th scope="row"><?= $data_barang['id_barang']; ?></th>
        <td><?= $data_barang['kode_barang']; ?></td>
        <td><?= $data_barang['nama_barang']; ?></td>
        <td><?= $data_barang['deskripsi']; ?></td>
        <td><?= $data_barang['stok']; ?></td>
        <td><?= $data_barang['harga']; ?></td>
        <td>
          <a href="<?=base_url();?>Kelola_data_barang/edit_data_barang/<?=$data_barang['id_barang'];?>" class="btn btn-info btn-sm" >Edit</a>
          <a href="<?=base_url();?>Kelola_data_barang/hapus_data_barang/<?=$data_barang['id_barang'];?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin hapus?');">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
    </div>
  </div>
</div>
