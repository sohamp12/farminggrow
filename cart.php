<?php
require_once 'connection.php';
$sql = "SELECT * FROM product";
$all_product = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="fhome.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="navbar.css">
</head>

<body>
  <!--header section-->
  <header class="header">
    <a href="" class="logo"> <i class="fas fa-shopping-basket"></i>Farmingrow

    </a>
    <nav class="navbar">
      <a href="fhome.html">Home</a>
      <a href="">features</a>
      <a href=""> products</a>
      <a href="">review</a>
      <a href="">categories</a>

    </nav>
    <div class="icons">
      <div class="fas fa-bars" id="menubtn"></div>
      <div class="fas fa-search" id="searchbtn"></div>
      <div class="shopping">
        <i class="fas fa-shopping-cart" id="cartbtn"></i>
        <span class="quantity"> 0</span>
      </div>
      <!-- Add the phone call icon after the user icon -->
      <a href="tel:yourphonenumber">
        <div class="fas fa-phone" id="phone"></div>
      </a>


      <a href="farminlogin.html">
        <div class="fas fa-user" id="login"> </div>
      </a>
    </div>

    <form action="" class="search">
      <input type="search" id="searchbox" placeholder="search here..">
      <label for="searchbox" class="fas fa-search"></label>
    </form>
  </header>
  <div class="catmenu">
    <span class="firecracker">🎆</span>
    <ul>
      <li> <a href="#Vegetables">Vegetables</a></li>
      <li> <a href="#fruits">Fruits</a></li>
      <li><a href="#DryFruits">Dry Fruits</a> </li>
      <li> <a href="">Pulses Dal</a></li>
    </ul>
    <span class="firecracker">🎆</span>
    <div class="spark"></div>
  </div>

  <!--shooping-->
  <div class="form-container">
    <header class="newheader">
      <h1 class="heading"> <span>Vegetables</span></h1>
    </header>


    <div id="Vegetables" class="list">
      <?php while ($row = mysqli_fetch_assoc($all_product)) { ?>
        <div class="item">
          <img src="potatoes-2795_640.jpg" alt="">
          <div class="product-info">
            <?php echo $row["product_name"]; ?>
            <br>
            <?php echo $row["product_price"]; ?>/KG
            <button class="addtocart" onclick="addToCard(0)">Add to Cart</button>

          </div>
        </div>
      <?php } ?>
      <div class="item">
        <img src="potatoes-2795_640.jpg" alt="">
        <div class="product-info">
          Potato
          <br>
          40/KG
          <button class="addtocart" onclick="addToCard(0)">Add to Cart</button>

        </div>
      </div>
      <!--item 2-->
      <div class="item">
        <img src="tomato.png" alt="">
        <div class="product-info">
          Tomato
          <br>
          20 / kg
          <button class="addtocart" onclick="addToCard(1)">Add to Cart</button>

        </div>
      </div>
      <!--item3-->
      <div class="item">
        <img src="cabbage.png" alt="">
        <div class="product-info">
          Cabbage
          <br>
          30/KG
          <button class="addtocart" onclick="addToCard(2)">Add to Cart</button>

        </div>
      </div>
      <!--item4-->
      <div class="item">
        <img src="flower(cobi).png" alt="">
        <div class="product-info">
          Cobi
          <br>
          25/KG
          <button class="addtocart" onclick="addToCard(3)">Add to Cart</button>

        </div>
      </div>
      <!--item5-->
      <div class="item">
        <img src="bhendi.png" alt="">
        <div class="product-info">
          Bhendi
          <br>
          30/kg
          <button class="addtocart" onclick="addToCard(4)">Add to Cart</button>

        </div>
      </div>
      <!--item5-->
      <div class="item">
        <img src="shimla mirchi.png" alt="">
        <div class="product-info">
          Capsicum
          <br>
          30/KG
          <button class="addtocart" onclick="addToCard(5)">Add to Cart</button>

        </div>
      </div>

      <!--item 6-->
      <div class="item">
        <img src="gavar.png" alt="">
        <div class="product-info">
          Gavar
          <br>
          25/KG
          <button class="addtocart" onclick="addToCard(6)">Add to Cart</button>

        </div>
      </div>
      <!--item7-->
      <div class="item">
        <img src="vange.png" alt="">
        <div class="product-info">
          Bringel
          <br>
          30/KG
          <button class="addtocart" onclick="addToCard(7)">Add to Cart</button>

        </div>
      </div>
      <!--item 8-->
      <div class="item">
        <img src="matar.png" alt="">
        <div class="product-info">
          Matar (beans)
          <br>
          50/KG
          <button class="addtocart" onclick="addToCard(8)">Add to Cart</button>

        </div>
      </div>
      <!--tem9-->
      <div class="item">
        <img src="pavta.jpg" alt="">
        <div class="product-info">
          Pavta
          <br>
          20/KG
          <button class="addtocart" onclick="addToCard(9)">Add to Cart</button>

        </div>
      </div>
      <!--item10-->
      <div class="item">
        <img src="limbu.png" alt="">
        <div class="product-info">
          Limbu (lemon)
          <br>
          4 per pic.
          <button class="addtocart" onclick="addToCard(10)">Add to Cart</button>

        </div>
      </div>
      <!--ietm11-->
      <div class="item">
        <img src="onion.png" alt="">
        <div class="product-info">
          onion
          <br>
          20/KG
          <button class="addtocart" onclick="addToCard(11)">Add to Cart</button>

        </div>
      </div>





    </div>


    <h1 class="heading"> <span>Fruits</span></h1>
    <div id="fruits" class="list">
      <!--item12-->
      <div class="item">
        <img src="aaplenew.png" alt="">
        <div class="product-info">
          Apple
          <br>
          80/KG
          <button class="addtocart" onclick="addToCard(12)">Add to Cart</button>


        </div>
      </div>

      <!--itme13-->
      <div class="item">
        <img src="banana.png" alt="">
        <div class="product-info">
          Banana
          <br>
          40 per doz
          <button class="addtocart" onclick="addToCard(13)">Add to Cart</button>


        </div>
      </div>

      <!--item14-->
      <div class="item">
        <img src="chiku.png" alt="">
        <div class="product-info">
          chiku
          <br>
          50/KG
          <button class="addtocart" onclick="addToCard(14)">Add to Cart</button>


        </div>
      </div>

      <!--item15-->
      <div class="item">
        <img src="custered apple.png" alt="">
        <div class="product-info">
          Custerd Apple
          <br>
          150/KG
          <button class="addtocart" onclick="addToCard(15)">Add to Cart</button>


        </div>
      </div>
      <!--item16-->
      <div class="item">
        <img src="pineapple.jpg" alt="">
        <div class="product-info">
          Apple
          <br>
          70 per pic
          <button class="addtocart" onclick="addToCard(16)">Add to Cart</button>


        </div>
      </div>

      <!--item17-->
      <div class="item">
        <img src="pomogranate.png" alt="">
        <div class="product-info">
          pomogranate
          <br>
          110/KG
          <button class="addtocart" onclick="addToCard(17)">Add to Cart</button>


        </div>
      </div>

      <!--item18-->
      <div class="item">
        <img src="grapes.png" alt="">
        <div class="product-info">
          Grapes
          <br>
          120/KG
          <button class="addtocart" onclick="addToCard(18)">Add to Cart</button>


        </div>
      </div>
      <!--item19-->
      <div class="item">
        <img src="black grapes.png" alt="">
        <div class="product-info">
          Black Grapes
          <br>
          110/KG
          <button class="addtocart" onclick="addToCard(19)">Add to Cart</button>


        </div>
      </div>

      <!--item20-->
      <div class="item">
        <img src="Orange.jpg" alt="">
        <div class="product-info">
          Orange
          <br>
          70/Kg
          <button class="addtocart" onclick="addToCard(20)">Add to Cart</button>


        </div>
      </div>

      <!--item21-->
      <div class="item">
        <img src="strawbeery.jpg" alt="">
        <div class="product-info">
          Strawbeery
          <br>
          200/KG
          <button class="addtocart" onclick="addToCard(21)">Add to Cart</button>


        </div>
      </div>
      <!--item22-->
      <div class="item">
        <img src="peru.png" alt="">
        <div class="product-info">
          Guava
          <br>
          90/KG
          <button class="addtocart" onclick="addToCard(22)">Add to Cart</button>


        </div>
      </div>



    </div>


    <h1 class="heading"> <span>Dry Fruits</span></h1>
    <div id="DryFruits" class="list">
      <!--item23-->
      <div class="item">
        <img src="almond1.jpg" alt="">
        <div class="product-info">
          Almonds
          <br>
          170 / 100 gm
          <button class="addtocart" onclick="addToCard(23)">Add to Cart</button>


        </div>
      </div>

      <!--item24-->
      <div class="item">
        <img src="kaju1.jpg" alt="">
        <div class="product-info">
          Kaju
          <br>
          125 / 100 gm
          <button class="addtocart" onclick="addToCard(24)">Add to Cart</button>


        </div>
      </div>
      <!--item25-->
      <div class="item">
        <img src="pista1.png" alt="">
        <div class="product-info">
          Pista
          <br>
          270 / 100 gm
          <button class="addtocart" onclick="addToCard(25)">Add to Cart</button>


        </div>
      </div>
      <!--item26-->
      <div class="item">
        <img src="kalekhajur1.jpg" alt="">
        <div class="product-info">
          Kalle Khajur
          <br>
          340 / 1 kg
          <button class="addtocart" onclick="addToCard(26)">Add to Cart</button>


        </div>
      </div>


      <!--item28-->
      <div class="item">
        <img src="lall khajur.png" alt="">
        <div class="product-info">
          lall Khajur/ Red Dates
          <br>
          180 / 1 kg
          <button class="addtocart" onclick="addToCard(28)">Add to Cart</button>


        </div>
      </div>

      <!--item29-->
      <div class="item">
        <img src="mixdryfruit.jpg" alt="">
        <div class="product-info">
          Mix Dry Fruit
          <br>
          780 / Kg
          <button class="addtocart" onclick="addToCard(29)">Add to Cart</button>


        </div>
      </div>

      <!--item30-->
      <div class="item">
        <img src="drykhajur.jpg" alt="">
        <div class="product-info">
          Dry Khajur
          <br>
          40 / 100gm
          <button class="addtocart" onclick="addToCard(30)">Add to Cart</button>


        </div>
      </div>

      <!--item31-->
      <div class="item">
        <img src="manuke1.jpg" alt="">
        <div class="product-info">
          Manuke / Raisins
          <br>
          49 / 100gm
          <button class="addtocart" onclick="addToCard(31)">Add to Cart</button>


        </div>
      </div>

      <!--item32-->
      <div class="item">
        <img src="kallemanuke.png" alt="">
        <div class="product-info">
          Balck Raisins
          <br>
          51 / 100 gm
          <button class="addtocart" onclick="addToCard(32)">Add to Cart</button>


        </div>
      </div>
    </div>
    <h1 class="heading"> <span>Dal & Pulses</span></h1>
    <div id="dal" class="list">
      <!--item33-->
      <div class="item">
        <img src="chana dal.png" alt="">
        <div class="product-info">
          Chana dal
          <br>
          110/ kg
          <button class="addtocart" onclick="addToCard(33)">Add to Cart</button>


        </div>
      </div>

      <!--item34-->
      <div class="item">
        <img src="moongdal.png" alt="">
        <div class="product-info">
          Moong dal
          <br>
          200 / kg
          <button class="addtocart" onclick="addToCard(34)">Add to Cart</button>


        </div>
      </div>

      <!--item35-->
      <div class="item">
        <img src="uraddal.png" alt="">
        <div class="product-info">
          Urad dal
          <br>
          180 / kg
          <button class="addtocart" onclick="addToCard(35)">Add to Cart</button>


        </div>
      </div>

      <!--item36-->
      <div class="item">
        <img src="toordal.png" alt="">
        <div class="product-info">
          Toor dal
          <br>
          100 / 500 g
          <button class="addtocart" onclick="addToCard(36)">Add to Cart</button>


        </div>
      </div>
      <!--item37-->
      <div class="item">
        <img src="massordal.png" alt="">
        <div class="product-info">
          Masoor dal
          <br>
          63 / 500 gm
          <button class="addtocart" onclick="addToCard(37)">Add to Cart</button>


        </div>
      </div>

      <!--item38-->
      <div class="item">
        <img src="dalcart.jpg" alt="">
        <div class="product-info">
          Mix Dal cart
          <br>
          350 / basket
          <button class="addtocart" onclick="addToCard(38)">Add to Cart</button>


        </div>
      </div>
      <!--item39-->
      <div class="item">
        <img src="chole.jpg" alt="">
        <div class="product-info">
          Chole / Cheakpea
          <br>
          180 / kg
          <button class="addtocart" onclick="addToCard(39)">Add to Cart</button>


        </div>
      </div>

      <!--item40-->
      <div class="item">
        <img src="rajma.jpg" alt="">
        <div class="product-info">
          Rajma
          <br>
          160 / Kg
          <button class="addtocart" onclick="addToCard(40)">Add to Cart</button>


        </div>
      </div>

      <!--item41-->
      <div class="item">
        <img src="shengdana.jpg" alt="">
        <div class="product-info">
          Groundnut
          <br>
          120 / kg
          <button class="addtocart" onclick="addToCard(41)">Add to Cart</button>


        </div>
      </div>
      <!--item42-->
      <div class="item">
        <img src="moogsprout.jpg" alt="">
        <div class="product-info">
          Moong Sprout
          <br>
          50 / 100 gm
          <button class="addtocart" onclick="addToCard(42)">Add to Cart</button>


        </div>
      </div>



    </div>
  </div>


  <div class="card">
    <h1>Cart</h1>
    <ul class="listCard">
    </ul>
    <div class="checkOut">
      <div class="total" onclick="cal()">0</div>
      <div class="closeShopping">Close</div>
    </div>
  </div>

  <script src="app.js">


  </script>
</body>

</html>