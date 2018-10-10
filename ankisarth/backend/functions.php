<?php

function connect_to_database()
{
    $link = mysqli_connect("localhost","navtradi_sadh","sarthak01","navtradi_freelancer");
    if(mysqli_error($link))
    {
      die("Failed connecting to databse.. Please try again!");
    }
    else return $link;
}



?>
