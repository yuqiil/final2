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

session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
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
    <li><a href="index.php">Home</a></li> 
    <li><a href="signaturecakes.php">Signature Cakes</a></li> 
    <li><a href="icecreamcakes.php">Ice Cream Cakes</a></li>
    <li><a href="locations.php">Locations</a></li>
    <li><a href="contact.php">Contact</a></li> 
</ul>
</div>
<main>
	<h2>Checkout</h2>
    
    <?php
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
    ?>
    
<table class="menutable1">
<form action="orderconfirm.php" method="get">
    <tr>
        <tr>
		<th colspan="2">Item Description</th>
		<th colspan="2">Price</th>
    </tr>
    <tr>
    <?php
      $total = 0;
      for ($i=0; $i < count($_SESSION['cart']); $i++){
         echo "<tr>";
	     echo "<td colspan=\"2\">" .$items[$_SESSION['cart'][$i]]. "</td>";
	     echo "<td colspan=\"2\" align='right'>$";
	     echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
         echo "</tr>";
	     $total = $total + $prices[$_SESSION['cart'][$i]];
		 }
    ?>
    </tr>
    <tr>
        <br><th colspan="4" align='right'name="total"><br>Total: $<?php echo number_format($total, 2); ?>
		</th>
    </tr>
</form>
</table>
<br><br><hr><br>
<h2>Delivery Details</h2>
<table class="menutable1">
<form name="contactform" action="orderconfirm.php" method ="get">
    <tr>
        <th><strong><label>*Name: </label></strong></th>
        <td><input type="text" name="name" id="name" onchange="validateName()" size="30" required></td>
    </tr>
    <tr>
        <th><strong><label>*Email: </label></strong></th>
        <td><input type="email" name="email" id="email" onchange="validateEmail()" size="30" required></td>
    </tr>
	    <tr>
        <th><strong><label>*Contact Number: </label></strong></th>
        <td><input type="number" name="phonenum" id="phonenum" onchange="validatePhone()" size="30" required></td>
    </tr>
    <tr>
        <th><strong><label>*Address: </label></strong></th>
        <td><textarea name="address" id="address" rows="2" cols ="30" required></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Place Order"></td>
    </tr>
</form>
</table>
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