<div class="row">
<?php

$dbc = mysqli_connect('localhost', 'root', 'root', 'music_app')
or die('Error connecting to MySQL server.');

$query = "SELECT unique_id, product_name, product_price, product_desc, upsell_data, product_img, product_category FROM my_products";
$data = mysqli_query($dbc, $query);


 while($row = $data->fetch_array()) {
    // The user row was found so display the user data

    echo '<div class="col-md-3"><div class="panel panel-default">
  <div class="panel-body">';
   echo '<img src=' . $row['product_img'] . ' width="100%"><br/>';

    echo  'unique_id: ' . $row['unique_id'] . '<br/>';
    
      echo 'product_name: ' . $row['product_name'] . '<br/>';
    
  
      echo 'productprice: ' . $row['product_price'] . '<br/>';
    

      echo 'product desc: ' . $row['product_desc'] . '<br/>';
    
    
      echo 'upsell_data: ' . $row['upsell_data'] . '<br/>';
    
  
   
    
    
    echo 'product category ' . $row['product_category'] . '<br/>';
     echo  '<form  method="post" action="deleteProduct.php">
     <input type="hidden" name="unique_id" value="'. $row['unique_id'] .'"></input>
     <button type="submit" class="btn btn-default" name="Submit" value= "Submit">delete</button></form>';
     echo'
     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#' . $row['unique_id'] . '">
  Update
</button>';
     echo'</div> </div></div>';

     

     echo'<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="' . $row['unique_id'] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Your Product Here</h4>
      </div>
      <div class="modal-body">
       <img src=' . $row['product_img'] . ' width="100%">
    <form method="post" action="updateProduct.php">
    <input class="form-control"type="hidden" name="unique_id" placeholder="product name" value="'. $row['unique_id'] .' "><br/>
    <input class="form-control"type="text" name="product_name" placeholder="product name" value="'. $row['product_name'] .' "><br/>
  
    
    <input class="form-control"type="text" name="product_price" placeholder="product price" value="' . $row['product_price'] .'"><br/>
    <input class="form-control"type="text-area" name="product_desc" placeholder="product desc" value="' . $row['product_desc'] . '"><br/>
    <input class="form-control"type="text" name="upsell_data" placeholder="product short desc" value="' . $row['upsell_data'] . '"><br/>
    <input class="form-control"type="text" name="product_category" placeholder="product category" value="' . $row['product_category'] . '"><br/>

  
    <label for="exampleInputFile" name="image">Image File input 120x12px jpg</label>
    <input type="file" id="exampleInputFile">
 

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"name="Submit" value= "Submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
';
  
    }

?>


  </div>