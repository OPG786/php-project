<?php
include "header.php";
?>



  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Admin <em>Login</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <form action="" method="post">
          
            <label for="">Username</label>
            <input type="text" name="e1" id="" class="form-control">
            <br>
            <label for="">Password</label>
            <input type="password" name="p1" id="" class="form-control">
           
            <br>
            <div class="g-recaptcha" data-sitekey="6Lf7bCQhAAAAACDogWOD00QVNezDlosMDQFRpcOz"></div>
            <br>
            <input type="submit" value="Login" class="btn btn-primary">
          </form>
          
          <?php
          if($_POST)
          {
            extract($_POST);

           
            include "curd.php";

            $obj = new Curd;
            $obj->admin_login($e1,$p1);

            if(mysqli_num_rows($q)==0)
              {
                  echo "Invalid Username or Password";
              }
              else
              {
                  session_start();
                  $_SESSION['mysession'] = $e1;
                  header("location:admin-dashboard.php");
              }
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>