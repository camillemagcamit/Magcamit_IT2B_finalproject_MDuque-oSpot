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
        <title>Maniwaya Island</title>
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
    <h4>MANIWAYA ISLAND</h4>
    <img src="images/maniwaya.jpg">

<p>Maniwaya Island is one of several islands in Marinduque that dot Santa Cruz town and can compete with famous white-sand beaches in the Philippines. Along the beach, you can find low-cost resorts and glamping cottages similar to those found in Bali, Indonesia.</p>
<p>Palad Sandbar, located off the island's northern coast, is a patch of white sand that unravels and appears to invite you to dip into the surrounding crystal blue waters. The sandbar is best visited in the morning, when the entire strip of white sand appears during low tide.</p>
<p>The picturesque backdrop of palm-fringed shores and turquoise-colored waters is ideal for Instagrammable selfies and group photos. To round out your trip, don't pass up the opportunity to see the best sunset on Maniwaya Island.</p>



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