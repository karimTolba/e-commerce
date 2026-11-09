<?php

if ($_POST) {
    
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_stock = $_POST['product_stock'];
    $product_image = $_FILES['product_image'];
    $product_image_name = $product_image['name'];

    $extension = pathinfo($product_image_name, PATHINFO_EXTENSION);

    $new_image_name = uniqid() . '.' . $extension;

    copy($product_image['tmp_name'], 'images/' . $new_image_name);
}

include 'db_connection.php';

$sql = "INSERT INTO products (title, price, description, stock , image)
VALUES ('$product_title', '$product_price', '$product_description', '$product_stock', '$new_image_name')";  

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
