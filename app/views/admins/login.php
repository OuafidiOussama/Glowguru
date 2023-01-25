<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawsome link -->
    <script src="https://kit.fontawesome.com/84ef55bb95.js" crossorigin="anonymous"></script>

    <!-- Css link -->
    <link rel="stylesheet" href="<?= URLROOT;?>/css/style.css">

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title><?= SITENAME;?></title>
</head>
<body>
      <section class="login-form fil">
        <div class="form-area">
            <div class="container">
                <div class="row single-form g-0">
                    <div class="col-sm-12 col-lg-6">
                        <div class="left">
                            <h2 class="text-center">LOGIN</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="right">
                            <i class="fa fa-caret-left"></i>
                            <form action="<?php echo URLROOT;?>/admins/login" method="post">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email</label>
                                  <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>">
                                  <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                                  <div id="emailHelp" class="form-text"></div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>">
                                  <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                                </div>
                                <input type="submit" Value="Login" class="btn btn-primary">
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>



  
  
  
        
      <script src="<?=URLROOT;?>/js/main.js"></script>
  </body>
  </html>