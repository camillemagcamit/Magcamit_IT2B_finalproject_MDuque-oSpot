<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
    }
elseif (isset($_REQUEST['Spots']) ===true){
    session_destroy();
    header("Location: spots.php?Spots");
}
elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}elseif (isset($_REQUEST['Contact']) ===true){
    session_destroy();
    header("Location: contact us.php?Contact");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Us-MDuqueñoSpot</title>
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/logo.png" height="40" width="240" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a href="?Spots">Spots</a>
<a href="?Start">Start Here</a>
<a class="active" href="about us.php">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>

<div class="abt">
<h1>About</h1>
</div>

<h3 style="text-align: center; color: black; font-family: Arial Black; font-size: 45px;">Welcome to MDuqueñoSpot</h3>

<div class="content">

<br>

<?php

echo "<p>Hi I'm Camille D. Magcamit and I'm the one who created this website MDuqueñoSpot which contains top 10 famous spots for me that I think are best, and the purpose of creating this website is to share these to everyone.</p><br>";

echo "<p>I love adventure and exploring places, and I want to share to you guys the beauty of it all. Not just the beauty of it, but also the feeling and experience you'll get when you're at those places.</p><br>";

echo "<p>So this website is specially made just for you all (the readers). I want to make things easier for you guys so I compiled famous spots here in Marinduque. Let's introduce Marinduque to the world.</p>";

?>

</div>

        <div class="banner">
                <img src="images/meh.jpg">
            </div>
<div class="foota">

  <p>Copyright &copy; 2022. Camille D. Magcamit</p>

        <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="images/icons/fb.png"></a>
        <a href="https://twitter.com/"><img src="images/icons/tw.png"></a>
        <a href="https://www.youtube.com/"><img src="images/icons/yt.png"></a>
        <a href="https://www.instagram.com/"><img src="images/icons/ig.png"></a> 
</div>
</div>
</html>