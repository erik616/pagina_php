<?php

    session_start();

    $myarq = fopen("./app/arquivo.hd","r");
    echo fgets($myarq);
    fclose($myfile);



?>