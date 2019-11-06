<?php  
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Signature Cakes | Cake Shop 4717</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
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
<main>
    <h2>Your shopping cart contains </h2>
    
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
    $prices = array(50.00, 45.00, 30.00, 40.00, 50.00, 40.00, 50.00, 55.00);
    ?>
    
<table class="menutable1">
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
        <br><th colspan="4" align='right'><br>Total: $<?php echo number_format($total, 2); ?>
		</th>
    </tr>
</table>
<p><a href="javascript:history.back()">Continue Shopping</a> or
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a>
</p>
<p><a href="checkout.php">Check Out</a>
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
