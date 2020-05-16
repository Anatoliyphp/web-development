<?php
  function getGetParameter(string $text):?string
    {
      return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }

  $firstname = getGETparameter('first_name');
  $lastname = getGETparameter('last_name');
  $age = getGETparameter('age');
  $mail = getGETparameter('email');
  if (file_exists('data')){
  	echo('Saved ');
  }
  else{
    mkdir('data', 0777, true);
  }
  if ($mail){
  	$dir = 'data/'.$mail.'.txt';
  	$survay = fopen($dir, 'w+');
  	fwrite($survay, $firstname.PHP_EOL);
    fwrite($survay, $lastname.PHP_EOL);
    fwrite($survay, $age.PHP_EOL);
    fclose($survay);
  	echo('Successful');
  }
  else
  {
  	echo('error');
  }