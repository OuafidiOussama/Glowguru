<?php require APPROOT . '/views/inc/header.php';?>

      <section class="product-info">
        <div class="container-fluid">
          <div class="row">
            <div class="left-side col-6">
              <img src="<?php echo URLROOT ;?>/img/pngwing.com (5).png" alt="">
            </div>
          </div>
          <div class="right-side">
            <div class="product-name">
              <h3>PRODUCT_NAME</h3>
            </div>
            <div class="product-disc">
              <span class="fw-bold">$PRICE</span>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quos aliquid, itaque, expedita accusantium quidem optio fugiat assumenda officia quia ut ullam doloremque hic, consequuntur id saepe rerum commodi et!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ea in, quas assumenda quaerat nobis, sit officiis distinctio illo fugiat voluptas maxime exercitationem temporibus laboriosam dolore cumque corrupti reprehenderit ex!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam adipisci aperiam ratione reprehenderit dolorem minus eligendi placeat blanditiis suscipit recusandae natus, pariatur error perspiciatis laudantium optio soluta laborum, quo explicabo.</p>
            </div>
            <div class="product-quantity">
              <div class="qty-control">
                <label for="Quantity" class="quantity-selector">Quantity</label>
                  <input type="number" id="quantity" name="quantity" value="1" min="1" class="quantity-selector quantity-input">
              </div>
            </div>
          </div>
        </div>
      </section>


<?php require APPROOT . '/views/inc/footer.php';?>