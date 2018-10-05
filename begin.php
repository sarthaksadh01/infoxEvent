<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>start</title>
  <style>
      
      /* Animation properties */
.star {
  animation: star 10s ease-out;
}
.wars {
  animation: wars 10s ease-out ;
}
.byline span {
  animation: spin-letters 10s ;
}
.byline {
  animation: move-byline 10s linear ;
}

/* Keyframes */
@keyframes star {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(-0.75em);
  }
  20% {
    opacity: 1;
  }
  89% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes wars {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(0.5em);
  }
  20% {
    opacity: 1;
  }
  90% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes spin-letters {
  0%, 10% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  30% {
    opacity: 1;
  }
  70%, 86% {
    transform: rotateY(0);
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}

@keyframes move-byline {
  0% {
    transform: translateZ(5em);
  }
  100% {
    transform: translateZ(0);
  }
}

/* Make the 3D work on the container */
.starwars-demo {
/*   padding-bottom:400px; */
  perspective: 800px;
  transform-style: preserve3d;
}

/* General styles and layout */
body {
  background: #000 url(//cssanimation.rocks/demo/starwars/images/bg.jpg);
}

.starwars-demo {
  /* height: 17em; */
  /* left: 50%; */
  /* position: absolute; */
  /* top: 53%; */
  transform: translate(-50%, -50%);
  /* width: 34em; */
}

.byline span {
  display: inline-block;
}

img {
  width: 100%;
}

.star, .wars, .byline {
  /* position: absolute; */
}

.star {
  /* top: -0.75em; */
}

.wars {
  /* bottom: -0.5em; */
}

.byline {
  color: #fff;
  font-family: "ITC Serif Gothic", Lato;
  font-size: 2.25em;
  /* left: -3em; */
  letter-spacing: 0.4em;
/*   right: -2em; */
  text-align: center;
  text-transform: uppercase;
  top: 29%;
}

/*** Media queries for adjusting to different screen sizes ***/

@media only screen and (max-width: 600px) {
  .starwars-demo {
    font-size: 10px;
  }
}

@media only screen and (max-width: 480px) {
  .starwars-demo {
    font-size: 7px;
  }
  #demo,.ankit,.sarthak{
      margin-left:65px;
  }
  #crypt{
     padding-top:20px;
  }
  
}
</style>
<script>

var byline = document.getElementById('byline');  	// Find the H2
bylineText = byline.innerHTML;										// Get the content of the H2
bylineArr = bylineText.split('');									// Split content into array
byline.innerHTML = '';														// Empty current content

var span;					// Create variables to create elements
var letter;

for(i=0;i<bylineArr.length;i++){									// Loop for every letter
  span = document.createElement("span");					// Create a <span> element
  letter = document.createTextNode(bylineArr[i]);	// Create the letter
  if(bylineArr[i] == ' ') {												// If the letter is a space...
    byline.appendChild(letter);					// ...Add the space without a span
  } else {
		span.appendChild(letter);						// Add the letter to the span
  	byline.appendChild(span); 					// Add the span to the h2
  }
}
// for countdown timer
</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("oct 14, 2018 21:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + ": " + hours + ": "
    + minutes + ": " + seconds + " ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

  
</head>
<body>
<!-- <div class = "container">
<div class="row">
<
</div>
<div class = "row">
<div class="col-md-12 text-center starwars-demo">
    
     
    <img style="height:240px; width:400px;" src="https://infoxpression.in/obj/logo1.svg" alt="Star" class="star">
    </div>
    </div>
    <div class="row">
<div class="col-md-12 text-center">
    <h2 class="byline" id="byline">CRYPTX</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
     </div>
 </div>

</div> -->

<div class="container">

<div class="row">
<div class = "col-md-12 text-center">


<h1 id="demo" style="color:#fff;  "class="mt-3">Countdowns begins</h1>
</div>


</div>

<div class="row">
<div class = "col-md-12 text-center">


<img style="height:240px; width:400px;" src="https://infoxpression.in/obj/logo1.svg" alt="Star" class="mt-5 star ">
</div>


</div>

</div>
<div clas="container">

<div class="row">
<div class = "col-md-12 text-center">

 <h2 class="byline mt-5 ankit" id="byline">CRYPTX</h2>
</div>


</div>


</div>
  
<div clas="container">

<div class="row">
<div class = "col-md-12 text-center">


<button  data-placement="top" data-toggle="tooltip" title="Mysteries are yet to be disclosed!" class=" sarthak mt-5 text-center btn btn-md btn-outline-success disabled">START </button>
 
</div>
</div>


</div>
  
</body>
</html>


  