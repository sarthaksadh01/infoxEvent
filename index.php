<?php
    include("functions.php");
    if(isset($_SESSION['email'])){
        $data = get_q();
    }
    
    else die("Please Log in First!");
    
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
.form-control-borderless {
border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
border: none;
outline: none;
    box-shadow: none;
}

/*https://i.pinimg.com/originals/d2/8f/fb/d28ffb4316f8875c9dce6b82da375d3c.jpg*/
body{
background:#20232A url("puzzle.jpg");
color:#fff;
    background-size: 1600px 500px;
    background-repeat:no-repeat;
    font-family: 'Eczar', serif;
    font-size:10px;
}

.circle {border-radius: 50%;  border: 5px solid #fff; width: 170px;height: 170px;position: absolute;}
    .topleft {top: -65px;left: -65px;}
    
    
    
    @media only screen and (max-width: 480px) {
        .fixed-bottom {
        display: none;
        }
        .circle{
        width:130px;
        height:130px;
        }
        .display-4{
            font-size:20px;
            padding-top:40px;
        }
        small{
        display:inline;
        }
        #cqn{
        padding-top:-16px;
        margin-top:-16px;
        padding-left:-200px;
        margin-left:-20px;
    }
    
    #cqt{
    padding-top:300px;
}
#rank{
font-size:20px;
}

}

</style>
<script src="ajax.js"></script>


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
<h4 class="float-right " id="rank">#Rank:67</h4>
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
<input id="ans" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter answer here!" name="url">
</div>
<div id="image" style="display:none;">
<img id="qimage" style="height:300px; width:300px;">
</div>

<!--end of col-->
<div class="col-auto">
<!-- <button  name = "submit"  type="submit">Submit</button> -->
<i id="button1" onclick="atmpt()" class="btn btn-lg fas fa-check-circle " style=" color:green; font-size:30px;"></i>
<img style="display:none;" src="http://preloaders.net/preloaders/290/preview.gif" id="ajax-loader" />
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

<div id="abc" class="fixed-bottom text-center">

<i data-toggle="modal" data-target="#exampleModalCenter" class="mb-3 fas fa-lemon" style="font-size:20px;color:yellow; cursor:pointer;">candy</i>



<div class="progress " style="height:40px;background:#000;">


<!--<div id="pbar" style="width:0%"class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>-->
<div id="pbar" style="<?php $wd = 10*($data['qno']-1); echo 'width:'.$wd.'%;  color:#000; background-color:#fff;' ?>" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="" aria-valuemin="0"
aria-valuemax="100">
<?php echo 10-$data['qno'];?> left</div>

</div>

</div>


</div>

<!----candy modal><!---->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="text-success modal-title" id="exampleModalLongTitle">Use Candy!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="color:#000000;">
Candy can be used once !
and you can skip the question!<br><br>
</div>
<div class="modal-footer">
<!--<button type="button" class="btn btn-primary">Cancel</button>-->
<button onclick="usecandy()" type="button" class="btn btn-primary">Use Candy!</button>
</div>
</div>
</div>
</div>
<!--MODAL SUCCESS-->
<div class="modal fade" id="nqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="text-success modal-title" id="exampleModalLongTitle">Congratulation!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
Click on continue to move to next question!!<br><br>
</div>
<div class="modal-footer">
<!--<button type="button" class="btn btn-primary">Cancel</button>-->
<button onclick="show_next_q()" type="button" class="btn btn-success">Continue</button>
</div>
</div>
</div>
</div>

</body>

</html>
