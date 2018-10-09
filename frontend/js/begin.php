<?php 
$arr=get_s_e();
 
 echo "

<script>


function go_to_contest(page){
  alert('Click ok to begin');

  $.ajax({
    url: '././backend/functions.php',
    method: 'POST',
    data: {
      status: 'yes',
    },

    success: function(html) {
      if (html == 'Completed!') {

    window.location.href = 'index.php';


      } else {
        alert(html);
      }
    }

  });

}



function contest_begin(){


  var s = new Date('".$arr['sj']."').getTime();
  var e  = new Date('".$arr['ej']."').getTime();
   var now = new Date().getTime();
  if(now>=s && now<=e){
    go_to_contest('index.php');
  }
  else if(now>e) {
    alert('Contest Over');
    go_to_contest('lb.php');

  }
  else{
    alert('Contest will start at :".$arr['sj']."');
  }



}


// Set the date we're counting down to
var countDownDate = new Date('".$arr['sj']."').getTime();

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

    document.getElementById('demo').innerHTML = days + ': ' + hours + ': '
    + minutes + ': ' + seconds ;

    // If the count down is over, write some text
    if (distance < 0) {
        document.getElementById('demo').innerHTML = 'Click Start to go to contest page!';
    }
}, 1000);
</script> ";
?>