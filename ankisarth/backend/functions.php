<?php

function connect_to_database()
{
    $link = mysqli_connect("localhost","newuser","password","cryptx");
    if(mysqli_error($link))
    {
      die("Failed connecting to databse.. Please try again!");
    }
    else return $link;
}



?>
