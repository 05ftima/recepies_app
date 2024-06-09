

<?php 

include('./connecion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM product WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $product = $stmt->get_result();
}

?>




<?php include('./header.php')?>

        


          <section>

          <?php while($row =$product->fetch_assoc()){?>
            <div class="pantry_title" style="padding-top: 160px;margin: 40px; display: flex;">
                <div class="pantry"   style="grid-column-end: 3;display: flex;flex-direction: column;justify-content: center;height: calc(100% - 40px);    width: 40%;padding: 20px;padding-top: 60px;">
                    <h1 class="pantry_title_display"style="font-family: Georgia,Times ,serif;font-weight: 200;font-size: 3.6rem;letter-spacing: .01em;line-height: 1.1;">
                    <?php echo $row['name']; ?></h1>
                    <span class="byline" style="padding-top: 20px;"><?php echo $row['date']; ?></span>
                </div>
                <div class="recipeheaderimage">
                   <img src="./imag/<?php echo $row['imag']; ?>" alt="">
                </div>
            </div>


            <div style="display: flex;">

            <div style="margin: 0 50px; width:230%;">
                <hr style="width: 90%;">
                <dl >
                    <div style="display: flex;">
                        <dt style="padding-right: 20px;">Total Time</dt>
                        <dd><?php echo $row['timeRep']  +  $row['timeCook']; ?> minutes</dd>
                    </div>
                    <div style="display: flex;">
                    <dt style="padding-right: 50px;">Rating</dt>
                    <div class="star">
                         
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    
                </div>
                    </div>

                </dl>
            </div>

            <div>
                <div>
                    <p><?php echo $row['discriptv']; ?> </p>
                </div>
            </div>

            </div>
            
            <ul style="display: flex;">
                <li><button>save</button></li>
                <li><button>Give</button></li>
                <li><button><i class="fa fa-partage"></i></button></li>
                <li><button><i class="fa fa-imprimer"></i></button></li>
            </ul>
            <hr style="height: 5px; background-color: #333; border: none; width: 35%; display: inline-block; margin-right: 4%; margin-left:4%">
<hr style="height: 5px; background-color: #333; border: none; width: 50%; display: inline-block;">


            <div style="display: flex; padding-top:40px;">
            <div style="width: 200%; margin-left:50px">
                <div>
                    <p>
                    <?php echo $row['ingredients']; ?>
                    </p>
                </div>
            </div>

            <div>
                <div>
                    
                    <ol>
                    <h2>Preparation</h2>
                        <li><h3>step 1</h3>
                        <p><?php echo $row['setp1']; ?></p>
                    </li>
                    <li>
                        <h3>step 2</h3>
                        <p><?php echo $row['setp2']; ?></p>
                    </li>
                    <li>
                        <h3>step 3</h3>
                        <p><p><?php echo $row['setp3']; ?></p></p>
                    </li>
                    <h3>step 3</h3>
                        <p><p><?php echo $row['setp4']; ?></p></p>
                    </li>
                    </ol>
                </div>
            </div>

            </div>
            <?php } ?>
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
