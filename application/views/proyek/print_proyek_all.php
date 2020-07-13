<!DOCTYPE html>
<html lang="en" dir="ltr"><head>
    <meta charset="utf-8">
    <title>Laporan Proyek</title>
    <style media="screen">
      .logo img {
        width: 70px;
        height: 70px;
        margin-top : -85px;
      }
      center p{
        margin-top: -10px;
      }
      table {
        border-collapse: collapse;
        text-align: center;
      }
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head><body>
    <center>
      <p>
         <b>LAPORAN PEKERJAAN PROYEK</b> <br>
        dinas pekerjaan umum dan penataan ruang <br>
         <small>Jl. Delima No.13, RT.4/RW.15, Lopang, Kec. Serang, Kota Serang, Banten 42111</small>
      </p>
      <hr>
    </center>
    <div class="logo">
      <img src="assets/img/serang.png" >
    </div>
    <table class="table " width="100%" cellspacing="0">
        <tr >
          <th>No</th>
          <th>Nama Jalan</th>
          <th>Kategori</th>
          <th>Nama Jasa</th>
          <th>Tanggal Kontrak</th>
          <th>Akhir Kontrak</th>
          <th>Pelaksanaan</th>
        </tr>
        <?php $no= 1; foreach ($proyek as $proyek): ?>
          <tr >
            <td><?= $no++ ?></td>
            <td><?= $proyek['nama_jalan'] ?></td>
            <td><?= $proyek['nama_jasa'] ?></td>
            <td><?= $proyek['kategori'] ?></td>
            <td><?= $proyek['tanggal_kontrak'] ?></td>
            <td><?= $proyek['akhir_kontrak'] ?></td>
            <td><?= $proyek['pelaksanaan'] ?></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </body></html>
