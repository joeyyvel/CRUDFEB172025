<?php
 echo "Hello update process <br><br>";
 include 'database.php';
 connectiondb();

?>

<?php
  
  if(isset($_POST["productname"])
    && isset($_POST["productdescription"])
    && isset($_POST["stocks"]))
    {
    $name = $_POST["productname"];
    $description = $_POST["productdescription"];
    $stocks = $_POST["stocks"];

    $conn = connectiondb();
    $sql = "update gadgets
            set product_name = '".$name."',
            product_description = '".$description."',
            stocks = '".$stocks."'
            where product_id =" .$id;

      if($conn->query($sql) === TRUE){
         echo "DATA HAS BEEN UPDATED!!<br><br>";
      } else {
        echo "Error." .$sql. "<br>" .$conn->error;
      }     
      $conn->close();
    }

?>
<a href="index.php">back to home page</a>