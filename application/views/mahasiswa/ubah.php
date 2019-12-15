<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-light text-dark">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">

                            <label for="exampleFormControlInput1">Nama Mahasiswa</label>
                            <input name="id" type="hidden" class="form-control" id="exampleFormControlInput1" value="<?= $mahasiswa['idmahasiswa'] ?>">
                            <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" value="<?= $mahasiswa['namamahasiswa'] ?>">
                            <small id="emailHelp" class="form-text  text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <button type="submit" class="btn btn-success float-right">Ubah</button>
                </div>
                </form>
            </div>
        </div>




    </div>