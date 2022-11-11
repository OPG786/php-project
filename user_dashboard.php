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
            <h4>User <em>Dashboard</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
            <h2>Welcome <strong><?php echo $e1; ?></strong></h2>

            <br>
            <?php include "user_menu.php"; ?>

            <br><br>

            <center><h5>User Dashboard</h5></center>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>