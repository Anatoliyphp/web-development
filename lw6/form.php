<?php
      $txt = ".txt";
      if (($_POST['mail']) and ($_POST['name']) and ($_POST['country']) and ($_POST['text']))
      {
      $hello = fopen(htmlspecialchars($_POST['mail']).$txt, "w+");
      fwrite($hello, htmlspecialchars($_POST['name']."\n"));
      fwrite($hello, htmlspecialchars($_POST['country']."\n"));
      fwrite($hello, htmlspecialchars($_POST['text']."\n"));
      fclose($hello);
      echo 'Succesful';
      }
      else
      {
      	echo 'Error';
      }
    ?>