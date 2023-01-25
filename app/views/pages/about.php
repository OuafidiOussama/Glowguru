<?php require APPROOT . '/views/inc/header.php';?>

      <section class="about-us">
        <div class="container py-5">
            <div class="header text-center pb-4">
                <h2>ABOUT <span style="color: var(--sumo);">US</span></h2>
            </div>
            <div class="row d-flex justify-content-lg-between text-center text-lg-start flex-column flex-lg-row align-items-lg-center ">
                <div class="col-lg-2 col">
                    <img class="about" src="<?php echo URLROOT ;?>/img/woman-3219507_1920.jpg" alt="">
                </div>
                <div class="col-lg-7 col align-center">
                    <p class=""> Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dolores eligendi nemo quidem recusandae. Dignissimos id ab provident ipsa autem deleniti, assumenda tempora deserunt, quos nesciunt excepturi quia nobis dicta.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo facilis provident, dolorem tenetur qui velit magnam similique iure consequuntur explicabo et quidem maiores inventore consequatur suscipit a aut repellat amet?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis veritatis beatae, perspiciatis est laudantium deleniti blanditiis labore dolores non excepturi, atque ipsa, expedita fugiat laboriosam nesciunt veniam architecto aliquid accusantium.
                    </p>
                </div>
            </div>
        </div>
      <section class="our-team">
        <div class="container pb-5">
            <div class="header text-center pb-4">
                <h2>OUR <span style="color: var(--sumo);">TEAM</span></h2>
            </div>
            <div class="cont">
            <div class="carousell">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo URLROOT ;?>/img/CEO-magic-touch.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-white rounded-5">
                          <h5 class="text-muted">CEO</h5>
                          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, optio?</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ;?>/img/ceo.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-white rounded-5">
                          <h5 class="text-muted">COO</h5>
                          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, ex.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo URLROOT ;?>/img/ceo-job-description-4088x2727-20201127.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-white rounded-5">
                          <h5 class="text-muted">CFO</h5>
                          <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, similique?</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            </div>
        </div>

      </section>

<?php require APPROOT . '/views/inc/footer.php';?>