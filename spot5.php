<?php
//start the session
SESSION_START();


if (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
    }
elseif (isset($_REQUEST['Contact']) ===true){
    session_destroy();
    header("Location: contact us.php?Contact");
}
elseif (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mongpong Island</title>
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
      
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/logo.png" height="40" width="240" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a class="active" href="spots.php">Spots</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a href="?Contact">Contact Us</a>

</div>
</div>

<div class="count">
<h4>MONGPONG ISLAND</h4>

    <img src="images/mongpong.jpg">

<p>Mongpong Island, located off the northeastern coast of Marinduque, is a charming islet with striking rock formations and a pristine white-sand beach. It has clear blue waters with colorful reef fishes underwater.</p>
<p>The first thing you'll notice when you arrive on the island is the Ungab Rock Formation. The massive colossal rock rests on the turquoise waters and white sand of the island. A triangular hole carved out of the base rock forms a land bridge connecting you to the other side of the beach.</p>
<p>The massive boulder is a sight to behold and makes an excellent backdrop for selfies and group photos. Furthermore, the water beneath the rock arch is shallow, making it a safe swimming area for children. The white sand is made up of smooth pebbles and coral fragments.</p>

</div>
<div class="foot">

  <p>Copyright &copy; 2022. Camille D. Magcamit</p>

        <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="images/icons/fb.png"></a>
        <a href="https://twitter.com/"><img src="images/icons/tw.png"></a>
        <a href="https://www.youtube.com/"><img src="images/icons/yt.png"></a>
        <a href="https://www.instagram.com/"><img src="images/icons/ig.png"></a>
</div>
</div>
</html>