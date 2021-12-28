var buttonElement = document.querySelector(".action-button");
var form = document.getElementById("form");
var firstname = document.querySelector("#firstname");
var lastname = document.querySelector("#lastname");
var age = document.querySelector("#age");
var gender = document.querySelector("#gender");
var error = "";
var errorcounter = 0;
var validForm = 0;
var register = document.querySelector("#register");
var header = document.querySelector(".header");

buttonElement.addEventListener("click", function(){
        if (firstname.value == "") {
                error = "Please fill in your firstname";
                firstname.classList.remove("input");
                firstname.classList.add("input-error");
                document.querySelector("#error-firstname").innerHTML = error;
        }
        else {
                firstname.classList.remove("input-error");
                firstname.classList.add("input");
                document.querySelector("#error-firstname").innerHTML = "";
                validForm++;
        }
        if (lastname.value == "") {
                error = "Please fill in your lastname";
                lastname.classList.remove("input");
                lastname.classList.add("input-error");
                document.querySelector("#error-lastname").innerHTML = error;
        }
        else {
                lastname.classList.remove("input-error");
                lastname.classList.add("input");
                document.querySelector("#error-lastname").innerHTML = "";
                validForm++;
        }
        if (age.value == "") {
                error = "Please fill in your age";
                age.classList.remove("input");
                age.classList.add("input-error");
                document.querySelector("#error-age").innerHTML = error;
        }
        else {
                age.classList.remove("input-error");
                age.classList.add("input");
                document.querySelector("#error-age").innerHTML = "";
                validForm++;
        }
        if (!gender.value) {
                error = "Please choose a gender";
                gender.id = "gender-error";
                document.querySelector("#error-gender").innerHTML = error;
        }
        else {
                gender.id = "gender";
                document.querySelector("#error-gender").innerHTML = "";
                validForm++;
        }
});

function validateForm() {
        var formFirstname = document.forms["profile-form"]["firstname"].value;
        var formLastname = document.forms["profile-form"]["lastname"].value;
        var formAge = document.forms["profile-form"]["age"].value;
        var formGender = document.forms["profile-form"]["gender"].value;

        if (formFirstname == "" || formLastname == "" || formAge == "" || formGender == "") {
                return false;
        }
}