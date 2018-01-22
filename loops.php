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

  foreach ($actionheros as $groupe => $heros) {
    echo "<ul><b>" . $groupe . "</b>";
    foreach ($heros as $key => $value) {
      echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
  }

?>
