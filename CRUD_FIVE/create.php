<?php
include 'database.php';
connectiondb();
?>

<?php
  if(isset($_POST["productname"])
     && isset($_POST["productdescription"])
     && isset($_POST["productstocks"]))
           {
         $name = $_POST["productname"];
         $description = $_POST["productdescription"];
         $stocks = $_POST["productstocks"];

       $conn = connectiondb();
       $sql = "INSERT INTO gadgets (product_name, product_description, stocks)
               VALUES('".$name."','".$description."', '".$stocks."')";
         if($conn->query($sql) === TRUE){
             echo "NEW RECORD CREATED SUCCESSFULLY";
          } else {
             echo "Error: " .$sql. "<br>" .$conn->error;
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

    <title>Document</title>
</head>
<body>
   <div class="container">
      <h1 class="text text-primary">Create Page</h1><br>
      <a href="index.php" class="btn btn-warning">back to home page</a>
      <br><br>
      <form action="create.php" method="post">

        <label>Product Name:</label><br>
        <input type="text" name="productname"> <br><br>

        <label>Product Description:</label><br>
        <input type="text" name="productdescription"> <br><br>

        <label>Product stocks:</label><br>
        <input type="number" name="productstocks"> <br><br>

        <input type="submit" class="btn btn-primary" value="submit">
      </form>
      </div>        
    <?php
      if(isset($_POST["productname"])){

      }
    
    ?>





</body>
</html>