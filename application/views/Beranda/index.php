<div class="container">
       <h1>Beranda</h1>
</div>
<br/>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Barang Masuk Hari ini</h6>
                </div>
                <div class="card-body">
                <div class="col-md-12" style="overflow-y: scroll;">
			    <table class="table">
			    <thead>
			      <tr>
			        <th scope="col">No.</th>
			        <th scope="col">Tanggal</th>
			        <th scope="col">Kode Barang</th>
			        <th scope="col">Nama Barang</th>
			        <th scope="col">Jumlah</th>
			        <th scope="col">Supplier</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php $no = 1; ?>
			      <?php foreach ($barang_masuk as $barang_masuk): ?>
			      <tr>
			        <th scope="row"><?= $no++ ?></th>
			        <td><?= $barang_masuk['tanggal_masuk']; ?></td>
			        <td ><?= $barang_masuk['kode_barang']; ?></td>
			        <td><?= $barang_masuk['nama_barang']; ?></td>
			        <td><?= $barang_masuk['jumlah_masuk']; ?> Unit</td>
			        <td><?= $barang_masuk['nama_supplier']; ?></td>
			 <!--        <td><?= $barang_masuk['harga']; ?></td> -->
			      </tr>
			      <?php endforeach; ?>
			    </tbody>
			  </table>
			    </div>
                </div>
              </div>
		</div>
		<div class="col-lg-6">
			
			<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Barang Keluar Hari ini </h6>
                </div>
                <div class="card-body">
                <div class="col-md-12" style="overflow-y: scroll;">
			    <table class="table">
			    <thead>
			      <tr>
			        <th scope="col">No.</th>
			        <th scope="col">Tanggal</th>
			        <th scope="col">Kode Barang</th>
			        <th scope="col">Nama Barang</th>
			        <th scope="col">Jumlah</th>
			        <th scope="col">Customer</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php $no = 1; ?>
			      <?php foreach ($barang_keluar as $barang_keluar): ?>
			      <tr>
			        <th scope="row"><?= $no++ ?></th>
			        <td><?= $barang_keluar['tanggal_keluar']; ?></td>
			        <td ><?= $barang_keluar['kode_barang']; ?></td>
			        <td><?= $barang_keluar['nama_barang']; ?></td>
			        <td><?= $barang_keluar['jumlah_keluar']; ?> Unit</td>
			        <td><?= $barang_keluar['nama_customer']; ?></td>
			      </tr>
			      <?php endforeach; ?>
			    </tbody>
			  </table>
			    </div>
                </div>
              </div>
		</div>
	</div>
</div>