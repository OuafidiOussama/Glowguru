<?php require APPROOT . '/views/inc/header.php';?>

      <section class="all-products">
        <div class="container">
            <div class="row">
              <h2 class="text-center pt-5 pb-3"><span style="color: var(--sumo);">SHOP</span></h2>
            </div>
            <div class="row pb-5 text-center">
                <div class="search-bar">
                    <input type="text" name="search" id="Search" placeholder="what are you looking for ?">
                </div>
            </div>
            <div class="row pb-5">

            <?php foreach($data['product'] as $products) : ?>
              <div class="col-12 mb-5 col-lg-3 product-card">
                <div class="product-box bot-left pb-3">
                  <div class="product-inner-box position-relative">
                    <div class="icons position-absolute">
                      <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                      <a href="<?php echo URLROOT?>/pages/info" class="text-decoration-none text-dark"><i class="fa-solid fa-eye"></i></a>
                    </div>
                    <img src="<?php echo URLROOT. '/prd_images/' . $products->picture ; ?>" alt="" class="img-fluid border-0 rounded-2">
                  </div>
                  <div class="product-info">
                    <div class="product-name py-3">
                      <h3 class="text-center"><?php echo $products->title?></h3>
                    </div>
                    <div class="product-price text-center">
                      <span class="price shadow-lg rounded-pill px-3 py-2">$ <?php echo $products->price?></span>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>

            </div>
          </div>

      </section>

<?php require APPROOT . '/views/inc/footer.php';?>