<?php
      $txt = ".txt";
      if (($_POST['mail']) and ($_POST['name']) and ($_POST['country']) and ($_POST['text']) and ($_POST['Ra']))
      {
      $hello = fopen(htmlspecialchars($_POST['mail']).$txt, "w+");
      fwrite($hello, htmlspecialchars($_POST['name']."\n"));
      fwrite($hello, htmlspecialchars($_POST['country']."\n"));
      fwrite($hello, htmlspecialchars($_POST['text']."\n"));
      fwrite($hello, htmlspecialchars($_POST['Ra']."\n"));
      fclose($hello);
      echo 'Succesful';
      }
      else
      {
      	echo 'Error';
      }
    ?>