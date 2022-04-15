<?php
// INSERT INTO `products` (`id`, `Name`, `price`, `Description_product`, `supply`, `Assignment_Category`, `image_dir`) VALUES ('300', 'test 2', '', '', '', '', '');
include('db.php');

if (isset($_POST['add_product'])) {
  $id = $_POST['id'];
  $Name = $_POST['Name'];
  $Description_product = $_POST['Description_product'];
  $price = $_POST['price'];
  $supply = $_POST['supply'];
  $Assignment_Category = $_POST['Assignment_Category'];
  // Query used : 
  $query = "INSERT INTO products(id, Name, price, Description_product, supply, Assignment_Category) VALUES ('$id', '$Name', '$price', '$Description_product', '$supply', '$Assignment_Category', '')"; 
  $result = mysqli_query($conn, $query);
  $message = "Product added!";
echo "<script type='text/javascript'>alert('$message');</script>";
  if(!$result) {
    die("Query Failed."); 
    echo '<script>alert("Dashboard : Query Error!")</script>';
  }
  header('Location: products_manager.php');

}







?>
