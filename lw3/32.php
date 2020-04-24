<?php
    function getGetParameter(string $text):?string
    {
      return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    };
  $identifier = getGetParameter('identifier');
  $arr = str_split($identifier); 
  if ($arr[0] = '1')
  {
    echo 'No';
  }
  else
  {
    echo 'Yes';
  }