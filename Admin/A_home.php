<?php
 include ('A_connection.php');
 if(isset($_REQUEST['']))
{

$sql="INSERT INTO home(id,image_path,event_type,price,image_sr_no) VALUES('','".$_REQUEST['image_path']."','".$_REQUEST['event_type']."','".$_REQUEST['price']."','".$_REQUEST['image_sr_no']."')";
$con -> query($sql);

}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
     <?php
   include "A_header.php";
   ?>

    <!-- Page Content -->
    <!--<div class="container">

      <div class="row">

        <div class="col-lg-3"><br><br>
		
		
          <font color="#000000"><h1 class="my-4">Events</h1></font>
          <div class="list-group">
            <a href="wedding.php" class="list-group-item"><font color="#000000">Wedding Party</font></a>
            <a href="birthday.php" class="list-group-item"><font color="#000000">Birthday Party</font></a>
            <a href="Entertainment.php" class="list-group-item"><font color="#000000">Entertainment Party</font></a>
          </div>

        </div>-->
        <!-- /.col-lg-3 -->
		<div align="center">
        <div class="col-lg-9"><br><br>

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0"  class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"  class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"  class="active"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                 <img class="d-block img-fluid" src="images/1 Wedding/slide.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/2 Birthday/slide.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/3 Reception/slide.jpg" alt="Third slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/4 Dinner/slide.jpg" alt="fourth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/5 Path way/slide.jpg" alt="fifth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/6 Car/slide.jpg" alt="sixth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/7 Music Night/slide.jpg" alt="seventh slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/8 Dance Flore/slide.jpg" alt="eighth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="images/9 Water party/slide.jpg" alt="nineth slide">
              </div>
			   
			  </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
		</div>
          <div class="row">

           
                <div class="">
                  
                </div>
              </div><br>
			  </p>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <div id="footer_wrapper">
	<?php
include('A_footer.php');
?>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


