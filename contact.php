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
<h2>Contact Us</h2>
<div style="text-align:center;">
    Have a question regarding our products or your order? Drop us an enquiry below!
</div>
<table class="contacttable" style="margin:auto; padding-top: 14px;">
<form name="contactform" action="feedback.php" method ="get">
    <tr>
        <th style="float: left;"><strong><label>*Name: </label></strong></th>
        <td><input type="text" name="name" id="name" onchange="validateName()" size="30" required></td>
    </tr>
    <tr>
        <th style="float: left;"><strong><label>*Email: </label></strong></th>
        <td><input type="email" name="email" id="email" onchange="validateEmail()" size="30" required></td>
    </tr>
	    <tr>
        <th style="float: left;"><strong><label>*Contact Number: </label></strong></th>
        <td><input type="number" name="phonenum" id="phonenum" onchange="validatePhone()" size="30" required></td>
    </tr>
    <tr>
        <th style="float: left;"><strong><label>*Comments: </label></strong></th>
        <td><textarea name="comments" id="comments" rows="2" cols ="30" required></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Submit"></td>
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