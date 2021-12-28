<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/vote.css">
    </head>
    <body>
        <div id="center">
        <div class="personDisplay">
        <div id="houses">
        <div id="profile-pic">

        </div>
            <h1>
                Where does this person belong?
            </h1>
            <p class="firstname">
                firstname 
    
            </p>
            <p class="lastname">
                lastname 
    
            </p>
            <p class="age">
                age 
    
            </p>
            <p class="gender">
                gender 
    
            </p>
            <p class="description">
                description 
    
            </p>
            <p class="houseInfo">
    
            </p>
            <br>
            <div id="form-house">
            <nav class="nav">
                        <ul>
                            <li>
                                <button type="submit" id="gryffindor" class="action-button" name="house" value="1">
                                    This is a Gryffondor!
                                </button>
                            </li>
                            <br>
                            <li>
                                <button type="submit" id="ravenclaw" class="action-button" name="house" value="4">
                                    This is a Ravenclaw!
                                </button>
                            </li>
                        </ul>
                    </nav>
                    <br>
                    <nav class="nav">
                        <ul>
                            <li>
                                <button type="submit" id="slytherin" class="action-button" name="house" value="2">
                                    This is a Slytherin!
                                </button>
                            </li>
                            <br>
                            <li>
                                <button type="submit" id="hufflepuff" class="action-button" name="house" value="3">
                                    This is a Hufflepuff!
                                </button>
                            </li>
                        </ul>
                    </nav>
            </div>
            <br>
            <br>
            <button id="nextPerson">
                Go to next profile
            </button>
            <br>
            <br>
            <p>
                ! If there is no next person, choose what you want to do !
            </p>
            <nav class="nav">
                        <ul>
                            <li>
                                <a class="action" href="./create.php">
                                    <p>
                                        Add another profile!
                                    </p>
                                </a>
        
                            </li>
                            <li>
        
                                <a class="action" href="./vote.php">
                                    <p>
                                        Put people again in a house!
                                    </p>
                                </a>
        
                            </li>
                        </ul>
                    </nav>
            <h3>
                Made by: Michiel Van Muysen
            </h3>
        </div>
        </div>
        </div>
               
    <script src="js/vote.js">
        
    </script>
    </body>
</html>