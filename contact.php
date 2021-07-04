<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">COVID-19 TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prevent.php">Preventions</a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>

   
  </div>
</nav>


<form class="mx-3 my-3" action="backcontact.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" name="Name" id="formGroupExampleInput" placeholder="Write your name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="Email" id="exampleFormControlInput1" placeholder="name@example.com" required>
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput2">Gender</label>
    <input type="text" class="form-control" name="Gender" id="formGroupExampleInput2" placeholder="Gender" required>
  </div>
  <label for="formGroupExampleInput2">Symptoms</label><br>
  <div class="form-check form-check-inline" required>

  <input class="form-check-input" name="Symptoms[]"  type="checkbox" id="inlineCheckbox1" value="Fever">
  <label class="form-check-label" for="inlineCheckbox1" required>Fever</label>
</div> 
<div class="form-check form-check-inline">
  <input class="form-check-input" name="Symptoms[]" type="checkbox" id="inlineCheckbox2" value="Dry Cough">
  <label class="form-check-label" for="inlineCheckbox2" required>Dry Cough</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="Symptoms[]" type="checkbox" id="inlineCheckbox3" value="Tiredness">
  <label class="form-check-label" for="inlineCheckbox3" required>Tiredness</label>
</div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comment</label>
    <textarea class="form-control" name="Comments" id="exampleFormControlTextarea1" rows="5" placeholder="Please tell what symptoms you are getting" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>