<!doctype html>
<html lang="en">

<head>
  <title>manage page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <link rel="stylesheet" href="myshop.css">
  
</head>
<?php 


?>

<body>
  <div class="one">
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="pruductpage.php">
          <img src="img/beelogo-removebg-preview.png" alt="logo" width="125px" height="75px">
        </a>
        <a  class="ba" href="pruductpage.php">hame page</a>

      </div>
    </nav>
  </div>
  <div class="maa">
  <h2 class="container">Add Item </h2>
  
  <form action="managepage.php" method="post">
        <div class="container">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Product name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="pname" required>
            </div>
            <div class="form-group">
                 <label for="exampleFormControlFile1">Add image</label>
                 <input type="file" class="form-control-file" id="exampleFormControlFile1" name="pimg" alt="pruduct " >
            </div>
            <!-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> image </label>
                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="image/surce.webp" name="pimg" >
            </div> -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="pprice" required >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descriotion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pdesc" required ></textarea>
            </div>

            
            
            <!-- <input type="submit" value="add" class="su"> -->
            <button type="submit" class="btn btn-dark" >Add</button>
            <?php

            
            session_start();
            if ($_SERVER["REQUEST_METHOD"]=="POST"){




            if (!isset($_SESSION['names'])) {
              $_SESSION['names'] = array();
            }
            array_push($_SESSION['names'],$_POST["pname"]);


            if (!isset($_SESSION['imgs'])) {
             $_SESSION['imgs'] = array();
            }
            array_push($_SESSION['imgs'],$_POST["pimg"]);


            if (!isset($_SESSION['prices'])) {
            $_SESSION['prices'] = array();
            }
           array_push($_SESSION['prices'],$_POST["pprice"]);


           if (!isset($_SESSION['descs'])) {
            $_SESSION['descs'] = array();
             }
             array_push($_SESSION['descs'],$_POST["pdesc"]);


            }


            ?> 

        </div>

    </form>

  </div>
  <section>
        <div class="container">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php

                  if ($_SERVER["REQUEST_METHOD"]=="POST"){

                   $nt= $_SESSION['names'];
                   $it= $_SESSION['imgs'] ;
                   $pt= $_SESSION['prices'];
                   $dt= $_SESSION['descs'];

                   for ($i=0; $i <count($nt);++$i ){
                     
                    echo "<th scope='row'>" . $i ."</th>";
                    echo '<td>'. $nt[$i] .'</td>';
                    echo '<td>'. $pt[$i] .'</td>';
                    echo '<td>'. $dt[$i].'</td>';
                    echo "</tr>";
                   }
                  }

                  ?>

                </tbody>
            </table>
        </div>
        <?php 
        // echo "<bre>";
        // print_r ( $_SESSION["imgs"]);
        // echo "</bre>";
        ?>

    </section>



  
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1"  target="_blank"  href="https://www.facebook.com/login/" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1"  target="_blank"  href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1"   target="_blank" href="https://www.linkedin.com/feed/" role="button"><i class="fab fa-linkedin-in"></i></a>


    </section>
    <!-- Section: Social media -->


    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        BEE FASION is a website dedicated to selling clothes and designing clothes in a creative way. It is based in Jordan and has several branches around the world. It was established in 1999. We are always looking forward to the best.
      </p>
    </section>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="pruductpage.php">BEE fasion.com</a>
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
    <script>

    </script>
</body>




</html>