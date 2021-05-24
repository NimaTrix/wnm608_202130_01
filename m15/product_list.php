<?
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$pagelimit = 12;
$pageoffset = isset($_GET['page'])?$_GET['page']:0;

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Audiophile: Product List</title>

   <?php include "parts/meta.php" ?>

  <script src="lib/js/functions.js"></script>
  <script src="js/templates.js"></script>
  <script src="js/list.js"></script>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container pad push-down">
        <div class="grid gap">
           <div class="col-xs-12 col-md-3 col-lg-2">
              <div class="card-basic card-flat">
                 <div class="card-section">
                    <h3>
                       Filter
                    </h3>
                    <button type="button" class="form-button js-filter" data-column="category" data-value="">All</button>
                     <button type="button" class="form-button js-filter" data-column="category" data-value="wired">Wired</button>
                     <button type="button" class="form-button js-filter" data-column="category" data-value="wireless">Wireless</button>
                     <button type="button" class="form-button js-filter" data-column="category" data-value="parts">Parts</button>
                 </div>
                 <div class="card-section">
                    <h3>Sort</h3>
                    <div class="form-select">
                      <select class="js-sort">
                      <option value="1">Newest</option>
                      <option value="2">Oldest</option>
                      <option value="3">Most Expensive</option>
                      <option value="4">Least Expensive</option>
                    </select>
                  </div>
                 </div>
                 <div class="card-section">
                 <div class="form-control">
                    <form class="hotdog" id="product-search">
                    <input type="search" class="hotdog search" placeholder="Search">
                     </form>
                  </div>
               </div>
              </div>
           </div>
           <div class="col-xs-12 col-md-9 col-lg-10">
              <div class="grid gap productlist"></div>
              <br><br><br>
           </div>
        </div>
   </div>


<? include "parts/footer.php" ?>

    

</body>
</html>

