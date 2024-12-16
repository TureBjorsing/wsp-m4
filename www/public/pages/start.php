<?php 
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['inLoggad'])) {
?>
<hgroup>
	<h1>Välkommen till Webbserverprogrammering 1</h1>
	<h2>Moment 3</h2>
</hgroup>

<p>Min sida</p>
<?php 
    } else {
?>
<hgroup>
	<h1>Välkommen till Webbserverprogrammering 1</h1>
	<h2>Utloggad</h2>
</hgroup>
<?php } ?>