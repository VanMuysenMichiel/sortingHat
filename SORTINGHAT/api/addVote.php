<?php
    include "../includes/connect.php";
    $houseId = $_GET["houseID"];
    $personId = $_GET["personID"];

    $addedVote= procedure("call addVote($personId,$houseId);");
    echo json_encode($addedVote);
   
  

   