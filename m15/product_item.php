<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = getRows(
   makeConn(),
   "SELECT *
   FROM `products`
   WHERE `id` = '{$_GET['id']}'
   "
);
$o = $result[0];

$thumbs = explode(",", $o->images);

// print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Audiophile: Product Item</title>

   <?php include "parts/meta.php" ?>

</head>
<body>

   <?php include "parts/navbar.php" ?>

   <div class="container">
      <nav class="nav-crumbs" style="margin:1em 0">
         <ul>
            <li><a href="product_list.php">Back to product list</a></li>
         </ul>
      </nav>

      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft">
               <div class="image-main">
                  <img src="<?= $o->main_image ?>" alt="">
               </div>
               <div class="image-thumbs">
               <?php

               echo array_reduce($thumbs,function($r,$o){
                  return $r."<img src='$o'>";
               })

               ?>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <form class="card-basic" method="get" action="form_actions.php">
               <div class="card-section">
                  <h2 class="product-title"><?= $o->title ?></h2>
                  <div class="product-category"><?= $o->category ?></div>
                  <div class="display-flex">
                     <div class="product-description flex-stretch">
                        <div class="product-price">&dollar;<?= $o->price ?></div>
                     </div>
                     <div class="product-quantity">
                        <?= $o->quantity ?> in stock
                     </div>
                  </div>
               </div>

               <div class="card-section">
                  <label class="form-label">Amount</label>
                  <select name="amount" class="form-button">
                     <!-- option*10>{$} -->
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                     <option>6</option>
                     <option>7</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                  </select>
               </div>

               <div class="card-section">
                  <input type="hidden" name="action" value="add-to-cart">
                  <input type="hidden" name="id" value="<?= $o->id ?>">
                  <input type="hidden" name="price" value="<?= $o->price ?>">
                  <input type="submit" class="form-button" value="Add To Cart">
               </div>
            </form>
         </div>
      </div>

      <div class="card soft dark">
         <h3>Description</h3>
         <div class="product-description">
            <?= $o->description ?>
         </div>
      </div>
    <hr class="spacer large">
      <div>
         <h3>Similar Products</h3>

         <?php recommendedProducts($o->category,$o->id) ?>
      </div>
   </div>

<? include "parts/footer.php" ?>

</body>
</html>