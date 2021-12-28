<?php
 include "../includes/connect.php";
 $firstname = $_POST["firstname"];
 $lastname= $_POST["lastname"];
 $age = $_POST["age"];
 $gender = $_POST["gender"];
 $description = $_POST["description"];
 
 
 procedure("call addPerson('$firstname','$lastname',$age,'$gender','$description');");
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SUCCESS</title>
    <link href="../css/vote.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div>
            <div id="center">
                <div>
                    <h1 class="header">
                        Success
                    </h1>
                </div>
                <div id="register">
                    <p class="text"> 
                    Your profile has been added to the database.
                    <br>
                    <br>
                    Choose what you want to do next.    
                    </p>
                    <nav class="nav">
                        <ul>
                            <li>
                                <a class="action" href="../create.php">
                                    <p>
                                        Add another profile!
                                    </p>
                                </a>
        
                            </li>
                            <li>
        
                                <a class="action" href="../vote.php">
                                    <p>
                                        Put people in a house!
                                    </p>
                                </a>
        
                            </li>
                        </ul>
                    </nav>
                </div>
                <h3>
                    Made by: Michiel Van Muysen
                </h3>
            </div>
        </div>
    </body>
</html>