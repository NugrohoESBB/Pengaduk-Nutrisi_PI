<!-- UDAH DI TES DAN OK -->


<?php
require '../asset/inc/config.php';
$page = $_SERVER['PHP_SELF'];
$timer = "10";

// Start using PDO
$pdo = "mysql:host=$servername; dbname=$dbname";
$koneksi = new PDO( "mysql:host=$servername;dbname=$dbname", 'root', '');
if(!$koneksi){
	die("Fatal Error: Connection Failed!");
}

try{
// code here!

$sql = 'SELECT id, nutrisi_a,nutrisi_b,nutrisi_c,water,timestamp FROM cobapost';
// $row = $connection-> query($sql);
$row = $koneksi->prepare($sql);
$row->execute();
$row->setFetchMode(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
die('your Connection database is die!'. $e->getMessage());
}

?>

<!-- HTML AREA -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta http-equiv="refresh" content="<?php echo $timer?>;URL='<?php echo $page?>'">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testing Output</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>
  <div class="jumbotron">
<div class="judul"><p class="text-center">OUTPUT SENSOR</p></div>
<a target="_blank" href="coba.php"> <button type="button" class="btn btn-primary"> Export Data</button></a>
<a target="_blank" href="deleted.php"> <button type="button" class="btn btn-danger"> Clear Data</button></a>
</div>
<div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nutrisi_a</th>
      <th scope="col">nutrisi_b</th>
      <th scope="col">nutrisi_c</th>
      <th scope="col">water</th>
      <th scope="col">timestamp</th>
    </tr>
  </thead>
  <tbody>
    <?php  while ($rows = $row->fetch()):?>
  <?php $id = $rows['id'];
  $nutrisi_a = $rows['nutrisi_a'];
  $nutrisi_b = $rows['nutrisi_b'];
  $nutrisi_c = $rows ['nutrisi_c'];
  $water = $rows['water'];
  $timestamp = $rows['timestamp'];
?>
<tr>
  <td><?php echo $id?></td>
 <td><?php echo $nutrisi_a?></td>
 <td><?php echo $nutrisi_b?></td>
 <td><?php echo $nutrisi_c?></td>
  <td><?php echo $water?></td>
 <td><?php echo $timestamp?></td>
                                
</tr>
<?php endwhile;?>

  </tbody>
</table>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              </body>
</html>