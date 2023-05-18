<h1 class="h3 mb-4 text-gray-800">Halaman Log Data</h1>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white">
                    <tr>
                        <th width="3%" class="text-center">ID</th>
                        <th class="text-center">Nutrisi A</th>
                        <th class="text-center">Nutrisi B</th>
                        <th class="text-center">Nutrisi C</th>
                        <th class="text-center">Water</th>
                        <th class="text-center">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        include "asset/inc/config.php";
                        $query = "SELECT * FROM cobapost ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);
 
                        //mengecek apakah ada error ketika menjalankan query
                        if(!$result){
                            die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                        }

                        //buat perulangan untuk element tabel dari data teachers
                        $no = 1;
                        while($data = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td class="text-center"><?php echo "$no"; ?></td>
                            <td><?php echo $data['nutrisi_a']; ?></td>
                            <td><?php echo $data['nutrisi_b']; ?></td>
                            <td><?php echo $data['nutrisi_c']; ?></td>
                            <td><?php echo $data['water']; ?></td>
                            <td><?php echo $data['timestamp']; ?></td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="asset/vendor/jquery/jquery.min.js"></script>
