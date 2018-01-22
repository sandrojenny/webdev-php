<?php

  $family = array(
    "Jenny-Hari" => array(
      "Sandro",
      "Lilian",
      "Lena",
      "Mila"
    ),
    "Clerc-Jenny" => array(
      "Nadine",
      "Pascal",
      "Dorian",
      "Nael",
      "Liam"
    ),
    "Jenny" => array(
      "Gilbert",
      "Lisa"
    ),
    "Hari" => array(
      "Ernst",
      "Margrit"
    )
  );

  $jennys = array("Sandro", "Lilian", "Lena", "Mila");

  if(is_array($family)) {
    echo "This variable is an array<br>";
  }

  if(in_array("Sandro", $jennys)) {
    echo "Sandro is a part of this array<br>";
  }

  echo "Number of Element in Array: " . count($family["Jenny-Hari"]) . "<br>";

  asort($family) . "<br>";

  if(array_key_exists("Jenny", $family)) {
    echo "The Key «Jenny» occurs in this Array<br>";
  }

  $family["Hari"][] = "Marcel";

  foreach ($family as $familyname => $person) {
    echo "<ul>";
    echo $familyname;
    foreach ($person as $key => $name) {
      echo "<li>";
        echo $name;
      echo "</li>";
    }
    echo "</ul>";
  }

?>
