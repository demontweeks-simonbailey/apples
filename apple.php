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
  array_push($applesArray,"Something else about apples from ipad");
  array_push($applesArray,"Enough about apples, already");

  for($i = 0; $i < count($applesArray); $i++){
    $apples .= $applesArray[$i] . $br;
  }

?>
