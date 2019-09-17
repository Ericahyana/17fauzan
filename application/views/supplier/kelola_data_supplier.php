<div class="container">
       <h1>kelola Data Supplier</h1>
</div>

<div class="container">
  <?php if($this->session->flashdata('data')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Supplier <strong>berhasil</strong> <?= $this->session->flashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="row mt-3">
    <div class="col-md-9">
      <a href="<?= base_url();?>kelola_data_supplier/tambah_data_supplier" class="btn btn-primary float-right">Tambah Data Supplier</a>
    </div>
    <form action="" method="post">
        <div class="input-group mb-3 float-right">
          <input type="text" class="form-control" placeholder="Cari Supplier" name="cari">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" >Cari</button>
          </div>
        </div>
      </form>
</div>
<div class="row mt-3">
    <div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama supplier</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Hp</th>
      <th scope="col" style="width: 15%">opsi</th>
    </tr>
  </thead>
  <tbody>
       <?php foreach ($data_supplier as $data_supplier): ?>
       <tr>
              <th scope="row"><?= $data_supplier['id_supplier']; ?></th>
              <td><?= $data_supplier['nama_supplier']; ?></td>
              <td><?= $data_supplier['alamat_supplier']; ?></td>
              <td><?= $data_supplier['no_tlp']; ?></td>
              <td>
              <a href="<?=base_url();?>Kelola_data_supplier/edit_data_supplier/<?=$data_supplier['id_supplier'];?>" class="btn btn-info btn-sm" >Edit</a>
              <a href="<?=base_url();?>Kelola_data_supplier/hapus_data_supplier/<?=$data_supplier['id_supplier'];?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin hapus?');">Hapus</a>
              </td>
       </tr>
       <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>