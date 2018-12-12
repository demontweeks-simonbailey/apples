<?php

  $applesArray = [];
  $br = "<br />";

  array_push($applesArray,"I like apples");
  array_push($applesArray,"why not have an apple? (apple dependency)");
  array_push($applesArray,"an apple a days keeps the doctor away");
  array_push($applesArray,"more apples");
  array_push($applesArray,"granny smith");
  array_push($applesArray,"sliced in fruit salad");
  array_push($applesArray,"shiny, shiny apples");

  for($i = 0; $i < count($applesArray); $i++){
    $apples .= $applesArray[$i] . $br;
  }

?>
