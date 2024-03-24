<?php
$query_user = mysqli_query($koneksi, "SELECT * FROM pelanggan ");
$query_pekerja = mysqli_query($koneksi, "SELECT * FROM pekerja");



$row_pelanggan = mysqli_num_rows($query_user);
$row_pekerja = mysqli_num_rows($query_pekerja);




?>
<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-warning shadow-primary text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">pekerja</p>
            <h4 class="mb-0"><?= $row_pekerja ?></h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">user</p>
            <h4 class="mb-0"><?= $row_pelanggan ?></h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
          <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>