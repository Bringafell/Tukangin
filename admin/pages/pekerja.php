<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center text-uppercase">Account Pekerja</h3>
                <hr>
                <table class="table table-bordered table-striped hover cell-border" id="pekerja">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM pekerja ");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['nama_pekerja']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['no_telepon']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['umur']; ?></td>

                            </tr>
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

<script>
    let table = new DataTable('#pekerja');
</script>