<?php
  function getGetParameter(string $text):?string
    {
      return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    };

  $name = getGETparameter('first_name');
  $second = getGETparameter('last_name');
  $age = getGETparameter('age');
  $mail = getGETparameter('email');
  if ($mail != null){
  	$dir = 'data/'.$mail.'.txt';
  	$survay = fopen($dir, 'w+');
  	fwrite($survay, $name."\n");
    fwrite($survay, $second."\n");
    fwrite($survay, $age."\n");
    fclose($survay);
  	echo('Successful');
  }
  else
  {
  	echo('error');
  }