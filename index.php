<?php include('layouts/header.php');        ?>
  <!----Home-->
  <section id="home">
    <div class="container">
     <h5>NEW ARRIVALS</h5>
     <h1><span>Best Prices </span> This Season</h1>
     <p>Eshop offers the best products for the most affordable prices</p>
     <button>Shop Now</button>
    </div>
  </section>
<!--Brand-->
<section id="brand" class="container">
    <div class="row">
        <img class="img-fluid col-lg-3 col-md-6 col-sm -12" src="assets/imgs/brand1.jpg"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm -12" src="assets/imgs/brand2.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm -12" src="assets/imgs/brand7.png"/>
        <img class="img-fluid col-lg-3 col-md-6 col-sm -12" src="assets/imgs/brand8.png"/>

    </div>

</section>

<!--new-->
<section id="new" class="w-100">
    <div class="row p-0 m-0">
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img class="img-fluid" src="assets/imgs/1.jpg">
           <div class="details">
            <h2>Extremely Awesome Shoes</h2>
            <button class="text-uppercase">Shop Now</button>
           </div> 
        </div>
          <!--two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/4.jpg">
             <div class="details">
              <h2> 50% OFF Bag</h2>
              <button class="text-uppercase">Shop Now</button>
             </div> 
          </div>

          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/5.jpg">
             <div class="details">
              <h2>Awesome Heels</h2>
              <button class="text-uppercase">Shop Now</button>
             </div> 
          </div>
    </div>

</section>


<!--Featured-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-3 py-5">
        <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
    </div>
    <div class="row mx-auto container-fluid">
      <?php
      include('server/get_featured_products.php');
      ?>
      <?php while($row= $featured_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3 " src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
         <a href= "<?php echo "single_product.php?product_id=". $row['product_id']; ?>"> <button class="buy-btn">Buy Now</button></a>
        </div>
       
          
         <?php  } ?>

    </div>

</section>


<!--banner-->
<section id="banner" class="my-5 py-5">
    <div class="container">
        <h4>MID SEASON'5 SALE</h4>
        <h1>Sunny Collection<br>UP to 30% OFF</h1>
          <button class="text-uppercase">Shop Now</button>
    </div>

</section>

<!--clothes-->

<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-3 py-5">
        <h3>Shirt & Gowns</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing clothes</p>
    </div>
    <div class="row mx-auto container-fluid">
    <?php
      include('server/get_shirt_and_gown.php');
      ?>
      <?php while($row= $shirt_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3 " src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        
          
        <?php  } ?>

    </div>

</section>

<!--Snickers-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-3 py-5">
        <h3>Snickers</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing Snickers</p>
    </div>
    <div class="row mx-auto container-fluid">
    <?php
      include('server/get_snickers.php');
      ?>
      <?php while($row= $snickers_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3 " src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        
          
        <?php  } ?>
        
          

    </div>

</section>
<!--watches-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-3 py-5">
        <h3>Watches</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing Watches</p>
    </div>
    <div class="row mx-auto container-fluid">
    <?php
      include('server/get_watches.php');
      ?>
      <?php while($row= $watches_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3 " src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        
          
        <?php  } ?>
       
         
        

    </div>

</section>

<!--bags-->
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-3 py-5">
        <h3>Bags</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing Bags</p>
    </div>
    <div class="row mx-auto container-fluid">
    <?php
      include('server/get_bags.php');
      ?>
      <?php while($row= $bags_products->fetch_assoc()) {?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3 " src="assets/imgs/<?php echo $row['product_image']; ?>"/>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id']; ?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        
          
        <?php  } ?>
       
         
        

    </div>

</section>



<!--footer-->


<?php include('layouts/footer.php');        ?>





