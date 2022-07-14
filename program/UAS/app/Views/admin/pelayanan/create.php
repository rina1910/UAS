<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- My Style -->
  <link href="<?php echo base_url('UAS/assets/css/style.css'); ?> " rel="stylesheet">

  <!-- BOOTSTRAP /-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <title><?= $title; ?> - Sistem Antrian</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-clock"></i>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto ">
          <a class="nav-link" href="<?php base_url(); ?>antrian">Ambil antrian</a>
          <a class="nav-link" href="<?php base_url(); ?>antrianno">Layar antrian</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php base_url(); ?>loketpanggil" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Loket Panggil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php base_url(); ?>loketpanggil">Loket 1</a>
              <a class="dropdown-item" href="<?php base_url(); ?>loketpanggil/dua">Loket 2</a>
              <a class="dropdown-item" href="<?php base_url(); ?>loketpanggil/tiga">Loket 3</a>
              <a class="dropdown-item" href="<?php base_url(); ?>loketpanggil/empat">Loket 4</a>
          </li>
          <a class="nav-link" href="<?php base_url(); ?>loket">Loket</a>
          <a class="nav-link" href="<?php base_url(); ?>pelayanan">Pelayanan</a>
        </div>
      </div>
    </div>
  </nav>

  
<div class="container">
    <h4>Tambah Pelayanan</h4>
    <hr>
    <form action="<?php echo base_url('pelayanan/store'); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Pelayanan</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pelayanan">
        </div>
        <div class="form-group">
            <label for="">Kode Pelayanan</label>
            <input type="text" name="kode" class="form-control" placeholder="Kode Pelayanan">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Pelayanan</label>
            <textarea name="keterangan" class="form-control" placeholder="Deskripsi pelayanan"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

  <footer class="footer mt-5 py-3 text-center">
    <div class="container">
    <span>
        <p><i class="fa-solid fa-smile"></i> TERIMAKASIH <i class="fa-solid fa-smile"></i></p>
        <i class="fa-solid fa-heart"></i> LYDIA DIFFANI <i class="fa-solid fa-heart"></i></p>
        <p>&copy; <script>
            document.write(new Date().getFullYear());
          </script>
        </p>
      </span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>


