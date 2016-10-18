<?php 
header('Location: http://localhost:8888/CRUD/index.php');


?>

<?php
if (isset($_POST["Submit"])) {
  $dbc = mysqli_connect('localhost', 'root', 'root', 'music_app')
    or die('Error connecting to MySQL server.');

$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_desc = $_POST["product_desc"];
$upsell_data = $_POST["upsell_data"];
$product_img = $_POST["product_img"];
$product_category = $_POST["product_category"];

  $query = "INSERT INTO my_products (product_name, product_price, product_desc, upsell_data, product_img, product_category )  VALUES ('$product_name', '$product_price', '$product_desc', '$upsell_data', '$product_img', '$product_category')";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

     
  

  mysqli_close($dbc);

  
}

?>