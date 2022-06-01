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
}elseif (isset($_REQUEST['Maniwaya Island']) ===true){
    session_destroy();
    header("Location: spot1.php?Maniwaya Island");
}elseif (isset($_REQUEST['Poctoy White Beach']) ===true){
    session_destroy();
    header("Location: spot2.php?Poctoy White Beach");
}elseif (isset($_REQUEST['Tres Reyes Islands']) ===true){
    session_destroy();
    header("Location: spot3.php?Tres Reyes Islands");
}elseif (isset($_REQUEST['Bagumbungan Cave']) ===true){
    session_destroy();
    header("Location: spot4.php?Bagumbungan Cave");
}elseif (isset($_REQUEST['Mongpong Island']) ===true){
    session_destroy();
    header("Location: spot5.php?Mongpong Island");
}elseif (isset($_REQUEST['Mount Malindig']) ===true){
    session_destroy();
    header("Location: spot6.php?Mount Malindig");
}elseif (isset($_REQUEST['Paadjao Falls']) ===true){
    session_destroy();
    header("Location: spot7.php?Paadjao Falls");
}elseif (isset($_REQUEST['Bathala Cave']) ===true){
    session_destroy();
    header("Location: spot8.php?Bathala Cave");
}elseif (isset($_REQUEST['Beach Club Cagpo Resort']) ===true){
    session_destroy();
    header("Location: spot9.php?Beach Club Cagpo Resort");
}elseif (isset($_REQUEST['Molbog Sulfur Spring']) ===true){
    session_destroy();
    header("Location: spot10.php?Molbog Sulfur Spring");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Spots-MDuqueñoSpot</title>
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

<p>Maniwaya Island is one of several islands in Marinduque that dot Santa Cruz town and can compete with famous white-sand beaches in the Philippines. Along the beach, you can find low-cost resorts and...</p>
    <a href="spot1.php" class="button">CONTINUE READING</a>

<br>

    <h4>POCTOY WHITE BEACH</h4>

    <img src="images/poctoy.jpg">

<p>The Poctoy White Beach, a long stretch of fine white sand lined with palm trees in the coastal municipality of Torrijos, is one of Marinduque's most well-known attractions. The powdery beach is surrounded by...</p>
<a href="spot2.php" class="button">CONTINUE READING</a>

<br>

<h4>TRES REYES ISLANDS</h4>

    <img src="images/tresreyes.jpg">

<p>The Treys Reyes Islands, located off the coast of Gasan municipality, are another postcard-worthy spot in Marinduque. The starting point is Gasan port, where tour boats await passengers before...</p>
<a href="spot3.php" class="button">CONTINUE READING</a>

<br>

<h4>BAGUMBUNGAN CAVE</h4>

    <img src="images/bagumbungan.jpg">

<p>Those interested in spelunking in the Philippines can visit the Bagumbungan Cave, one of Marinduque's subterranean wonders. It is frequently compared to Sumaguing Cave in Sagada due to its...</p>
<a href="spot4.php" class="button">CONTINUE READING</a>

<br>

<h4>MONGPONG ISLAND</h4>

    <img src="images/mongpong.jpg">

<p>Mongpong Island, located off the northeastern coast of Marinduque, is a charming islet with striking rock formations and a pristine white-sand beach. It has clear blue waters with colorful reef fishes...</p>
<a href="spot5.php" class="button">CONTINUE READING</a>

<br>

<h4>MOUNT MALINDIG</h4>

    <img src="images/malindig.jpg">

<p>Mount Malindig, which stands majestically at an elevation of 1,157 meters above sea level, is a must-see tourist attraction in Buenavista Marinduque and is considered the province's highest...</p>
<a href="spot6.php" class="button">CONTINUE READING</a>

<br>

<h4>PAADJAO FALLS</h4>

    <img src="images/paadjao.jpg">

<p>While Marinduque is well-known for its beautiful beaches, one enchanting waterfall stands out from the rest of the Mogpog Marinduque tourist attractions: the Paadjao Falls. The Paadjao Falls are located in...</p>
<a href="spot7.php" class="button">CONTINUE READING</a>

<br>

<h4>BATHALA CAVE</h4>

    <img src="images/bathala.jpg">

<p>Bathala Cave is a cave system on the jungle-clad mountain side of Marinduque that consists of seven caves, four of which are open to the public: Church, Secret, Python, and Cemetery Caves. Church Cave is the...</p>
<a href="spot8.php" class="button">CONTINUE READING</a>

<br>

<h4>BEACH CLUB CAGPO RESORT</h4>

    <img src="images/cagpo.jpg">

<p>Beach Club Cagpo Resort is the best Marinduque destination for travelers or couples looking for peace and quiet in a relaxing tropical island setting. The boutique resort and restaurant, perched on the...</p>
<a href="spot9.php" class="button">CONTINUE READING</a>

<br>

<h4>MOLBOG SULFUR SPRING</h4>

    <img src="images/molbog.jpg">

<p>Malbog Sulfur Spring is a natural hot spring located at the base of Mount Malindig. It is a stratovolcano in the town of Buenavista, rising 1,157 meters above sea level....</p>
<a href="spot10.php" class="button">CONTINUE READING</a>
<br>
<br>
</div>
   
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