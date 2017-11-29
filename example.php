<?php
  require('class.url.php');
  $obj = new URL();
  $response = $obj->shorten("https://steemit.com/@justyy", array("try" => 1));
  var_dump($response);
  $response = $obj->shorten("https://steemit.com/@justyy", array("private" => 1));
  var_dump($response);  
  echo $response->url;
