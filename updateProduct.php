<?php 

 header('Location: http://localhost:8888/CRUD/index.php');
$unique_id = $_POST["unique_id"];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_desc = $_POST["product_desc"];
$upsell_data  = $_POST["upsell_data "];
$product_img = $_POST["product_img"];
$product_category = $_POST["product_category"];


echo $unique_id;
?>

<?php
if (isset($_POST["Submit"])) {
  $dbc = mysqli_connect('localhost', 'root', 'root', 'music_app')
    or die('Error connecting to MySQL server.');



  $query = "UPDATE  my_products SET product_name ='$product_name', product_price ='$product_price', 
  product_desc ='$product_desc', upsell_data ='$upsell_data ', 
  product_img ='$product_img', product_category ='$product_category'  WHERE unique_id ='$unique_id'";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

     
  

  mysqli_close($dbc);

  echo 'it worked';
}

?>