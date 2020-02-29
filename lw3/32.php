<?php
  function getGetParametr(string $text):?string
  {
    return isset($_GET[$text]) ? (string)$_GET[$text] : null;
  }

  $text = getGetParametr('text');
  if ctype_digit(string $text) : bool;
  {
  echo 'No'
  }
  else
  }
  echo 'Yes'
  {  
  header("Content-Type: text/plain");
  echo $text;
  