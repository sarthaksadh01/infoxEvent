<?php include('frontend/navbar.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cyrptx admin</title>
  <link rel="stylesheet" href="frontend/css/admin.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!--<script type="text/javascript" src="frontend/js/admin.js"></script>-->

<?php 
include ('frontend/js/admin.php');

?>

</head>
<body>
 <div class="container">

  <div class="mt-5 row">
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total registrations</h5>
        <i class="text-success float-left far fa-chart-bar"></i>
        <p id="visit" class="float-right text-success card-text"></p>

      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Particpation</h5>
          <i class="text-primary float-left far fa-chart-bar"></i>
          <p id ="page" class="float-right text-primary card-text"></p>
      </div>
    </div>
  </div>
  <div class="mb-3 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Q no.</h5>
        <i class="text-warning float-left far fa-chart-bar"></i>
          <p id="unique" class="float-right text-warning card-text"></p>
      </div>
    </div>
  </div>
</div>
<br><br>
  <div id="chartContainer" style="height: 370px; width: 100%;"></div><br><br>

</div>


</div>

</body>
</html>