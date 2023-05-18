<?php 
require_once "../asset/inc/config.php";
$mysqli = new mysqli($servername, $username, $password, $dbname);
// // Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

class sensorData{
  public function getData(){
    global $mysqli;
    $query = "SELECT * FROM cobalog";
    $query = array();
    $result = $mysqli->query($query);
    while($row = mysqli_fetch_obect($result)){
    $data[] = $row;
  }
   $response=array(
                     'status' => 1,
                     'message' =>'Get List Sensor Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);

}
public function getDatas($id=0)
   {
      global $mysqli;
      $query="SELECT * FROM cobapost";
      $data=array();
      $result=$mysqli->query($query);
      while($row=mysqli_fetch_object($result))
      {
         $data[]=$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Get Sensor Successfully.',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
        
   }

    public function insertData()
      {
         global $mysqli;
         $arrcheckpost = array('nutrisi_a' => '', 'nutrisi_b' => '', 'nutrisi_c' => '', 'water' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
               $result = mysqli_query($mysqli, "INSERT INTO cobapost SET
               nutrisi_a = '$_POST[nutrisi_a]',
               nutrisi_b = '$_POST[nutrisi_b]',
               nutrisi_c = '$_POST[nutrisi_c]',
               water = '$_POST[water]'");
                
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Sensor Added Successfully.'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Sensor Addition Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }

 function updateData($id)
      {
         global $mysqli;
         $arrcheckpost = array('nutrisi_a' => '', 'nutrisi_b' => '', 'nutrisi_c' => '', 'water' => '');
         $hitung = count(array_intersect_key($_POST, $arrcheckpost));
         if($hitung == count($arrcheckpost)){
          
              $result = mysqli_query($mysqli, "UPDATE cobapost SET
               nutrisi_a = '$_POST[nutrisi_a]',
               nutrisi_b = '$_POST[nutrisi_b]',
               nutrisi_c = '$_POST[nutrisi_c]',
               water = '$_POST[water]',
              WHERE id='$id'");
          
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'sensor Updated Successfully.'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'sensor Updation Failed.'
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Parameter Do Not Match'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
 
   function deleteData($id)
   {
      global $mysqli;
      $query="DELETE FROM cobapost WHERE id=".$id;
      if(mysqli_query($mysqli, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'data Deleted Successfully.'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'data Deletion Failed.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
}



?>