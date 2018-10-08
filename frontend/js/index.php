<?php
$arr=get_s_e();
 
echo"<script>

// Set the date we're counting down to
var countDownDate = new Date('".$arr['ej']."').getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById('rank').innerHTML =  hours + ': '
    + minutes + ': ' + seconds ;

    // If the count down is over, write some text
    if (distance < 0) {
    
        document.getElementById('rank').innerHTML = 'contest over';
        time_over();
    }
}, 1000);
</script> ";


?>