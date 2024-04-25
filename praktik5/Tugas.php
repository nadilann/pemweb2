<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>
    <h1>Form Nilai Ujian </h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Nama" name="Nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="NIM" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="NIM" name="NIM" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Pilih Mk" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="Pilih Mk" name="Pilih Mk" class="custom-select" required="required">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="Nilai" name="Nilai" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Hasil Ujian" class="col-4 col-form-label">Hasil Ujian</label> 
    <div class="col-8">
      <input id="Hasil Ujian" name="Hasil Ujian" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Grade" class="col-4 col-form-label">Grade</label> 
    <div class="col-8">
      <select id="Grade" name="Grade" class="custom-select" required="required">
        <option value="Lulus">Lulus</option>
        <option value="Tidak Lulus">Tidak Lulus</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
if (isset($_POST['submit'])) {
// Menangkap data input
$name = $_POST['name'];
$nim = $_POST['nim'];
$pilih_mk = $_POST['pilih mk'];
$nilai = $_POST['nilai'];
$hasil_ujian = $_POST['hasil_ujian'];
$grade = $_POST['grade'];

echo "Nama  : " . $name;
echo "NIM  : " . $NIM;
echo "pilih_mk  : " . $pilih_mk;
echo "Nilai  : " . $nilai;
echo "Hasil_ujian  : " . $hasil_ujian;
echo "Grade  : " . $grade;


// Buat logic nentuin skor dari nilai
foreach ($nilai as $s) {
  // cek nilai nya
  switch ($n) {
      case 'HTML':
          $nilai += 10;
          break;
      case 'CSS':
          $skor += 10;
          break;
      case 'Javascript':
          $skor += 20;
          break;
      case 'RWD Bootstrap':
          $skor += 20;
          break;
      case 'PHP':
          $skor += 30;
          break;
      case 'Python':
          $skor += 30;
          break;
      case 'Java':
          $skor += 50;
          break;
      default:
          $skor = 0;
          break;
  }
}



$kategori_nilai;
if ($nilai >= 95 && $nilai <= 100) {
  $kategori_nilai = "A";
} elseif ($nilai >= 90 && $nialai <= 85) {
  $kategori_nilai = "B";
} elseif ($nilai >= 80 && $nilai <= 75) {
  $kategori_nilai = "C";
} elseif ($nilai >= 70 && $nilai <= 65) {
  $kategori_nilai = "D";
} else {
  $kategori_skill = "Tidak Memadai";
}
}




?>
</body>
</html>