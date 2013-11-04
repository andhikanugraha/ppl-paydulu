<?php

$handler = $_GET['handler'];
$total = $_GET['total'];
$total_f = 'Rp' . number_format($total, 0, ',', '.');
$origin = $_GET['origin'];
$destination = $_GET['destination'];
$pax = $_GET['pax'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="pull-right" style="background: #fff; padding-left: 30px; padding-top: 30px"><img src="http://ppl-susdulu.azurewebsites.net/Content/img/masthead.svg" height="80"></div>
      <h1 class="page-header">PayDulu: Erlangga Airlines</h1>
      <h3>Rincian transaksi</h3>
      <table class="table">
        <tr>
          <th>Keterangan</th>
          <th>Jumlah</th>
          <th>Jumlah Harga</th>
        </tr>
        <tr>
          <td>Erlangga Airlines: Penerbangan <?php echo "$origin &ndash; $destination" ?></td>
          <td><?php echo $pax ?></td>
          <td><?php echo $total_f ?></td>
        </tr>
      </table>
      <h3>Bayar dengan kartu kredit</h3>
      <form action="<?php echo $handler ?>" metod="POST" class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-sm-2">Nama di kartu</label>
          <div class="col-sm-6">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Nomor kartu</label>
          <div class="col-sm-4">
            <input type="text" class="form-control">
          </div>
          <label class="control-label col-sm-1">CVV</label>
          <div class="col-sm-1">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Tanggal kadaluarsa</label>
          <div class="col-sm-4 col-md-2">
            <select class="form-control">
              <option>Januari</option>
              <option>Februari</option>
              <option>Maret</option>
              <option>April</option>
              <option>Mei</option>
              <option>Juni</option>
              <option>Juli</option>
              <option>Agustus</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>Desember</option>
            </select>
          </div>
          <div class="col-sm-2">
            <select class="form-control">
            <?php
            for ($i=2013; $i < 2030; $i++) {
              echo "<option>$i</option>\n";
            } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-primary btn-lg">Bayar</button>
          </div>
        </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>
