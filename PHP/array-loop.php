<?php
  $charater[0] = "Bugs Bunny";
  $charater[1] = "Tweety";
  $charater[2] = "Wile E. Coyote";
  $charater[3] = "Elmer Fud";
  $charater[4] = "Sylvester";
  $charater[5] = "Road Runner";

  foreach ($charater as $vaule) {
    echo $vaule . "<br />";
  }

  echo '<br>';
  echo '<br>';
  echo '<br>';

    $charater['pig'] = "Porky Pig";
    $charater['duck'] = "Daffy Duck";
    $charater['mouse'] = "Speedy Gonzales";

    foreach ($charater as $key => $vaule) {
      echo $vaule . "  is a " . $key . ".<br />";
    }
 ?>
 
