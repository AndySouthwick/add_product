<?php 
 header('Location: http://localhost:8888/CRUD/index.php');

$unique_id = $_POST["unique_id"];
echo $unique_id;
?>

<?php
if (isset($_POST["Submit"])) {
  $dbc = mysqli_connect('localhost', 'root', 'root', 'music_app')
    or die('Error connecting to MySQL server.');



  $query = "DELETE FROM my_products  WHERE unique_id = $unique_id";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

     
  

  mysqli_close($dbc);

  echo 'it worked';
}

?>