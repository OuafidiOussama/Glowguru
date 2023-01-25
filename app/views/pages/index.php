<?php require APPROOT . '/views/inc/header.php';?>

      <section class="home-bg d-flex flex-column justify-content-center mb-1">
        <div class="home container">
            <h1 class="px-lg-5 text-lg-start text-center px-1 ">Welcome to Glow<span style="color: var(--sumo);">Guru's</span> Website.</h1>
            <p class=" px-lg-5 ms-lg-0 text-lg-start text-center col-lg-5 px-1 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit praesentium veniam aperiam quidem error adipisci sint, eligendi cumque suscipit molestiae quod sit? Temporibus magni neque reprehenderit deserunt voluptatum sequi dolor?</p>
            <?php if(isset($_SESSION['admin_id'])) : ?>

            <?php else : ?>
              <a href="<?php echo URLROOT ;?>/admins/login"><button class="mx-lg-5 fw-semibold login">LOGIN</button></a>
            <?php endif ?>
        </div>
      </section>

      <section class="hot-product">
        <div class="container">
          <div class="row">
            <h2 class="text-center pb-5"><span style="color: var(--sumo);">HOT</span> PRODUCTS</h2>
          </div>
          <div class="row pb-5">
            <div class="col-12 mb-5 col-lg-3 mb-lg-0">
              <div class="product-box bot-left pb-3">
                <div class="product-inner-box position-relative">
                  <div class="icons position-absolute">
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                    <a href="<?php echo URLROOT ;?>/pages/info" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                  </div>
                  <img src="<?php echo URLROOT ;?>/img/pngwing.com (5).png" alt="" class="img-fluid border-0 rounded-2">
                </div>
                <div class="product-info">
                  <div class="product-name py-3">
                    <h3 class="text-center">Primer</h3>
                  </div>
                  <div class="product-price text-center">
                    <span class="price shadow-lg rounded-pill px-3 py-2">$300.99</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-5 col-lg-3 mb-lg-0">
              <div class="product-box top-right pb-3">
                <div class="product-inner-box position-relative">
                  <div class="icons position-absolute">
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                  </div>
                  <img src="<?php echo URLROOT ;?>/img/pngwing.com (5).png" alt="" class="img-fluid border-0 rounded-2">
                </div>
                <div class="product-info">
                  <div class="product-name py-3">
                    <h3 class="text-center">PRODUCT_NAME</h3>
                  </div>
                  <div class="product-price text-center">
                    <span class="price shadow-lg rounded-pill px-3 py-2">$300.99</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-5 col-lg-3 mb-lg-0">
              <div class="product-box top-left pb-3">
                <div class="product-inner-box position-relative">
                  <div class="icons position-absolute">
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                  </div>
                  <img src="<?php echo URLROOT ;?>/img/pngwing.com (5).png" alt="" class="img-fluid border-0 rounded-2">
                </div>
                <div class="product-info">
                  <div class="product-name py-3">
                    <h3 class="text-center">PRODUCT_NAME</h3>
                  </div>
                  <div class="product-price text-center">
                    <span class="price shadow-lg rounded-pill px-3 py-2">$300.99</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-5 col-lg-3 mb-lg-0">
              <div class="product-box bot-right pb-3">
                <div class="product-inner-box position-relative">
                  <div class="icons position-absolute">
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                    <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                  </div>
                  <img src="<?php echo URLROOT ;?>/img/pngwing.com (5).png" alt="" class="img-fluid border-0 rounded-2">
                </div>
                <div class="product-info">
                  <div class="product-name py-3">
                    <h3 class="text-center">PRODUCT_NAME</h3>
                  </div>
                  <div class="product-price text-center">
                    <span class="price shadow-lg rounded-pill px-3 py-2">$300.99</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="view-products text-center">
              <a href="<?= URLROOT;?>/pages/products"><button class="view rounded-pill px-5 py-2 shadow-lg mb-5">View all products</button></a>
            </div>
          </div>
        </div>
      </section>

<?php require APPROOT . '/views/inc/footer.php';?>