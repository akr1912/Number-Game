<!DOCTYPE html>
<html>
<head></head>
<style>
    form {
        text-align: center;
    }
    h1 {
        color: ;
        font-family: Felix Titling;
        text-align: center;
    }
    body {
        background-image: linear-gradient(to right, red, yellow, skyblue, green, orange);

    }
    h2 {
        background-image: linear-gradient(to right, red, yellow, #a60ca6, green, orange);
        text-align: center;
        color: white;
        font-family: Pristina;
    }
    h3 {
        text-align: center;
        font-family: Calibri Light;
    }
    form {
        text-align: center;
        font-family: Felix Titling;
    }
    div {
        margin-left: 44%;
        margin-right: 100%;
        width: 170px;
        height: 22px;
        border: 10px solid #42438f;
    }
    input[type="number"]::placeholder {
        text-align: center;
        color: black;
    }
    span {
        background-image: linear-gradient(to right, yellow, skyblue, green);
        position: center;
    }
    input[type="submit"] {
        color: white;
        font-family: Felix Titling;
    }
</style>
<body>
<h1>The Number Game</h1>
<h2>by Aditya Kumar</h2>
<h3>Enter A Number Between 1 to 100</h3>
<h3>And Guess The Correct Number 😀 </h3>
<form method="post">
    <div><tr><td><input type="number" name="number_game" placeholder=" ENTER HERE"></td><br></tr></div><br>
    <tr><td><input type="submit" name="press_button" value="TRY YOUR LUCK" style="background-color: #bf0000"></td></tr>
</form>
<?php
if(isset($_POST['press_button']))
{
    $range = rand(1,100);
    $user_entered = $_POST['number_game'];
    switch ($user_entered == $range) {
        case 1:
            echo '<h3><span style="font-family: Monotype Corsiva">'."Your Guess is CORRECT".'</span></h3>';
            echo '<h1><span style="font-family: Monotype Corsiva">'."!!! CONGRATULATIONS !!!".'</span></h1>';
            break;
        case 0:
            switch ($user_entered > $range) {
                case 1:
                    echo '<h3><span style="font-family: Cambria">'."Your Guess \"$user_entered\" is Higher".'</span></h3>';
                    echo '<h3><span style="font-family: Cambria">'."The Correct Guess is :".$range.'</span></h3>';
                    echo '<h1><span style="font-family: Cambria">'."Better Luck Next Time".'</span></h1>';
                    break;
                case 0:
                    echo '<h3><span style="font-family: Monotype Corosiva">'."Your Guess \"$user_entered\" is Lower".'</span></h3>';
                    echo '<h3><span style="font-family: Monotype Corosiva">'."The Correct Guess is :".$range.'</span></h3>';
                    echo '<h1><span style="font-family: Monotype Corosiva">'."Better Luck Next Time".'</span></h1>';
                    break;
            }
    }
}
?>
</body>
</html>

