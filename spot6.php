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
        <title>Mount Malindig</title>
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
<h4>MOUNT MALINDIG</h4>

    <img src="images/malindig.jpg">

<p>Mount Malindig, which stands majestically at an elevation of 1,157 meters above sea level, is a must-see tourist attraction in Buenavista Marinduque and is considered the province's highest peak. It is a stratovolcano on Luzon Island, located at the island's southern tip and on the west side of the Bondoc Peninsula.</p>
<p>Mount Malindig is comparable to Mt. Banahaw and Mt. Makiling in Southern Luzon's Quezon and Laguna provinces due to its vast landscape and thriving ecosystem. The Malbog Sulfur Spring, located at the base of Mount Malindig, is a therapeutic sulfuric spring. Many locals and tourists come here to experience the spring's healing powers.</p>
<p>Mountaineers will enjoy the hike to Mount Malindig. It has a difficulty level of 4 according to the Pinoy Mountaineer rating system, requiring a minor climb. Mount Malinig has a well-established trail with somewhat rugged and steep paths with trail classification levels 1 and 2.</p>

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