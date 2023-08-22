<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a href="<?= base_url('beranda') ?>" class="nav-link">Home</a>
            </li>
            <li>
                <a href="<?= base_url('data-siswa') ?>" class="nav-link">Data Siswa</a>
            </li>
            <li>
                <a href="<?= base_url('info-kegiatan') ?>" class="nav-link">Info Kegiatan</a>
            </li>
        </ul>
    </nav>
    <?= $this->extend("layouts/template"); ?>

    <?= $this->section("content"); ?>
    <?php if (session()->get('role') === 'admin') : ?>
    
      <h3>Data Siswa</h3>
      <table class="table-bordered table-striped">
        <tr>
          <th>Nama</th>
          <th>Nis</th>
          <th>Tanggal Lahir</th>
        </tr>
        <tr>
          <td>Andi Saputra</td>
          <td>101</td>
          <td>2003-12-22</td>
        </tr>
        <tr>
          <td>Budi Cahyana</td>
          <td>102</td>
          <td>2004-1-30</td>
        </tr>
      </table>

  <?php else : ?>
    <div class="alert alert-danger" role="alert">
        Anda tidak memiliki akses untuk melihat data
    </div>
  <?php endif; ?>
    <?= $this->endSection(); ?>
      
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>