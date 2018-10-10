<?php
include("backend/functions.php");
$data = "";
$t=time();
$s="";
$e="";

$ar = get_s_e();
$s = $ar['s'];
$e = $ar['e'];

if($t>=$s && $t<=$e){

  if(isset($_SESSION['email'])){
      $completed = get_completed();
      if($completed==1){
          header("Location:lb.php");
      }
      else{
           $status = get_status();
    if($status==1){
      $data = get_q();
    }
    else{
      header("Location:begin.php");
    }
          
      }
   

  }

  else {
      header("Location:login.php");
  }



}

else if($t>$e){
  header("Location:lb.php");
}
else{

  if(isset($_SESSION['email'])){
    header("Location:begin.php");
  }

  else {
      header("Location:login.php");
  }


}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infox | Cryptx</title>
  <?php include("frontend/seo.php");?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="frontend/js/jquery.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="frontend/css/index.css">
  <script src="frontend/js/index.js"></script>


</head>

<body id="xyz">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


  <div class="border:20px;"><span>
      <div class="circle topleft">
        <span class="float-left pt-5  pl-5 mt-5"><span></span>
          <h4 id="cqn" class="float-left pl-5">
            <?php echo $data['qno'];?>
          </h4>
        </span></div>
    </span>
    <span>
      <h4 class="float-right " id="rank"></h4>
    </span>
  </div>


  <div id="rect">

    <!--<div class ="circle topright"></div>-->

  </div>

  <div class="container">


    <div class=" col-md-8 col-sm-4 h-50 d-flex align-items-center ">
      <h1 style="display:none " class="small display-4  pt-5 mt-5 text-center"><strong></strong>Let play solve to image are you ready !!!!!! !!!!!!! !!!!!</strong> </h1>

    </div>

    <div class="row  justify-content-center align-items-center d-flex text-center h-100">
      <div class="col-12 col-md-8  h-50 ">
        <h1 class="display-4 mt-4 pt-4   text-center mb-2 mt-5" id="cqt">
          <?php echo $data['qtext'];?>
        </h1>


        <div id="image" <?php if($data['qtype']!="image" ) echo 'style = "display:none;"' ?>>
          <img <?php if($data['qtype']=="image" ) echo 'src = "' .$data['qcontent'].'"'?> id="qimage" style = "height:300px; width:300px;">
        </div>
        <div id="audio" <?php if($data['qtype']!="audio" ) echo 'style = "display:none;"' ?>>
          <audio <?php if($data['qtype']=="audio" ) echo 'src = "' .$data['qcontent'].'"'?> id="qaudio" controls>

            <source type="audio/mpeg">
            Your browser does not support the audio element Please try running from different browser.
          </audio>

        </div>
      </div>

    </div>
    <br /><br><br>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <form class="card card-sm" method="post">
          <div class="card-body row no-gutters align-items-center">
            <div class="col-auto">
              <!-- <i class="fas fa-link h4 text-body"></i> -->
            </div>
            <!--end of col-->
            <div class="col">
              <input id="ans" value="" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter answer here!" name="url">
            </div>
            <div id="image" style="display:none;">
              <img id="qimage" style="height:300px; width:300px;">
            </div>

            <!--end of col-->
            <div class="col-auto">
              <!-- <button  name = "submit"  type="submit">Submit</button> -->
              <h5 id="button1" onclick="atmpt()" class="btn btn-lg  " style=" color:green; font-size:20px;">SUBMIT</h5>
              <img style="display:none; height:45px; width:45px;" src="http://preloaders.net/preloaders/290/preview.gif" id="ajax-loader" />
              <div id="preload"></div>





            </div>
            <!--end of col-->
          </div>
        </form>
      </div>
      <!--end of col-->
    </div>
    <br>
    <br>
    <div class ="text-center fixed-top  mt-2"><h4><a href="lb.php" target="_blank" style="color:#fff;">LeaderBoard</a></h4></div>

    <div class="fixed-bottom text-center ">
        


<?php 
$cd=get_candy();

if(!get_candy())
{ echo '
    <style type="text/css">#candy{
display:none;
}</style>';
}
?>

      <i data-toggle="modal" id="candy" data-target="#exampleModalCenter" class="mb-3 fas fa-lemon text-center" style="">candy</i>


      <div id="abc" class="progress " style="height:40px;background:#000;">
        <div id="pbar" style="<?php $wd = 10*($data['qno']-1); echo 'width:'.$wd.'%;  color:#000; background-color:#fff;' ?>" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="" aria-valuemin="0"
          aria-valuemax="100"><h6><bold><strong>
          <?php echo 10-$data['qno'];?> left</strong></bold></h6></div>

      </div>

    </div>


  </div>

  <!----candy modal><!---->

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="text-warning modal-title" id="exampleModalLongTitle">Use Candy!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="h3 modal-body" style="color:#000000;">
         you can use candy to skip any one question!
          <br><br>
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-primary">Cancel</button>-->
          <button onclick="usecandy()" type="button" class="btn btn-primary">Use Candy!</button>
        </div>
      </div>
    </div>
  </div>


  <!--correct answr modal-->

  <div class="modal fade" id="nqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
                   <h2 class="modal-title pl-4 pt-2" id="exampleModalCenterTitle" style="width:100px;height:100px;position:relative; color:#eee;"><i class="fas fa-check pl-4 pt-2 display-4"></i></h2>
          <h2 class="pt-4 pl-3" style="position:relative;color:#fff">Success !</h2>
         
         
         
         
         
         
          <h1 type="" >
            </h1>
        </div>
        <div class="modal-body">


          <h4 class="text-center" style="color:#000;">

      Correct Answer!
          </h4>


        </div>
        <div class="modal-footer">

//          <button onclick="show_next_q()" type="button" class="btn btn-success">Continue</button>
        </div>
      </div>
    </div>
  </div>


  <!--end-->

  <!--modal for wa-->
  <div class="modal fade" id="ankit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h2 class="modal-title pl-4 pt-2" id="exampleModalCenterTitle" style="width:100px;height:100px;position:relative; color:#eee;"><i class="fas fa-times pl-4 pt-2 display-4"></i></h2>
          <h2 class="pt-4 pl-3" style="position:relative;color:#fff">Wrong !</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color:#fff;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 class="text-center" style="color:#000;">
Try Again!
          </h4>
        </div>
        <div class="modal-footer">


        </div>
      </div>
    </div>
  </div>

  <!--end -->


  <!--congo modal-->


  <div class="modal fade" id="win" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <img class="modal-title text-center" id="exampleModalCenterTitle" src="congo.png" style="width:140px;height:100px; ">
          <h2 style="position:relative;color:black; padding-top:30px;">Congralutions !</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5 style="color:#000;">Your test is over now Check the Leaderboard'</h5>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>


  <!--end-->


<?php
include("frontend/js/index.php");
    ?>


</body>

</html>
