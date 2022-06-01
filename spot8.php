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
        <title>Bathala Cave</title>
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
<h4>BATHALA CAVE</h4>

    <img src="images/bathala.jpg">

<p>Bathala Cave is a cave system on the jungle-clad mountain side of Marinduque that consists of seven caves, four of which are open to the public: Church, Secret, Python, and Cemetery Caves. Church Cave is the largest cave, with stalactites and stalagmites that resemble the interior of a church.</p>
<p>Python Cave is famous for the pythons that rest on the walls and the hundreds of large bats that live in the ceilings. Human bones discovered in Cemetery Cave are thought to be the remains of war soldiers. While Secret Cave has a lot of rock formations and a small exit hole, hence the name. Bathala Cave is located  in Santa Cruz, Marinduque.</p>

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