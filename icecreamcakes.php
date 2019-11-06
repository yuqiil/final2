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
<title>Ice Cream Cakes | Cake Shop 4717</title>
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
	   'White Chocolate Cheesecake',
       'Paris at Night',
	   'Fly with Me',
	   'Chocolate Curls',
	   'Rose Whisper');
    $prices = array(50.00, 45.00, 30.00, 40.00, 50.00, 40.00, 50.00, 55.00);
    ?>
    
<table class="menutable1">
    <tr>
        <td><img id="cake" src="media/parisatnight.png"></td>
        <td><img id="cake" src="media/flywithme.png"></td>
        <td><img id="cake" src="media/chocolatecurls.png"></td>
        <td><img id="cake" src="media/rosewhisper.png"></td>
    </tr>
    <tr>
        <th><strong>Paris at Night</strong></th>
        <th><strong>Fly with Me</strong></th>
        <th><strong>Chocolate Curls</strong></th>
        <th><strong>Rose Whisper</strong></th>
    </tr>
    <tr>
        <td id="desc">Macadamia Nut and Coffee ice cream coated in crunchy chocolate with a splash of gold reminiscent sparkling night in Paris.</td>
        <td id="desc">Cookies & Cream and Chocolate Ice cream carefully coated in chocolate glaze topped with fresh whipped cream and handcrafted airplane shape chocolate decors.<br></td>
        <td id="desc">A sinful pairing of Chocolate and Cookies & Cream ice-cream, decorated lavishly with caramelised hazeluts, chocolate crumble, mixed berries and a tangle of tempting chocolate curls.</td>
        <td id="desc">Vanilla coupled with Strawberry ice-cream make the perfect pair in this romantic masterpiece, topped with a bouquet of sugar roses and wrapped with a quilted pink chocolate sheet.</td>
    </tr>
	<tr>
        <td>$50.00</td>
        <td>$40.00</td>
        <td>$50.00</td>
        <td>$55.00</td>
    </tr>
    <tr>
    <?php
    for ($i=4; $i<count($items); $i++){
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
