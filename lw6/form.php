<?php
      $txt = ".txt";
      if (($_POST['mail']) and ($_POST['name']) and ($_POST['country']))
      {
      $hello = fopen(htmlspecialchars($_POST['mail']).$txt, "w+");
      fwrite($hello, htmlspecialchars($_POST['name']."\n"));
      fwrite($hello, htmlspecialchars($_POST['country']));
      fclose($hello);
      echo 'Succesful';
      }
      else
      {
      	echo 'Error';
      }
    ?>