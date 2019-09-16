<div class="container">
       <h1>kelola data customer</h1>
</div>

<div class="container">
<?php if($this->session->flashdata('data')) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Customer <strong>berhasil</strong> <?= $this->session->flashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="row mt-3">
    <div class="col-md-9">
      <a href="<?= base_url();?>Kelola_data_customer/tambah_data_customer" class="btn btn-primary float-right">Tambah Data Customer</a>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Customer</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Hp</th>
    </tr>
  </thead>
  <tbody>
       <?php foreach ($data_customer as $data_customer): ?>
       <tr>
              <th scope="row"><?= $data_customer['id_customer']; ?></th>
              <td><?= $data_customer['nama_customer']; ?></td>
              <td><?= $data_customer['alamat_customer']; ?></td>
              <td><?= $data_customer['no_tlp']; ?></td>
              <td>
              <a href="<?=base_url();?>Kelola_data_customer/edit_data_customer/<?=$data_customer['id_customer'];?>" class="btn btn-info btn-sm" >Edit</a>
              <a href="<?=base_url();?>Kelola_data_customer/hapus_data_customer/<?=$data_customer['id_customer'];?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin hapus?');">Hapus</a>
              </td>
       </tr>
       <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>