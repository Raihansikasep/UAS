<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ujiannn</title>
  </head>
  <body>
    <center>
    <h3>SOAL UAS RPL</h3>
    <img src="download (4).png" alt="">
    <br>
    <h2>PENGGAJIHAN</h2>
    <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="d-flex justify-content-center">
    <div class="card"  style="width: 70rem;">
  <div class="card-header">
    Data Penggajihan
  </div>
  <div class="card-body">
    <form action="" method="POST" class="list-group-item">
  <div class="mb-3">
    <label  class="form-label">No</label>
    <input type="number" class="form-control"  name="NO" placeholder="NO">
  </div>
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control"  name="nm" placeholder="Nama">
  </div>    
  <div class="mb-3">
      <label class="form-label">Unit Pendidikan</label>
      <select class="form-select" name="unitP" placeholder="Pilih Unit Pendidikan">
      <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="S1">S1</option>
      </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Tanggal Gaji</label>
    <input type="date" class="form-control"  name="tanggal">
  </div>
  <div class="row g-3">
  <div class="col">
    <h2 align="center">Gaji</h2>
    <label  class="form-label">Jabatan</label>
    <select  class="form-select" name="jbn" placeholder="Pilih Jabatan">
      <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
      </select>
  </div>
  <div class="col">
    <h2 align="center">Potongan</h2>
    <label  class="form-label">BPJS</label>
    <input type="number" class="form-control" name="bpjs" >
  </div>
</div>
<br>
<div class="row g-3">
  <div class="col">
    <label  class="form-label">Lama Kerja</label>
    <input type="number" class="form-control"  name="lk" placeholder="Lama Kerja">
  </div>
  <div class="col">
    <label  class="form-label">Pinjaman</label>
    <input type="number" class="form-control"  name="p" Placeholder="Pinjaman">
  </div>
</div>
<br>
<div class="row g-3">
<div class="col">
    <label  class="form-label">Status Kerja</label>
    <select  class="form-select" name="sk" placeholder="Pilih Status Kerja">
      <option value="Tetap">Tetap</option>
        <option value="kontrak">Kontrak</option>
      </select>
  </div>
  <div class="col">
    <label  class="form-label">Cicilan</label>
    <input type="number" class="form-control"  name="cicil" placeholder="Tabungan">
  </div>
</div>
<br>
 <div class="col">
    <label  class="form-label">Infaq</label>
    <input type="number" class="form-control"  name="infaq" placeholder="lainnya">
  </div>
</div>
<center>
<input type="submit" class="btn btn-outline-primary" name="gow" value="Proses">
</center>
</form>
</div>
</div>
</div>
<br><br>
  </body>
</html>

<?php

if (isset($_POST['gow'])) {
  
  //data gaji
  $no = $_POST['NO'];
  $nm = $_POST['nm'];
  $UP = $_POST['unitP'];
  $TG = $_POST['tanggal'];
  //gaji
  $jbn = $_POST['jbn'];
  $lamaK = $_POST['lk'];
  $sk = $_POST['sk'];
  //potongan
  $bpjs = $_POST['bpjs'];
  $pjmn = $_POST['p'];
  $cicilan = $_POST['cicil'];
  $infaq = $_POST['infaq'];

  if ($jbn == "Kepala Sekolah") {
    $gaji = 10000000;
  } elseif ($jbn == "Wakasek") {
    $gaji = 7000000;
  } elseif ($jbn == "Guru") {
    $gaji = 5000000;
  } elseif ($jbn == "Karyawan") {
    $gaji = 2500000;
  }else {
    $gaji = 0;
  }

  if ($sk == "Tetap") {
    $bonus = 1000000;
  } else {
    $bonus = 0;
  }


  $GB = ($gaji + $bonus) - ($bpjs + $pjmn + $cicilan + $infaq);


class gaji{

  function data_penggajihan($no2,$nm2,$UP2,$TG2,$jbn2,$gaji2,$lamaK2,$sk2,$bonus2,$bpjs2,$pjmn2,$cicilan2,$infaq2,$GB2){

    echo "
     <div class='d-flex justify-content-center'>
      <div style='border:1px solid blue; padding: 25px; width: 400px; margin: 20px auto;' class='card' style='width: 25rem;'>
  <div class='card-header'>
    <h4 style='text-align:center;'>Raihan Firdaus</h4>
  </div>
  <div class='card-body'>
    <div class='container'>
      <h4 style='text-align:center;'  class='text-primary'>STRUK GAJI</h4>
      <table align='center' class='text-primary'>
      <tr>
        <td>No</td>
        <td>:</td>
        <td>$no2</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nm2</td>
      </tr>
      <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td>$UP2</td>
      </tr>
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td>$TG2</td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>$jbn2</td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>:</td>
        <td>$gaji2</td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td>$lamaK2</td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td>$sk2</td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td>$bonus2</td>
      </tr>
      <tr>
        <td>BPJS</td>
        <td>:</td>
        <td>$bpjs2</td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td>$pjmn2</td>
      </tr>
      <tr>
        <td>Cicilan</td>
        <td>:</td>
        <td>$cicilan2</td>
      </tr>
      <tr>
        <td>Infaq</td>
        <td>:</td>
        <td>$infaq2</td>
      </tr>
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td>$GB2</td>
      </tr>
      </table>
    </div>
     </div>
</div>
</div>
";


}
}

$cetak = new gaji();

echo $cetak->data_penggajihan($no,$nm,$UP,$TG,$jbn,$gaji,$lamaK,$sk,$bonus,$bpjs,$pjmn,$cicilan,$infaq,$GB);

}


?>