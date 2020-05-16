<?php
  function getPostParameter(string $text):?string
    {
      return isset($_POST[$text]) ? (string)$_POST[$text] : null;
    }

  $name = getPostParameter('name');
  $mail = getPostParameter('mail');
  $country = getPostParameter('country');
  $message = getPostParameter('text');
  $gender = getPostParameter('gender');
  $txt = ".txt";

  if (file_exists('data')){
      echo('Saved ');
  }
  else{
    mkdir('data', 0777, true);
  }
  
  if (($mail) and ($name))
  {
  $record_file = fopen('data/'.$mail.$txt, "w+");
  fwrite($record_file, $name.PHP_EOL);
  fwrite($record_file, $country.PHP_EOL);
  fwrite($record_file, $message.PHP_EOL);
  fwrite($record_file, $gender.PHP_EOL);
  fclose($record_file);
  echo 'Succesful';
  }
  else
  {
    echo 'Error';
  }
