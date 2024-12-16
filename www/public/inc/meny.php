<?php 
	if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

	if(isset($_SESSION['inLoggad'])) {
?>
<h1>Innehåll</h1>
	<ul>
		<li><a href="index.php">Hem</a></li>
		<li><a href="index.php?page=blogg">Blogg</a></li>
		<li><a href="index.php?page=bilder">Bilder</a></li>
		<li><a href="index.php?page=kontakt">Kontakt</a></li>
		<li><a href="index.php?page=login">Login</a></li>
		<li><a href="index.php?page=klotterplank">Klotterplanket</a></li>
	</ul>
<?php 
	} else {
?>
<h1>Innehåll</h1>
	<ul>
		<li><a href="index.php">Hem</a></li>
		<li><a href="index.php?page=blogg">Blogg</a></li>
		<li><a href="index.php?page=bilder">Bilder</a></li>
		<li><a href="index.php?page=kontakt">Kontakt</a></li>
		<li><a href="index.php?page=login">Login</a></li>
	</ul>
<?php } ?>