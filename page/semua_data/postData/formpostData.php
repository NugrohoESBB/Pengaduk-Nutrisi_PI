<?php 
    include "asset/inc/config.php";

?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Table Calibration</div>
            <div class="card-body">
                <form action="page/semua_data/postData/postData.php" method="post">
                    <div class="form-group">
                        <label>Campuran Pupuk A</label>
                        <input type="text" name="nutrisi_a" class="form-control" id="nutrisi_a" placeholder="Masukkan Campuran Pupuk A. Example 500 ml" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Campuran Pupuk B</label>
                        <input type="text" name="nutrisi_b" class="form-control" id="nutrisi_b" placeholder="Masukkan Campuran Pupuk B." required autocomplete="off">
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="cancel" name="cancel" class="btn btn-sm btn-secondary" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
