<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="index.php" class="logo">Malikhaing Haraya</a>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="favorites.php">Favorite</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

</header>
