<?php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

// Set up connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}

    $items = array(
       'Cream Layer Cake with Fruit',
	   'Black Forest Cake',
	   'Princess Cake',
	   'White Chocolate Cheesecake',
	   'Paris at Night',
	   'Fly with Me',
	   'Chocolate Curls',
	   'Rose Whisper');
    $prices = array(50.00, 45.00, 30.00, 40.00,50.00, 40.00, 50.00, 55.00);
   
   // Insert customer data in the database 
	$name = $_GET['name'];
	$email = $_GET['email'];
	$phonenum = $_GET['phonenum'];
	$address = $_GET['address'];
	 $insertCust = "INSERT INTO customers_table(customer_name,email,phonenum,address) VALUES ('$name', '$email', '$phonenum', '$address')";
	
	if(mysqli_query($conn,$insertCust)){
		$customerid= mysqli_insert_id($conn);
	}
	$total = 0;
	for ($i=0; $i < count($_SESSION['cart']); $i++){
  
	    $items[$_SESSION['cart'][$i]];
	     
		$prices[$_SESSION['cart'][$i]];
        
	    $total = $total + $prices[$_SESSION['cart'][$i]];
	}
	
	$insertOrder ="INSERT INTO orders_table(customer_id, total) VALUES('$customerid' , '$total')";
	if(mysqli_query($conn,$insertOrder)){
			$orderid= mysqli_insert_id($conn);
		
	}
	for ($i=0; $i < count($_SESSION['cart']); $i++){
  
	    $productName =$items[$_SESSION['cart'][$i]];  
		$productPrice =$prices[$_SESSION['cart'][$i]];
		$insertOrderItem ="INSERT INTO orders_item(order_id,product_name,product_price) VALUES('$orderid','$productName','$productPrice')";
		mysqli_query($conn,$insertOrderItem); 

	}
        
	
	 $redirectLoc = 'ordersuccess.php?id='.$orderid;
     unset($_SESSION['cart']);
	 header("Location: $redirectLoc");
	 exit();
 
 

 
	
	