<?php
    include "../includes/connect.php";
    $personId = $_GET["personID"];
    
    $infoUser= getQuery("select * from person where personId=$personId;");
    echo json_encode($infoUser);

