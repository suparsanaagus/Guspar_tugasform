<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Nilai Pelajar</title>
  </head>
  <style>
  .container{
    background: yellow;
    
  }
  </style>
  <body>

<div class="container border border-primary ">
<div class="row align-items-start">

<form action="guspar.php" method="post">
<center>
<h2>Data Nilai Siswa</h2>
<p >Program Input Data Nilai Siswa</p>

</center>
<div class="row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
    <div class="form-mb-20">
      <input type="text" class="form-control" id="nama" name="nama" >
    </div><br>
    <label for="makul" class="col-sm-2 col-form-label">MATA PELAJARAN</label><br>
    <div class="form-mb-1">
    <select class="form-select" id="makul" name="makul" aria-label="Default select example">
         <option selected></option>
         <option value="Matematika">Matematika</option>
         <option value="Biologi">Bologi</option>
         <option value="Kimia">Kimia</option>
         <option value="Fisika">Fisika</option>
         <option value="Bahasa Indonesia">Bahasa Indonesia</option>
         <option value="Bahasa Inggris">Bahasa Inggris</option>
    </select>
    </div>
    <label for="nilaiuts" class="col-sm-2 col-form-label">NILAI UTS</label>
    <div class="form-mb-1">
      <input type="number" class="form-control" id="uts" min="0"max="100" name="uts" value="uts" >
    </div><br>
    <label for="uas" class="col-sm-2 col-form-label">NILAI UAS</label>
    <div class="form-mb-1">
      <input type="number" class="form-control" id="uas" min="0"max="100" name="uas" value="uas">
    </div><br>
    <label for="tugas" class="col-sm-2 col-form-label">NILAI TUGAS</label>
    <div class="form-mb-1">
      <input type="number" class="form-control" id="tugas" min="0"max="100" name="tugas" value="tugas">
    </div>
  <div class="d-grid gap-2"><br>
  <button type="submit" class="btn btn-primary">Masukkan</button>
  </div><br>
  <div class="d-grid gap-4">
  <button type="reset" >Hapus</button>
  </div>
  </form>
</div>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>