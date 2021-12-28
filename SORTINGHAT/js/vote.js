var ageElement = document.querySelector(".age");
var genderElement = document.querySelector(".gender");
var firstnameElement = document.querySelector(".firstname");
var lastnameElement = document.querySelector(".lastname");
var descriptionElement = document.querySelector(".description");
var hufflepuffButton = document.getElementById("hufflepuff");
var ravenclawButton = document.getElementById("ravenclaw");
var gryffindorButton = document.getElementById("gryffindor");
var slytherinButton = document.getElementById("slytherin");
var nextPersonButton = document.getElementById("nextPerson")
var IDElement = document.querySelector(".ID");
var houseElement = document.querySelector(".houseInfo");
var user = null;
var nummer = 1;
 
getRandomUser();
        nextPersonButton.addEventListener("click",function(){
            nummer++;
            getRandomUser();
            });

        gryffindorButton.addEventListener("click",function(){
            addvote(1);
            });
        
        slytherinButton.addEventListener("click",function(){
            addvote(2);
            });

        hufflepuffButton.addEventListener("click",function(){
            addvote(3);   
            });
        ravenclawButton.addEventListener("click",function(){
            addvote(4);
            });


function addvote(house) {
    fetch("http://localhost/api/addVote.php?houseID="+house+"&&personID="+nummer)
    .then(function (response){
        return response.json();
    })
    .then(function  (data){
           
    });
    
}
           
function getRandomUser(){
    fetch("http://localhost/api/getRandomUser.php?personID="+nummer)
    .then(function (response){
        return response.json();
    })
    .then(function  (data){

        firstnameElement.innerHTML="Firstname: "+data[0].firstName;
        lastnameElement.innerHTML="Lastname: "+data[0].lastName;
        ageElement.innerHTML="Age: "+data[0].age;
        genderElement.innerHTML="Gender: "+data[0].gender;
        descriptionElement.innerHTML="Description: "+data[0].description;
        
        var user = data[0].personId;
        return user;

        })}




           
            
 
           