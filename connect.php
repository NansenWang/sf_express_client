<?php

 // $conIP="10.66.2.234";
 // $conDB="sf_twbsp";
 // $conUsername="sls_user";
 // $conPassword="sls_user@233";

// $conIP="10.66.10.110";
// $conDB="sf_twbsp";
// $conUsername="sftw_bspuat";
// $conPassword="sftw_bspuat@sftw";

// $conUsername="sftw_bspdev";
// $conPassword="sftw_bspdev@sftw";

// $conIP="192.168.150.128";
// $conDB="homestead";
// $conUsername="homestead";
// $conPassword="secret";

 $conIP="10.66.0.110";
 $conDB="sf_twbsp";
 $conUsername="sftw_bspuat";
 $conPassword="sftw_bspuat@sftw";


try {
    $conn = new PDO("mysql:host=$conIP;dbname=$conDB", $conUsername, $conPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



?>
