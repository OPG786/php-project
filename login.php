<?php
include "header.php";
?>



  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Login <em>Form</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <form action="" method="post">
          
            <label for="">Email</label>
            <input type="email" name="e1" id="" class="form-control">
            <br>
            <label for="">Password</label>
            <input type="password" name="p1" id="" class="form-control">
           
            <br>
            <div class="g-recaptcha" data-sitekey="6Lf7bCQhAAAAACDogWOD00QVNezDlosMDQFRpcOz"></div>
            <br>
            <input type="submit" value="Login" class="btn btn-primary">
          </form>
          <br>
          <a href="forgotpassword.php">Forgot Password?</a>
          <?php
          if($_POST)
          {
            extract($_POST);

           
            include "curd.php";

            $obj = new Curd;
            $obj->login($e1,$p1);
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>