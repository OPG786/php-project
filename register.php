<?php
include "header.php";
?>



  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Register <em>Form</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <form action="" method="post">
            <label for="">Name</label>
            <input type="text" name="n1" class="form-control">
            <br>
            <label for="">Email</label>
            <input type="email" name="e1" id="" class="form-control">
            <br>
            <label for="">Password</label>
            <input type="password" name="p1" id="" class="form-control">
            <br>
            <label for="">Mobile No.</label>
            <input type="text" name="m1" id="" class="form-control">
            <br>
            <label for="">Adhar Number</label>
            <input type="text" name="a1" id="" class="form-control">
            <br>
            <div class="g-recaptcha" data-sitekey="6Lf7bCQhAAAAACDogWOD00QVNezDlosMDQFRpcOz"></div>
            <br>
            <input type="submit" value="Register" class="btn btn-primary">
          </form>
          <?php
          if($_POST)
          {
            extract($_POST);

            // validation
            $check_name = preg_match("/^[a-zA-Z]{2,20}$/",$n1);

            if(!$check_name)
            {
                echo "Invalid Name. Try again";
                exit;
            }
            $check_email = filter_var($e1,FILTER_VALIDATE_EMAIL);

            if(!$check_email)
            {
                echo "Invalid email. Try again";
                exit;
            }
           
            $check_mobile = preg_match("/^[0-9]{10}$/",$m1);

            if(!$check_mobile)
            {
                echo "Invalid mobile no. Try again";
                exit;
            }

            $check_adhar = preg_match("/^[0-9]{12}$/",$a1);

            if(!$check_adhar)
            {
                echo "Invalid adhar. Try again";
                exit;
            }

            include "curd.php";

            $obj = new Curd;
            $obj->register($n1,$e1,$p1,$m1,$a1);
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>