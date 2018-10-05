<?php
include('backend/functions.php');
if(isset($_SESSION['email'])){

  $status = get_status();
  if($status==1){
    header("Location:index.php");
  }

}

else{
  header("Location:login.php");
}

 ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>start</title>
  <link rel="stylesheet" href="frontend/css/begin.css">


  <script type="text/javascript" src="frontend/js/begin.js"></script>

</head>

<body>

  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">


        <h1 id="demo" style="color:#fff;  " class="mt-3">Countdowns begins</h1>
      </div>


    </div>

    <div class="row">
      <div class="col-md-12 text-center">


        <img style="height:240px; width:400px;" src="https://infoxpression.in/obj/logo1.svg" alt="Star" class="mt-5 star ">
      </div>


    </div>

  </div>
  <div clas="container">

    <div class="row">
      <div class="col-md-12 text-center">

        <h2 class="byline mt-5 ankit" id="byline">CRYPTX</h2>
      </div>


    </div>


  </div>

  <div clas="container">

    <div class="row">
      <div class="col-md-12 text-center">


        <button onclick="contest_begin()" data-placement="top" data-toggle="tooltip" title="Mysteries are yet to be disclosed!" class=" sarthak mt-5 text-center btn btn-md btn-outline-success">START </button>

      </div>
    </div>


  </div>

</body>

</html>
