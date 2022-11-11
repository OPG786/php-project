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
            <h4>Edit <em>Profile</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
            <h2>Welcome <strong><?php echo $e1; ?></strong></h2>

            <br>
            <?php include "user_menu.php"; ?>

            <br><br>

												<h2>My Profile</h2>
												<br>

             <?php
            // Logic of Display Data
            $c=mysqli_connect('localhost','root','','php_project');
            $q = mysqli_query($c,"SELECT * from users where email='$e1'");
           ?>
          <form action="" method="post">
           <?php
           while($r=mysqli_fetch_array($q))
           {
            ?>
              Name : <input type="text" name="n1" value="<?php echo $r['name']; ?>" class="form-control">
              <br>
              Mobile : <input type="text" name="m1" value="<?php echo $r['mobile']; ?>" class="form-control">
              <br>
              Password : <input type="text" name="p1" value="<?php echo $r['password']; ?>" class="form-control">
              <br>
              Adhar No. : <input type="text" name="a1" value="<?php echo $r['adhar']; ?>" class="form-control">
              <br>
              <input type="submit" value="Update" class="btn btn-primary">

            <?php
           }
           echo'</table>';
           ?>
           </form>
           <?php
            if($_POST)
            {
              extract($_POST);
              mysqli_query($c,"UPDATE users set name='$n1', mobile='$m1', password='$p1', adhar='$a1' where email='$e1'");
              echo "<p class='alert alert-success'>User has been updated.<p>";
            }
           ?>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>