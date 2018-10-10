<?php
include ('./backend/functions.php');
$link=connect_to_database();
$query="SELECT * FROM `users`";
$result=mysqli_query($link,$query);
$query1="SELECT * FROM `users` WHERE status='yes'";
$result1=mysqli_query($link,$query1);

$query2="SELECT * FROM `users` WHERE completed='yes'";
$result2=mysqli_query($link,$query2);
if($result && $result1 && $result2)
{
     $rowcount=mysqli_num_rows($result);
     $rcount=mysqli_num_rows($result1);
     $rc=mysqli_num_rows($result1);
    
}   
else {
  die("Error connecting...");
}
?>


<?php

$link=connect_to_database();
$dataPoints = array();
$a = array("czd","one","two","three","four","five","six","seven","eight","nine","ten","completed");

for($i=1;$i<=11;$i++){
   $query="SELECT * FROM `users` WHERE prob = '$i'";
   $result=mysqli_query($link,$query); 
   $ans = mysqli_num_rows($result);
   array_push($dataPoints,array("y" => $ans, "label" => $a[$i] ));
}






?>


 <script>
 
 window.onload = function() {
     
     
     var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo $row['question']?>"
	},
	axisY: {
		title: "Questions"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Solved",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();





animateValue("visit", 1,<?php echo $rowcount?>, 50);
animateValue("page", 0, <?php echo $rcount ?>, 50);
animateValue("unique", 0, <?php echo $rc ?>, 50);



}

function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}
</script>