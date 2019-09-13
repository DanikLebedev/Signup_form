<?php
//var_dump($_COOKIE);
if (!isset($_COOKIE['email']) or trim($_COOKIE['email']) == '') {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">

    <title>User Cabinet</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col l12 center-align">
                <h1 class="user_cabinet_header">User Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col l12 center-align">
                <button class="waves-effect waves-light btn" id="logout"><i class="material-icons right">keyboard_tab</i>LogOut</button>
            </div>
        </div>
        <div class="row">
            <div class="col l6">
                <form>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" class="validate" id="signup-name">
                            <label class="active" for="signup-name"> Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="validate" id="signup-pass">
                            <label class="active" for="signup-pass">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="datepicker" id="signup-birthday">
                            <label class="active" for="signup-birthday">Birthday</label>
                        </div>
                    </div>
                    <button class="waves-effect waves-light btn" type="submit" value="update" id="signup-submit"> <i class="material-icons right">send</i>Update</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js_mater/materialize.min.js"></script>
    <script src="js/ajax.js "></script>
    <script src="js/get_user_data.js"></script>
    <script src="js/logout.js"></script>
</body>

</html>