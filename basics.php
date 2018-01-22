<?php

  $string = "This is the content of a string";
  $html = "<div>This variable contains <b>html</b></div>";
  $number = 1983;
  $float = 1.5;
  $boolean = true;
  $empty;
  $isset;
  $array = array("Zero", "One", "Two");


  if(is_string($string)) {
    echo "this variable is a string<br>";
  }

  echo strlen($string) . "<br>";
  echo substr_replace($string, "new value", 0) . "<br>";
  echo strstr("s.jenny@mac.com", "@") . "<br>";
  echo strpos($string, "content") . "<br>";
  echo $html . "<br>";
  echo strip_tags($html) . "<br>";
  echo($array[1])  . "<br>";
  echo(implode($array, ", ")) . "<br>";
  echo floatval($float). "<br>";

  if(empty($empty)) {
    echo "this variable is empty<br>";
  } else {
    echo "this variable is not empty<br>";
  }

  if(isset($isset)) {
    echo "this variable is set<br>";
  } else {
    echo "this variable is not set<br>";
  }

  var_dump($array);

?>
