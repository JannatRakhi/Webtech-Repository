  
<?php

require_once '../Controller/productInfoController.php';
$products = fetchProduct($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <fieldset>
  <legend><h2>Delete Product</h2></legend>
 <form action="../Controller/deleteProductController.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input  type="text" id="name" name="name"><br>
  <label for="buyingPrice">Buying Price:</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>
  <label for="sellingPrice">Selling Price:</label><br>
  <input  type="text" id="sellingPrice" name="sellingPrice"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"> <br>
  <input type="submit" name = "deleteProduct" value="Delete">
  </fieldset>
</form>

</body>
</html>