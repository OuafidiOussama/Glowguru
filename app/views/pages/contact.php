<?php require APPROOT . '/views/inc/header.php';?>

      <section class="contact-us">
        <div class="form-area mb-5">
            <div class="container">
                <div class="row single-form g-0">
                    <div class="col-sm-12 col-lg-6">
                        <div class="left">
                            <h2>CONTACT US</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                            <i class="fa fa-caret-left"></i>
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Email Address</label>
                                  <input type="email" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Message</label>
                                  <textarea class="form-control" id="exampleInputPassword1"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

<?php require APPROOT . '/views/inc/footer.php';?>