<div class="container">
  <h1>Laporan Barang Masuk</h1>
</div>

<div class="container">
<div class="row mt-3">
    <div class="col-md-3">
      <form action="" method="post">
        <ul class="pager">
            <li class="input-group">
        <div class="input-group mb-3 float-right">
          <input type="text" class="form-control" placeholder="Cari Barang" name="cari">
          <div class="input-group-append">
            <button class="btn btn-info" type="submit" >Cari</button>
          </div>
        </div>
      </li>
            <li class="input-group">
              <input type="submit" class="btn btn-info" value="Print Report" onclick="PrintElem('#print')"></li>
          </ul> 
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div id="print">

    <div class="col-md-12">
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
<script type="text/javascript">

function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'Laporan', 'height=600,width=800');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" />');
        mywindow.document.write('<link rel="stylesheet" href="<?= base_url('css/sb-admin-2.min.css')?>" type="text/css" />');

        mywindow.document.write('</head><body >');
        mywindow.document.write('<img src="<?= base_url()?>/images/header.png" height="200px" width="100%">');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        //mywindow.close();

        return true;
    }

</script>