<?php 
session_start();


?>


<!doctype html>
<html lang="en">

<head>
  <title>products page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="myshop.css">
</head>

<body>

  <div class="one">
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/pruductpage.php">
          <img src="img/spas.png" alt="" width="30" height="24">
        </a>
        <a href="managepage.php">manage page</a>
      </div>
    </nav>
  </div>
  <main>
    <div class="container">
      <div class="row">
        <!-- <h2>OUR PRODUCTS </h2> -->
        <div class="col-md-4">
          <div class="card" style="width: 18rem;  height: 572px;">
            <img src="img/16286453987573cccf8f59c5965dc093545ff6fd98_thumbnail_900x.webp" class="card-img-top"
              alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="link-primary"> $15.00</a>
            </div>
          </div>
        </div>


   
        <?php

if (isset($_SESSION['names'])) {
  $nt= $_SESSION['names'];
}


if (isset($_SESSION['imgs'])) {
  $it= $_SESSION['imgs'] ;
}
 

if (isset($_SESSION['prices'])) {
  $pt= $_SESSION['prices'];
}


if (isset($_SESSION['descs'])) {
  $dt= $_SESSION['descs'];
 }
       
        // $nt= $_SESSION['names'];
        // $it= $_SESSION['imgs'] ;
        // $pt= $_SESSION['prices'];
        // $dt= $_SESSION['descs'];

        




        if( empty($nt) == false ){
          for ($i=1; $i <count($nt);++$i ){
            echo '<div class="col-md-4">';
            echo '<div class="card" style="width: 18rem;  height: 572px; ">';
            echo   '<img src="img/16286453987573cccf8f59c5965dc093545ff6fd98_thumbnail_900x.webp" class="card-img-top" alt=" nothing error ">';
            echo   '<div class="card-body">';
            echo     '<h5 class="card-title">'. $nt[$i] .count($nt) ." roll num ". $i . '</h5>';
            echo     '<p class="card-text">' . $dt[$i].'</p>';
            echo     '<a href="#"  class="text-end">' ."$" . $pt[$i]. ".00".'</a>';
            echo   ' </div>';
            echo   '</div>';
            echo  '</div>';
  
          }

        }
        

              //  echo '<div class="col-md-4">';
              //  echo '<div class="card" style="width: 18rem;">';
              //  echo   '<img src="img/16286453987573cccf8f59c5965dc093545ff6fd98_thumbnail_900x.webp" class="card-img-top" alt=" nothing error ">';
              //  echo   '<div class="card-body">';
              //  echo     '<h5 class="card-title">'. $_SESSION["sn"] . '</h5>';
              //  echo     '<p class="card-text">' . $_SESSION["sd"] . '</p>';
              //  echo     '<a href="#" class="link-primary">' . $_SESSION["sp"] . '</a>';
              //  echo   ' </div>';
              //  echo   '</div>';
              //  echo  '</div>';

        ?> 







      </div>
    </div>

  </main>
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->


    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="pruductpage.php">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>




</html>