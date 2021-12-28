<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="css/vote.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div>
        <div id="center">
            <div>
                <h1 class="header">
                    Create a new profile!
                </h1>
            </div>
            <div id="register">
                <form id="form" action="api/check_user.php" method="POST" name="profile-form" onsubmit="return validateForm()">
                    <label class="label" for="firstname">
                        Firstname
                    </label>
                    <input type="text" class="input" id="firstname" autocomplete="off" name="firstname">
                    <small id="error-firstname" class="error"></small>
                    <label class="label" for="lastname">
                        Lastname
                    </label>
                    <input type="text" class="input" id="lastname" autocomplete="off" name="lastname">
                    <small id="error-lastname" class="error"></small>
                    <label class="label" for="age">
                        Age
                    </label>
                    <input type="number" class="input" id="age" name="age">
                    <small id="error-age" class="error"></small>
                    <label class="label" for="gender">
                        Gender
                    </label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="X">X</option>
                    </select>
                    <small id="error-gender" class="error"></small>
                    <br>
                    <label for="description">
                        Tell us about yourself
                    </label>
                    <br>
                    <textarea name="description" id="description" cols="10" rows="10" >
                        
                    </textarea>
                    <br>
                    <button type="submit" class="action-button">
                        Create account
                    </button>
                </form>
            </div>
            <h3>
                Made by: Michiel Van Muysen
            </h3>
        </div>
    </div>
    <script src="./js/add.js"></script>
</body>
</html>