<?php echo $this->extend('layout/template');?>

<?php echo $this->section('content');?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="/img/flutter.png" alt="" class="sampul"></td>
      <td>Naruto</td>
      <td>
        <a href="#" class="btn btn-succes">Detail</a>
      </td>
    </tr>
   
  </tbody>
</table>
        </div>
    </div>
</div>

<?php echo $this->endSection();?>