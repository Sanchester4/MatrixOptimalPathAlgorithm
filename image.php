<?php 
// Random images using a built-in function rand() and an array 

$arr = array("240_1", "240_2", "240_3"); //The url of images in the project folder without ".jpg"
$var = rand(0, 2);  //Variable that each time will return a value from rand()