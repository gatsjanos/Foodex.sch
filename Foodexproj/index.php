<?php
session_start();

set_include_path(getcwd());
include_once 'Eszkozok/Eszk.php';


if (isset($_SESSION['profilint_id']))
{
    Eszkozok\Eszk::RedirectUnderRoot('profil');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Foodexet a népnek!</title>

    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="res/kepek/favicon1_64p.png">
</head>

<body>

<div class="outer">
    <div class="middle">
        <div class="inner">


            <!--<h1 style=";text-align: center;color: #999999; font-size: 50px; padding-bottom: 0; margin-bottom: 0;letter-spacing: -4px;">-->
            <!--    Food<p-->
            <!--        style="display: inline;color: #f4511e;margin-left: -3px">Ex</p>-->
            <!--</h1>-->

            <div style="horiz-align: center; text-align: center;margin-left:20px">

                <img class="fxlogo" src="res/kepek/FoodEx_logo.png"">

            </div>
            <div style="horiz-align: center; text-align: center;">


                <a href="https://www.youtube.com/watch?v=FyYF7-W0AyQ" target="_blank"
                   style="text-decoration:none; display: inline-block">
                    <p style="color: #999999;font-size: larger; font-style: italic; padding-top: 0;margin-top: 0">Mi
                        vagyunk a
                        rock,
                        mi vagyunk az
                        <span style="display: inline;color: #f4511e">étel</span>!</p>
                </a>
            </div>


            <form action="login.php" method="post">
                <input type="input" name="muvelet" value="startlogin" hidden>

                <div style="horiz-align: center; text-align: center; padding-top: 5vh">

                    <button class="button" type="submit" style="vertical-align:middle; horiz-align: center">
                        <span>Belépés </span>
                    </button>

                </div>

            </form>
        </div>
    </div>
</div>
</body>

</html>