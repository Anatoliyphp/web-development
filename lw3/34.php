<?php
    function getGetParameter(string $text):?string
    {
        return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }
    define("firstName", getGETparameter('first_name'));
    define("lastName", getGETparameter('last_name'));
    define("age", getGETparameter('age'));
    define("mail", getGETparameter('email'));
    if (!file_exists('data')){
        mkdir('data', 0777, true);
    }
    if (mail){
        $dir = 'data/' . mail . '.txt';
        $survay = fopen($dir, 'w+');
        fwrite($survay, firstName . PHP_EOL);
        fwrite($survay, lastName . PHP_EOL);
        fwrite($survay, age . PHP_EOL);
        fclose($survay);
        echo('Successful');
    }
    else
    {
        echo('error');
    }