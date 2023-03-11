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
   include "header.php";
   ?>

   
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
                 <img class="d-block img-fluid" src="Admin/images/inspairation/1.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/3.jpg" alt="Third slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/4.jpg" alt="fourth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/5.jpg" alt="fifth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/6.jpg" alt="sixth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/7.jpg" alt="seventh slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/8.jpg" alt="eighth slide">
              </div>
			   <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/9.jpg" alt="nineth slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/10.jpg" alt="nineth slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="Admin/images/inspairation/11.jpg" alt="nineth slide">
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
       
			 
			   
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<?php
include "user_question.php";
?>
   <?php
   include "footer.php";
   ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>


