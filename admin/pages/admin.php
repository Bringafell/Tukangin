<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center text-uppercase">Account Admin</h3>
                <hr>
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ladmin">Tambah</button>
                <table class="table table-bordered table-striped hover cell-border" id="admin">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM admin ");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['nama_admin']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['no_telepon']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td>
                                    <button class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#cadmin<?php echo $data['id_admin'] ?>">Edit</button>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dadmin<?php echo $data['id_admin'] ?>">Hapus</button>
                                </td>
                            </tr>

 <!-- Modal Ubah-->
 <div class="modal fade" id="cadmin<?php echo $data['id_admin'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="col-12">
                        <big><a href="crud/buku.php" data-bs-dismiss="modal"><i class="ni ni-fat-remove" style="float: right; color: red;"></i></a></big>
                        <div class="text-center">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Account Admin</h1>
                        </div>
                      </div>
                    </div>
                    <form method="post" action="../pages/aksi/aksi-admin.php">
                      <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">
                      <div class="modal-body">
                        <div class="row">
                          <div class="mb-3">
                            <label class="form-label">Nama Admin</label>
                            <input type="text" name="nama_admin" value="<?= $data['nama_admin'] ?>" class="form-control" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="password" name="password" class="form-control" >
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telepon" value="<?= $data['no_telepon'] ?>" class="form-control" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control" required>
                          </div>

                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="col-12">
                          <div class="text-center">
                            <button type="submit" class="btn btn-success" name="bedit">Simpan</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Akhir Modal Ubah-->

              <!-- Modal Hapus-->
              <div class="modal fade" id="dadmin<?php echo $data['id_admin'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="col-12">
                        <div class="text-center">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin ingin menghapus Account Ini?</h1>
                        </div>
                      </div>
                    </div>
                    <form method="post" action="../pages/aksi/aksi-admin.php">
                      <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">
                      <div class="modal-footer">
                        <div class="col-12">
                          <div class="text-center">
                            <button type="submit" class="btn btn-danger" name="chapus">Hapus</button>
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Akhir Modal Hapus -->

                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="ladmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-12">
          <big><a href="" data-bs-dismiss="modal"><i class="ni ni-fat-remove" style="float: right; color: red;"></i></a></big>
          <div class="text-center">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Creat Account Admin</h1>
          </div>
        </div>
      </div>
      <form method="post" action="../pages/aksi/aksi-admin.php">
        <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">
        <div class="modal-body">
          <div class="row">
            <div class="mb-3">
              <label class="form-label">Nama Admin</label>
              <input type="text" name="nama_admin" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Nomor Telepon</label>
              <input type="text" name="no_telepon" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" required>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <div class="col-12">
            <div class="text-center">
              <button type="submit" class="btn btn-success" name="atambah">Simpan</button>
              <button type="reset" class="btn btn-dark">Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Akhir Modal Tambah-->


<script>
    let table = new DataTable('#admin');
</script>

