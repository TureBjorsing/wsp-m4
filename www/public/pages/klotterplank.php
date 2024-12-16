<h1>Klotterplanket</h1>

<form action="pages/saveMsg.php" method="post">
    <label>Meddelande</label><br>
    <textarea name="message" cols="45" rows="5"></textarea><br>
    <input type="submit" value="Skicka">
</form>

<?php 
    if(file_exists("pages/msg.dat")) {
        echo file_get_contents("pages/msg.dat");
    }
?>