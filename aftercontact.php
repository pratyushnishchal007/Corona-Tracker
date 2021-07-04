<?php

include "logic.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/c429567f54.js" crossorigin="anonymous"></script>
    <title>COVID-19 TRACKER</title>
  </head>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  You have successfully submitted the contact form
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">COVID-19 TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="prevent.php">Preventions</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

   
  </div>
</nav>




    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the COVID-19 cases around the world.</h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
        <div class="col-4 text-warning">
            <h5>Confirmed</h5>
            <?php echo $total_confirmed;?>
        </div>
        <div class="col-4 text-success">
            <h5>Recovered</h5>
            <?php echo $total_recovered;?>
        </div>
        <div class="col-4 text-danger">
            <h5>Decease</h5>
            <?php echo $total_deaths;?>
        </div>

        </div>
        
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deceased</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($data as $key => $value){
                    $increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];


                ?>
                <tr>
                    <th><?php echo $key;?></th>
                    <td>
                        <?php echo $value[$days_count]['confirmed'];?>
                        <?php if($increase != 0){?>
                       <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                        <?php }?>
                    </td>
                    <td>
                        <?php echo $value[$days_count]['recovered'];?>
                    </td>
                    <td>
                        <?php echo $value[$days_count]['deaths'];?>
                    </td>
                </tr>

                <?php } ?>
            </tbody>

        </table>
        </div>
        </div>
        <div class="container">
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020–2021 , Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>