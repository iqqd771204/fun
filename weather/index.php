<?php 

  if (isset($_GET['city'])) {

    $content = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&units=metric&appid=48408179ae0d898a5090a5892a0e4b7b');

    $weatherarray=json_decode($content, true);

    $weather=$weatherarray['weather'][0]['description'];
    $city=$weatherarray['name'];
    $temp=$weatherarray['main']['temp'];
    $wind=$weatherarray['wind']['speed'];

  }



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">

    <title>Weather</title>
  </head>
  <body>

    <div class="name">
      <h1>Weather in <?php echo $city ?></h1>
    </div>

  <form method="get">

     <div class="input-group mb-3 container">

        <input type="input" id="city" name="city" class="form-control" placeholder="City" aria-label="Recipient's username" aria-describedby="basic-addon2">

          <div class="input-group-append">
           <input type="submit" type="button" class="btn btn-primary" id="basic-addon2" value="Search">

      </div>

    </div>
  
  </form>   
      
      <?php 

        if (isset($_GET['city'])) {

          echo '<div class="alert alert-light container" role="alert">'."At this moment weather in ".$city." - ".$weather.", temperature - ".$temp."&#8451, speed of wind - ".$wind."m/s"."</div>";

        }

       ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
