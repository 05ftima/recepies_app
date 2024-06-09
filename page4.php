
<?php 

include('./connecion.php');

if (isset($_GET['getnam'])) {
    $nam = $_GET['getnam'];

    $stmt = $conn->prepare("SELECT * FROM  plant WHERE plant.name =?");
    $stmt->bind_param("s", $nam);
    $stmt->execute();

   $featurd_products = $stmt->get_result();
}

?>

<?php include('./header.php')?>

            <?php  
        // Check if $featurd_products is set and not null
        if(isset($featurd_products) && $featurd_products !== null) {
            while($row = $featurd_products->fetch_assoc()) {  
        ?>

                    <div>
                        <div class="image_taxt_wrapper" style="padding:40px" >
                            
                            <div class="text">
                                <ol class="breadcrumbList">
                                    <li><a   class="kicker" href=""><span itemprop="name">Editors’ Collection</span></a></li>
                                </ol>
                                <h1 itemprop="name" class="name" data-name=" Vegetarian Comfort Food Recipes" ><?php echo $row['name']; ?></h1>
                                
                                    <div class="shar_groupe">
                                        <a href="" class="share_btn" data-role="share-button" data-platform="Email" rel="noreferrer noopener"><i class="fas fa-envelope"></i></a>
                                        <a href="" data-role="share-button" data-platform="Facebook"><i class="fab fa-facebook-square"></i></a>
                                        <a href="" data-role="share-button" data-platform="Instagram"><i class="fab fa-instagram"></i></a>
                                        <a href="" data-role="share-button" data-platform="OtherPlatform"><i class="fas fa-times"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>

            
                    <?php 
            }
        } else {
            echo "No featured products available."; // Display a message if $featurd_products is not set or null
        }
        ?>
            
            <div id="content" class="super_collection super_collection_wrapper2 " >
                  <header class="collection_carousel_header">
                    <h2 class="super_collection_header"><a href="">Grilled Chicken Recipes</a></h2>
                  </header>
              <div class="gid_warap">
                <section id="product1" class="collection_carousel collection_carousel_product section-p1">


                  <div class="pro-container">

                  <?php  include('./get_plant.php')?>

            <?php while($row = $featurd_products->fetch_assoc()){  ?>


                    <div class="pro">
                    <a href="<?php echo "single-product.php?id=".$row['id'];  ?>"><img src="./imag/<?php echo $row['imag']; ?>" alt=""></a>
                    <div class="des">
                    <h5><?php echo $row['name']; ?></h5>
                    <!-- <span>Lidey Heuck</span> -->
                    <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    </div>
                    <span>about <?php echo $row['timeRep']  +  $row['timeCook']; ?> minutes</span>
                    </div>
                    <a href="#"> <i class="fa fa-bookmark save cart"></i></a>
                    </div>
                    <?php } ?>



              </div>
          </section>
        </div>
      </div>

      <section>
        <div style="height: 120px;"></div>
      </section>

<footer class="mt-5 py-5">
  <div class="row container mx-auto pt-5  footer1">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img src="../image/logo.png" class="logo"/>
          <p class="pt-3"> We provide the <br>best products<br> for the most<br> affordable prices</p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
          <ul class="text-uppercase">
              <li><a href="#">men</a></li>
              <li><a href="#">women</a></li>
              <li><a href="#">boys</a></li>
              <li><a href="#">girls</a></li>
              <li><a href="#">new arrivals</a></li>
              <li><a href="#">clothes</a></li>
          </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">ContactUs</h5>
          <div>
              <h6 class="text-uppercase">Address</h6>
              <p>1234 street Name ,City</p>
          </div>
          <div>
              <h6 class="text-uppercase">Phone</h6>
              <p>+21261234123</p>
          </div>
          <div>
              <h6 class="text-uppercase">Email</h6>
              <p>exemple@gmail.com</p>
          </div>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <h5 class="pb-2">Instagram</h5>
              <div class="row">
                  <img src="../image/clothes/1.jpeg" class="img-fluid w-25 h-100 m-2" />
                  <img src="../image/product/2.jpeg" class="img-fluid w-25 h-100 m-2" />
                  <img src="../image/shoes/1.jpeg" class="img-fluid w-25 h-100 m-2" />
                  <img src="../image/product/4.jpeg" class="img-fluid w-25 h-100 m-2" />

              </div>
              </div>
  </div>

  <div class="copyright m-5 ">
          <div class="row container mx-auto">
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4 ">
                  <img src="../image/payment/1.png" alt="">
              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                  <p>Ecommerce @2024 all Right Reseved</p>
              </div>
              <div class="col-lg-3 col-md-5 col-sm-12 mb-4 ">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
              </div>l
          </div>
  </div>
</footer>


<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
