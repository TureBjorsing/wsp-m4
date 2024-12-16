<?php 
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
   

    if(isset($_SESSION['inLoggad'])) {
        echo "<h1> Webbserverprogrammering 1 med " . $_SESSION['username'];
    } else {
        echo "<h1>Webbserverprogrammering 1 med Bygren</h1>";
    }
?>