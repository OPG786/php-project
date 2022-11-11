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
            <h4>User <em>Profile</em></h4>
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
            echo"<table class='table'>";
            echo"<tr>";
           echo"<td> name </td>";
           echo"<td> email </td>";
           echo"<td> password </td>";
           echo"<td> mobile </td>";
           echo"<td> adhar </td>";
           echo"</tr>";
           while($r=mysqli_fetch_array($q))
           {
            echo '<tr>';
            echo '<td>'.$r['name'].'</td>';
            echo'<td>'.$r['email'].'</td>';
            echo'<td>'.$r['password'].'</td>';
            echo'<td>'.$r['mobile'].'</td>';
            echo'<td>'.$r['adhar'].'</td>';
           
            echo'</tr>';
           }
           echo'</table>';
           ?>
        </div>
      </div>
    </div>
  </section>

  


  

<?php
include "footer.php";
?>