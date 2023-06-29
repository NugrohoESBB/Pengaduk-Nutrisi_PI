<?php
    require "../../../asset/inc/config.php";

    $e_tot = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // POST DATA
        if (isset($_POST['submit'])) {
            $nutrisi_a = $_POST['nutrisi_a'];
            $nutrisi_b = $_POST['nutrisi_b'];

            $result = mysqli_query($koneksi, "INSERT INTO cobapost(nutrisi_a,nutrisi_b) VALUES ('$nutrisi_a','$nutrisi_b')");
        }
    }   
    $koneksi = null;

    // Show message when user added
    header("Location:../../../index.php?page=Post_Data");
?>
