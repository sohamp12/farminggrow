<?php
require_once 'connection.php';
$sql ="SELECT * FROM product";
$all_product =$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="fhome.css">
</head>
<body>
    <!--header section-->
 <header class="header">
    <a href="" class="logo"> <i class="fas fa-shopping-basket"></i>Farmingrow

    </a>
    <nav class="navbar">
        <a href="">Home</a>
        <a href="">features</a>
        <a href=""> products</a>
        <a href="">review</a>
        <a href="">categories</a>

    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="menubtn"></div>
        <div class="fas fa-search" id="searchbtn"></div>
        <div class="fas fa-shopping-cart" id="cartbtn"></div>
        <a href="farminlogin.html">
        <div class="fas fa-user" id="login"> </div> </a>
    </div>

    <form action="" class="search">
        <input type="search" id="searchbox" placeholder="search here..">
        <label for="searchbox" class="fas fa-search"></label>
    </form>
    <div class="shoppingcart">
        
        <!--item 1-->

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="watermelon.jpg" alt="">
            <div class="content">
                <h3>Watermelon</h3>
                <span class="price">₹ 80 per pec.</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
      <!--ietm 2-->

        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="Apple.jpg" alt="">
            <div class="content">
                <h3>Apple</h3>
                <span class="price">₹ 120 / KG.</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>

        <!--item 3-->
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="Orange.jpg" alt="">
            <div class="content">
                <h3>Orange</h3>
                <span class="price">₹ 70   /  KG</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total">total : ruppes 300/-</div>
        <a href="" class="btn"> Checkout</a>
    </div>



 </header>

<!--home section-->
<section class="home" id="home">
    <div class="content">
        <h3>Fresh and <span>Organic</span> products for you</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam suscipit eos persp.</p>
        <a href="" class="btn">Shop now</a>
    </div>
</section>


<!--features-->
<section class="features" id="features">
    <h1 class="heading">our <span>Features</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="Online Groceries-cuate.png" alt="">
            <h3>Fresh and Organic</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eum?</p>
            <a href="" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="Free shipping-cuate.png" alt="">
            <h3>Free Delivery </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eum?</p>
            <a href="" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="Mobile payments-cuate.png" alt="">
            <h3>Easy Payment</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eum?</p>
            <a href="" class="btn">read more</a>
        </div>


    </div>
</section>

<!--product section-->
<section class="product" id="product">
    <h1 class="heading">Our <span>Products</span></h1>

    <div class="product-slider">
        <?php while($row = mysqli_fetch_assoc($all_product)) { ?>
            <div class="product-item">
                <img style="height: 100px; width: 300px;" src="Orange.jpg" alt="">
                <h3><?php echo $row["product_name"]; ?></h3>
                <div class="price"><?php echo $row["product_price"]; ?></div>
                <a href="" class="btn">Add to Cart</a>
            </div>
        <?php } ?>
    </div>
</section>
>


<!--cateogires-->
<section class="categories" id="categories">
<h1 class="heading"> Product <span>categories</span></h1>
<div class="box-conatiner">
    <div class=" swiper-slide box">
        <img src="vegetable categories 1.jpg" alt="">
        <h3>Vegetable</h3>
        <p>upto <span class="discount">20%</span> off</p>
        <a href="" class="btn">Shop now</a>
    </div>

    <!--item2 -->
    <div class="swiper-slide box">
        <img src="fruits.jpg" alt="">
        <h3>Fruits</h3>
        <p>upto 10% off</p>
        <a href="" class="btn">Shop now</a>
    </div>

    <!--item3-->
    <div class="swiper-slide box">
        <img src="dairy product.jpg" alt="">
        <h3>Dairy Product</h3>
        <p>upto 10% off</p>
        <a href="" class="btn">Shop now</a>
    </div>

    <!--ietm 3-->
    <div class="swiper-slide box">
        <img src="meat.jpg" alt="">
        <h3>Fresh Meat</h3>
        <p>upto 30% off</p>
        <a href="" class="btn">Shop now</a>
    </div>

    <!--ietm 5-->
    <div class="swiper-slide box">
        <img src="pulses and Dal.jpg" alt="">
        <h3>Pulses and Dal</h3>
        <p>upto <span class="discount">40%</span>off</p>
        <a href="" class="btn">Shop now</a>
    </div>
</div>
</section>
    <!-- script file-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="mainscript.js"></script>
</body>
</html>
