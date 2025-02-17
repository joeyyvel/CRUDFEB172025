<?php
include 'database.php';
connectiondb();

?>

<?php

$productname_ = "";
$productdescription_ = "";
$productstocks_ = "";

if(isset($_GET["id"])){

    $conn = connectiondb();
    $result = $conn->query("SELECT * FROM gadgets where product_id=" .$_GET["id"]);

    if($result->num_rows > 0){
        //data output
        while($row = $result->fetch_assoc()){
           $productname_ = $row["product_name"];
           $productdescription_ = $row["product_description"];
           $productstocks_ =$row["stocks"];
        }
    } else {
        echo "0 Result";
    }
   $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Update Page</title>
</head>
<body>
   <div class="container">
      <h1 class="text text-success">Update Page</h1><br>
      <a href="index.php" class="btn btn-danger">back to home page</a>
      <br><br>
      <form action="updateprocess.php" method="post">
        
        <input type="text" names="productid" value="<?php echo $_GET["id"]; ?>"><br><br>
      
        <label>Product Name:</label><br>
        <input type="text" name="productname" value="<?php echo $productname_; ?>"> <br><br>

        <label>Product Description:</label><br>
        <input type="text" name="productdescription" value="<?php echo $productdescription_; ?>" > <br><br>

        <label>Product stocks:</label><br>
        <input type="number" name="productstocks" value="<?php echo $productstocks_; ?>"> <br><br>

        <input type="submit" value="submit" class="btn btn-primary">

      </form>


   </div>   


</body>
</html>