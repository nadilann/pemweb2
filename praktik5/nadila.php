<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['NIM'];
    $pilih_mk = $_POST['Pilih MK'];
    $nilai = $_POST['Nilai'];
    $hasil_ujian = $_POST['Hasil_Ujian']; 
    $grade = $_POST['Grade'];

    function status($nilai)
    {
        if ($nilai >= 3 && $ipk <= 4) {
            return "Lolos";
        } else {
            return "Ga Lolos";
        }
    }
    $status = status($nilai);
}

require_once 'header.php';
?>

<div class="container">
    <h1>Form Nilai Ujian</h1>
    <form method="POST" action="main.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
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

    <hr>
    <?php  // tampilkan data yang diterima
    echo "<h2>Informasi yang Anda Kirim:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Jenis Kelamin: " . $jk . "<br>";
    echo "Hobi: ";
    foreach ($hobi as $h) {
        echo $h . ", ";
    }
    echo "<br> Status: " . $status . "<br>";
    ?>

</div>

<?php
require_once 'footer.php';
?>