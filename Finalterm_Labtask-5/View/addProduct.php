<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



   <fieldset>
    <legend><h2>ADD PRODUCT</h2></legend>

    <form method="post" method="POST" enctype="multipart/form-data"  action="../Controller/addProductController.php">
     Product ID: <input type="text" name="id" >
      <br><br>
       Product Name: <input type="text" name="name" >
        <!-- <span class="error">* <?php echo $nameErr;?></span> -->
        <br><br>
        Buying Product Price: <input type="text" name="buyingPrice" >
        <!-- <span class="error">* <?php echo $buyingPriceErr;?></span> -->
        <br><br>
        Selling Product Price: <input type="text" name="sellingPrice"  />
        <!-- <span class="error">* <?php echo $sellingPriceErr;?></span> -->
         <br><br>
         <input type="checkbox" id="display" name="display" value="display">
<label for="vehicle1"> Display</label><br><br>
         <input type="submit" name="addProduct" value="Add">
         </fieldset>
      
    </form>
  </body>
</html>