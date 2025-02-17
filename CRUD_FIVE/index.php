<?php
include 'database.php';
connectiondb();
echo "hello i am index";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>CRUD 5</title>
</head>
<body>
     <div class="container">
        <h1 class="text text-danger">Joey Inventory Management</h1>
         <h6 class="text text-warning">Create Read Update Delete</h6>
         
         <a href="create.php">to create page</a>
         <ul class="list-group">
         <?php
       $conn = connectiondb();
       $result = $conn->query("SELECT * FROM gadgets");

         if($result->num_rows > 0){
         //data output
         while($row = $result->fetch_assoc()){
         echo "<li class='list-group-item'>"
             .$row["product_name"]
             ."<a href='update.php?id=".$row["product_id"]."' class='float-end' >Edit</a>"
             ."</li>";
     }
  }
?>    





        </ul> 
    </div>

</body>
</html>

