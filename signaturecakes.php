<?php 
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
    echo '<script>
    alert("Added!");
    window.location.replace("cart.php");
    </script>';
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
    
    <?php
    $items = array(
       'Cream Layer Cake with Fruit',
	   'Black Forest Cake',
	   'Princess Cake',
	   'White Chocolate Cheesecake');
    $prices = array(50.00, 45.00, 30.00, 40.00);
    ?>
    
<table class="menutable1">
    <tr>
        <td><img id="cake" src="media/creamlayercakewithfruit.jpg"></td>
        <td><img id="cake" src="media/blackforest.jpg"></td>
        <td><img id="cake" src="media/princess.jpg"></td>
        <td><img id="cake" src="media/whitechoco.jpg"></td>
    </tr>
    <tr>
        <th><strong>Cream Layer Cake with Fruit</strong></th>
        <th><strong>Black Forest Cake</strong></th>
        <th><strong>Princess Cake</strong></th>
        <th><strong>White Chocolate Cheesecake</strong></th>
    </tr>
    <tr>
        <td id="desc">Sponge bases layered with homemade custard, raspberries, fluffy cream and piped flowers.<br> Fresh fruit on top.</td>
        <td id="desc">Made entirely according to the original recipe: hazelnut meringue brushed with dark chocolate and layered with cream.<br></td>
        <td id="desc">This royal cake is baked according to our own secret method, which gives it its unique taste and creaminess.</td>
        <td id="desc">Compact, white chocolate cheesecake with digestive biscuit base and topped with a tart raspberry compote.</td>
    </tr>
    <tr>
        <td>$50.00</td>
        <td>$45.00</td>
        <td>$30.00</td>
        <td>$40.00</td>
    </tr>
    <tr>
    <?php
    for ($i=0; $i<count($items); $i++){
	   echo "<td><a href='" .$_SERVER['PHP_SELF']. '?buy=' .$i. "'>Add to Cart</a></td>";
    }
    ?>
    </tr>       
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
