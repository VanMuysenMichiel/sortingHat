<?php
    function makeDbConnection() {
           // LOCALHOST 
           // $hostname = "localhost"; 
           // $user = "root"; 
           // $password = "root";
           // $database = "sortinghat2"; 
           // $port = "3306";


           // ONLINE 
            $hostname = "ID362591_sortinghat2.db.webhosting.be"; 
            $user = "ID362591_sortinghat2"; 
            $password = "Taymans12";
            $database = "ID362591_sortinghat2"; 
            
        $conn = mysqli_connect($hostname, $user, $password, $database);

        if ($conn == false) {
            // Stop met de php code
            die("Geen database connectie");
        }
        return $conn;
    };

    function closeConnection($conn) {
        $conn->close();
    }



    function getQuery($sqlQuery) {
        $conn = makeDbConnection();

        $result = mysqli_query($conn, $sqlQuery);

        return $result->fetch_all(MYSQLI_ASSOC);

        closeConnection($conn);
    }

    function insertQuery($sqlQuery) {
        $conn = makeDbConnection();

        $result = mysqli_query($conn, $sqlQuery);

        closeConnection($conn);

        return $result;
    }

    function procedure($sqlQuery) {
          $conn = makeDbConnection();

          $result = mysqli_query($conn, $sqlQuery);
  
          closeConnection($conn);
  
          return $result;
    }

    function ceiling(){
        $ceiling = getQuery("select max(personId)
        from person;
        ");
        
       $count = (int) $ceiling[0]["max(personId)"];
       
        return $count;
    }

    function rndUser(){
        $currentUser= random_int(1,Ceiling());
   
        $rnd = getQuery("select personId
        from person where personId= $currentUser ;
        ");
        
        $rndId = (int) $rnd[0]["personId"];
       
        return $rndId;
    }
  
    $currentUser= random_int(1,Ceiling());
  
   
    

   
   
    




 
  
