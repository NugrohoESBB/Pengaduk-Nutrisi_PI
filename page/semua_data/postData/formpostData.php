<?php 
    include "../../asset/inc/config.php";

    // Post Data
    /*$api_key_value = "SPnutrisi";
    $api_key = $nutrisi_A=$nutrisi_B=$nutrisi_C=$water="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $api_key = saring($_POST["api_key"]);
        if($api_key == $api_key_value) {
            $nutrisi_a = saring($_POST["nutrisi_a"]);
            $nutrisi_b = saring($_POST["nutrisi_b"]);
            $nutrisi_c = saring($_POST["nutrisi_c"]);
            $water = saring($_POST["water"]);
    
            // Create connection
            try{        
                $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO cobapost (nutrisi_a, nutrisi_a, nutrisi_c, water)VALUES ('" . $nutrisi_a . "', '" . $nutrisi_b . "','" . $nutrisi_c . "','" . $water . "')";
                $koneksi->exec($sql);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            $koneksi = null;
            $koneksi->close();
        } else {
            echo "Wrong API Key provided.";
        }

    } else {
        echo "No data posted with HTTP POST.";
    }*/
?>

<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Table Calibration</div>
            <div class="card-body">
                <form action="postData.php" method="post">
                    <div class="form-group">
                        <label>Campuran Pupuk A</label>
                        <input type="text" name="nutrisiA" class="form-control" id="nutrisiA" placeholder="Masukkan Campuran Pupuk A. Example 500 ml" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Campuran Pupuk B</label>
                        <input type="text" name="nutrisiB" class="form-control" id="nutrisiB" placeholder="Masukkan Campuran Pupuk B." required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Campuran Pupuk C</label>
                        <input type="text" name="nutrisiC" class="form-control" id="nutrisiC" placeholder="Masukkan Campuran Pupuk C." required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Water</label>
                        <input type="text" name="Water" class="form-control" id="Water" placeholder="Masukkan Air!. Example 1 liter" required autocomplete="off">
                    </div>
                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button type="cancel" name="cancel" class="btn btn-sm btn-secondary" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
