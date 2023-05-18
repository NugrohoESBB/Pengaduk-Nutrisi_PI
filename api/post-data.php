<!-- UDAH DI TES DAN OK -->
<?php
require_once "../asset/inc/config.php";

// Keep this API Key value to be compatible with the ESP32 code provided in the project page. 
// If you change this value, the ESP32 sketch needs to match
$api_key_value = "SPnutrisi";

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
        } catch(PDOException $e){
            echo $e->getMessage();
        }

        $koneksi = null;

        $koneksi->close();
    } else {
        echo "Wrong API Key provided.";
    }

} else {
    echo "No data posted with HTTP POST.";
}
?>