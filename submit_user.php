<?php
if ($_POST) {
    
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_stock = $_POST['product_stock'];

}

include 'db_connection.php';

$sql = "INSERT INTO products (title, price, description, stock)
VALUES ('$product_name', '$product_price', '$product_description', '$product_stock')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>