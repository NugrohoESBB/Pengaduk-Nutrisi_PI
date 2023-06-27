<?php
    include "../../asset/inc/config.php";

    $e_tot = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // POST DATA
        if (isset($_POST['submit'])) {
            $nutrisi_a = saring($_POST['nutrisi_a']);
            $nutrisi_b = saring($_POST['nutrisi_b']);

            $result = mysqli_query($koneksi, "INSERT INTO cobapost(nutrisi_a,nutrisi_b) VALUES ('$nutrisi_a','$nutrisi_b')")
        }
    }   
    $koneksi = null;
?>

<!-- <div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Table Calibration</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Campuran Pupuk A</label>
                        <input type="text" name="pupukA" class="form-control" id="pupukA" placeholder="Masukkan Campuran Pupuk A. Example 500 ml" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Campuran Pupuk B</label>
                        <input type="text" name="pupukB" class="form-control" id="pupukB" placeholder="Masukkan Campuran Pupuk B." required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Campuran Pupuk C</label>
                        <input type="text" name="pupukC" class="form-control" id="pupukC" placeholder="Masukkan Campuran Pupuk C." required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Water</label>
                        <input type="text" name="Water" class="form-control" id="Water" placeholder="Masukkan Air!. Example 1 liter" required autocomplete="off">
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="cancel" name="cancel" class="btn btn-sm btn-danger" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
 -->