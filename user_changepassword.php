<?php
include "header.php";
?>
<?php
session_start();
$e1 = $_SESSION['mysession'];
?>

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Change <em>Password - User Dashboard</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
            <h2>Welcome <strong><?php echo $e1; ?></strong></h2>

            <br>
            <?php include "user_menu.php"; ?>

            <br><br>

            <form action="" method="post">
                Enter Old Password :
                <input type="password" name="p1" required class="form-control">
                <br>
                <input type="submit" name="old">
            </form>
            <?php
            if(isset($_POST['old']))
            {
                extract($_POST);
                $c = mysqli_connect("localhost","root","","php_project");

                $q = mysqli_query($c,"SELECT * FROM users where password='$p1'");
        
                if(mysqli_num_rows($q)==0)
                {
                    echo "Invalid Old Password. Try again!";
                    echo "<Br>";
                    echo "<a href='forgetpassword.php'>Forget Password?</a>";
                }
                else
                {
                    ?>
                         <form action="" method="post">
                            Enter  New Password :
                            <input type="password" name="p2" required class="form-control">
                            <br>
                            Reconform password
                            <input type="password" name="p3" required class="form-control">
                            <br>
                            <input type="submit" name="new">
                        </form>
                    <?php
                }
            }
            if(isset($_POST['new']))
            {
                extract($_POST);
                if($p2!=$p3)
                {
                    echo "Password Do Not Match. Try again!";
                }
                
                $c = mysqli_connect("localhost","root","","php_project");
                        
                header("location:user_dashboard.php");
            }
            ?>

        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>