<?php

  $actionheros = array(
    "Marvel" => array(
      "Spider-Man",
      "Hulk",
      "Iron Man",
      "Captain America",
      "Thor"
    ),
    "DC Comics" => array(
      "Superman",
      "Batman",
      "Catwomen",
      "Wonder Women",
      "Green Lantern"
    )
  );

  foreach ($actionheros as $group => $heros) {
    echo "<ul><b>";
      echo $group . "</b>";
      foreach ($heros as $key => $hero) {
        echo "<li>";
        echo $hero;
        echo "</li>";
      }
    echo "</ul>";
  }

  for($i = 1; $i < 31; $i++){
    echo $i . ", ";
  }

  echo "<br>";

  $a = 0;
  while($a < 30){
    $a++;
    echo $a . ", ";
  }

?>
