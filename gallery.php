<?php
include "header.php";
?>

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Photo <em>Gallery</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
              <?php
            $k = glob("admin-dashboard/uploads/*");
            foreach($k as $z)
            {
                ?>
                
                    <div class='col-md-3'>
                        <img src="<?php echo $z; ?>" width="200" height="300" style="border:2px solid red; padding: 10px;">
                       
                    </div>
                <?php
            }
        ?>
          
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>