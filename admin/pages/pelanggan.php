
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center text-uppercase">Account Pelanggan</h3>
                <hr>
                <table class="table table-bordered table-striped hover cell-border" id="pelanggan"> 
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th> 
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1; 
                        $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['nama_pelanggan']; ?></td>
                                <td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['no_telepon']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                              
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
    let table = new DataTable('#pelanggan');
</script>

