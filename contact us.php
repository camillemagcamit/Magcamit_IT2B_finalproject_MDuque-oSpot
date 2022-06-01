<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
    }
elseif (isset($_REQUEST['About']) ===true){
    session_destroy();
    header("Location: about us.php?About");
}
elseif (isset($_REQUEST['Start']) ===true){
    session_destroy();
    header("Location: start here.php?Start");
}elseif (isset($_REQUEST['Spots']) ===true){
    session_destroy();
    header("Location: spots.php?Spots");
}
// if the button is clicked
if(isset($_REQUEST['submit_button']) === true){
    session_destroy();
    header("Location: index.php?Homepage");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact Us-MDuqueñoSpot</title>
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
      
        <link href="css/style.css" rel="stylesheet" />
    </head>

<div class="header">
   <a> <img src="images/logo.png" height="40" width="240" alt=""></a>
<div class="header-right">

<a href="?Homepage">Home</a>
<a href="?Spots">Spots</a>
<a href="?Start">Start Here</a>
<a href="?About">About Us</a>
<a class="active" href="contact us.php">Contact Us</a>

</div>
</div>
<style>
            body {
                background-image: url("images/beach.jfif");
                background-size: 1400px 720px;
                margin-top: 0px;
            }
        </style>
<div class="contact-section">

    
    <h1>Contact Us</h1>
    <p>For questions or concerns, fill up the form below.</p>
    <br>
    <form class="contact form" action="contact us" method="post">
      <input type="name" class="contact-form-text" placeholder="Name">
      <input type="email" class="contact-form-text" placeholder="Email">
      <input type="name" class="contact-form-text" placeholder="Phone Number"> 
      <textarea class="contact-form-text" placeholder="Write something..."></textarea>
      
      <input type="submit" class="contact-form-btn" value="SEND" onclick="window.location='mailto:camillemagcamit04@gmail.com';"/>
  

    <br><br><br>
    
</div>
<div class="footer">

  <p>Copyright &copy; 2022. Camille D. Magcamit</p>

        <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="images/icons/fb.png"></a>
        <a href="https://twitter.com/"><img src="images/icons/tw.png"></a>
        <a href="https://www.youtube.com/"><img src="images/icons/yt.png"></a>
        <a href="https://www.instagram.com/"><img src="images/icons/ig.png"></a> 
</div>
</div>
</html>