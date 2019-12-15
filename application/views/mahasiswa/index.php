<div class="container">
  <?php
  if ($this->session->flashdata('flash')) {
    ?>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Mahasiswa<strong> Berhasil </strong><?php echo $this->session->flashdata('flash'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?php base_url() ?>mahasiswa/tambah" type="button" class="btn btn-success">Tambah Data Mahasiswa</a>
    </div>
  </div>


  <div class="row mt-4">
    <div class="col-md-12">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input name="keyword" type="text" class="form-control" placeholder="Cari data mahasiswa..." aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit" id="">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <div class="row mt-3">
    <div class="col-md-12">
      <h3 class="mb-2 ">Daftar Mahasiswa</h3>
      <ul class="list-group">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id</th>
              <th scope="col">Nama Mahasiswa</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $m) {
              ?>
              <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $m['idmahasiswa'] ?></td>
                <td><?= $m['namamahasiswa'] ?></td>
                <td>
                  <a href="<?php echo base_url()  ?>mahasiswa/detail/<?= $m['idmahasiswa'] ?>" type="button" class="btn btn-primary">Detail</a>
                  <a href="<?php echo base_url()  ?>mahasiswa/ubah/<?= $m['idmahasiswa'] ?>" type="button" class="btn btn-warning">Edit</a>
                  <a href="<?php echo base_url()  ?>mahasiswa/hapus/<?= $m['idmahasiswa'] ?>" type="button" onclick="confirm('Apakah data ingin di hapus?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php
              $no++;
            }
            ?>
          </tbody>
        </table>
      </ul>
    </div>
  </div>


</div>