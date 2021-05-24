<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audiophile store</title>
    <?php include "parts/meta.php" ?>
</head>
<body>

    <?php include "parts/navbar.php" ?>


    <div class="view-window hero" style ="background-image: url(img/m1.jpeg)">
        <h1>Audiophile</h1>
    </div>
    <br>
    <div class="container pad">
        <div class="card card-soft card-light card-flat">
            <div class="grid">
                <div class="col-xs-12 col-md-6 center-child">
                    <div style="max-width: 75%;">
                        <h2>The Audio store</h2>
                        <p>Looking for some Headphones?<br><span>Discover how much better your music can sound when you have the right gear for the job. </span><span><br><br><br>This is the place for music lovers, musicians, sound engineers, and more.</span></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="img/m2.jpg" alt="Headphones" class="image-cover"> <!--image source -->
                </div>
            </div>
        </div>
    </div>

    <hr class="spacer large">

    <div class="container pad" id="categories">
        <h2>Best selling items</h2>
        <div class="grid gap xs-small md-large">
            <div class="col-xs-6 col-md-3">
                <figure>
                    <div class="image-circle">
                        <a href="product_item.php?id=1">
                            <img src="img/1/1.jpeg" alt="">
                        </a>
                    </div>
                    <br>
                    <figcaption>DROP + SENNHEISER PC38X GAMING HEADSET</figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-md-3">
                <figure>
                    <div class="image-circle">
                        <a href="product_item.php?id=3">
                            <img src="img/3/1.jpeg" alt="">
                        </a>
                    </div>
                    <br>
                    <figcaption>MASSDROP X SENNHEISER HD 58X JUBILEE HEADPHONES</figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-md-3">
                <figure>
                    <div class="image-circle">
                        <a href="product_item.php?id=1">
                            <img src="img/7/1.jpeg" alt="">
                        </a>
                    </div>  
                    <br>
                    <figcaption>MASSDROP X FOCAL ELEX HEADPHONES</figcaption>
                </figure>
            </div>
            <div class="col-xs-6 col-md-3">
                <figure>
                    <div class="image-circle">
                        <a href="product_item.php?id=1">
                            <img src="img/10/1.jpeg" alt="">
                        </a>
                    </div>
                    <br>
                    <figcaption>MASSDROP X BEYERDYNAMIC DT 177X GO HEADPHONES</figcaption>
                </figure>
            </div>
        </div>
    </div>


<? include "parts/footer.php" ?>
    
</body>
</html>

















