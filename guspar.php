<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tugas Pemweb</title>
  </head>
  <body>
  <?php

$nama   = $_POST["nama"];

$makul  = $_POST["makul"];

$tugas  = $_POST["tugas"];

$uts    = $_POST["uts"];

$uas    = $_POST["uas"];


//menghitung nilai dari yang tadi kita input

$nilai_tugas = $tugas * 0.2;

$nilai_uts   = $uts * 0.3;

$nilai_uas   = $uas * 0.4;

 
//penjumlahan dari nilai-nilai yang sudah diinput

$nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;

 
//menampilkan grade berdasarkan hasil nilai akhir

if ($nilai_akhir>=80)

    {
        $grade = "A";
    }

elseif ($nilai_akhir>=70)

    {
        $grade = "B";
    }

elseif ($nilai_akhir>=50)

    {
        $grade = "C";
    }

elseif ($nilai_akhir>=40)

    {
        $grade = "D";
    }

else

    {
        $grade = "E";
    }

 

?>


<br>
<!-- div dengan class container berfungsi untuk membungkus kode lain didalamnya agar terlihat lebih rapi dan sesuai dengan ukuran -->
 <div class="container border border-primary">
     <br>
     <!-- center untuk membuat judul berada di tengah -->
<center>
<!-- h2 digunakan sebagai judul form -->
<h2>Data Nilai Siswa</h2>
<!-- p digunakan untuk tulisan text -->

</center>
<!-- tabel berfungsi untuk merapikan output dalam bentuk grid yang terdiri atas kolom dan baris  -->
     <table class="table">
         <tr>
             <td class="col-sm-2">Nama</td>
             <!-- berfungsi untuk memangil variabel $nama yang sesuai dengan yang diinputkan di halaman sebelumnya -->
             <td class="col-sm-4">: <?php echo "$nama"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Mata Pelajaran</td>
             <!-- berfungsi untuk memangil variabel $mapel yang sesuai dengan yang diinputkan di halaman sebelumnya -->
             <td class="col-sm-4">: <?php echo "$makul"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Nilai Tugas</td>
              <!-- berfungsi untuk memangil variabel $uts yang sesuai dengan yang diinputkan di halaman sebelumnya -->
             <td class="col-sm-4">: <?php echo "$tugas"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Nilai UTS</td>
             <!-- berfungsi untuk memangil variabel $uas yang sesuai dengan yang diinputkan di halaman sebelumnya -->
             <td class="col-sm-4">: <?php echo "$uts"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Nilai UAS</td>
             <!-- berfungsi untuk memangil variabel $tugas yang sesuai dengan yang diinputkan di halaman sebelumnya -->
             <td class="col-sm-4">: <?php echo "$uas"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Total Nilai</td>
              <!-- berfungsi untuk memangil variabel $nilai yang sesuai perhitungan seluruh nilai -->
             <td class="col-sm-4">: <?php echo "$nilai_akhir"; ?></td>
         </tr>
         <tr>
             <td class="col-sm-2">Grade</td>
             <!-- berfungsi untuk memangil variabel $grade yang sesuai dengan rentang nilai yang sudah ditentukan -->
             <td class="col-sm-4">: <?php echo "$grade"; ?></td>
         </tr>
     </table>
     <div class="mb-3">
         <button class="btn btn-primary" type="button">
          <!-- berfungsi sebagai tombol kembali ke halaman sebelumnya -->
             <a class="text-decoration-none text-light" href="hasilnilai.php">Kembali</a>
         </button>
     </div>

     <br>
 </div>

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>