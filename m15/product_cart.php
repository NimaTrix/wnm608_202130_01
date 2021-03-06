<?
	require_once "lib/php/functions.php";
	require_once "parts/templates.php";

$cartItems = getCartItems();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Audiophile: Cart</title>
	<? include "parts/meta.php" ?>
</head>
<body>
	<? include "parts/navbar.php"; ?>	

	<div class="container pad push-down">
		<nav class="nav-crumbs" style="margin:1em 0">
         <ul>
            <li><a href="product_list.php">Back to product list</a></li>
         </ul>
      </nav>
		<div class="grid gap">
			<div class="col-xs-12 col-md-8">
				<div class="card-flat">
					<h2>Shopping Cart</h2>
					<?= 
					    count($cartItems)?
					    array_reduce($cartItems,'cartListTemplate'):
					    "No Items in Cart"
					?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card-basic">
					<?= cartTotals(True) ?>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button confirm">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>