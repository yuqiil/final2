<?php
if(!isset($_REQUEST['id'])){ 
    header("Location: index.html"); 
} 

$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

// Set up connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = (
    "SELECT r.*, c.customer_name, c.email, c.phonenum, c.address 
    FROM orders_table AS r 
    LEFT JOIN customers_table 
    AS c ON c.id = r.customer_id 
    WHERE r.id = ".$_REQUEST['id']
    ); 
 
if ($result = mysqli_query($conn,$sql)) {
    $resultCheck=mysqli_num_rows($result);
    $orderInfo =mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Signature Cakes | Cake Shop 4717</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<script type = "text/javascript" src = "javascript/formcheck.js"></script>
</head>
<body>
<div id="wrapper">
<header>   
<a href="cart.php"><img id="shoppingbag" src="media/shoppingbag.png"></a>
</header>
<div id="nav">   
<ul>
    <li><a href="index.html">Home</a></li> 
    <li><a href="signaturecakes.php">Signature Cakes</a></li> 
    <li><a href="icecreamcakes.php">Ice Cream Cakes</a></li>
    <li><a href="locations.php">Locations</a></li>
    <li><a href="contact.php">Contact</a></li> 
</ul>
</div>
<h2><strong>Your order has been placed successfully.</strong></h2>
<main>
<h2>Order Info</h2>
    <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
    <p><b>Total:</b> <?php echo '$'.$orderInfo['total']; ?></p>
    <p><b>Customer Name:</b> <?php echo $orderInfo['customer_name']?></p>
    <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
    <p><b>Phone:</b> <?php echo $orderInfo['phonenum']; ?></p>
    <p><b>Address:</b> <?php echo $orderInfo['address']; ?></p>
    <p><b>Ordered Items:<br></b>    
    
        <?php 
        //Get order items from the database 
        $itemsql =(
                    "SELECT i.*, o.id
                     FROM orders_item AS i 
                     LEFT JOIN orders_table AS o 
                     ON o.id = i.order_id 
                     WHERE i.order_id = ".$orderInfo['id']);
    
        if ($itemresult = mysqli_query($conn,$itemsql)) {
                $resultCheck2=mysqli_num_rows($itemresult);
                while($orderItem =mysqli_fetch_assoc($itemresult)){
                echo $orderItem['product_name'];
                echo ' ..... ';
                echo '$'.$orderItem['product_price'];
                echo '<br>';
                }
            }
        ?>
    
    </p>
    <p><b>Item will be delivered in 3 days time.</b></p>
</main>
</div>
</body>
<footer>
    <small><i>
    Copyright &copy; 2019 Cake Shop 4717
    <br>
    <span class="contact">
    <a href="mailto:cakeshop4717@f34.com">cakeshop4717@f34.com</a>
    </span></i></small>
</footer>
</html>