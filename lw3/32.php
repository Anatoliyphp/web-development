<?php
    function getGetParameter(string $text):?string
    {
      return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    };

    $identifier = getGETParameter('identifier');
    if($identifier != null)
    {
        if (preg_match('/^0/', $identifier))
        {
            echo 'No.The first symbol is incorrect.';
        }
        else
        {
            $result = preg_match('/^a/', $identifier) ? 'No.Doesnt match the rule.' : 'YES';
            echo $result;
        };
    }
    else
    {
        echo 'No';
    };

 