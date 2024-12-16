<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    mb_internal_encoding("UTF-8");

    $data = $_POST['message'];

    if(!mb_check_encoding($data)) {
        echo "Fel format på texten";
    } else {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
    }

    $name = "<hr><p>Från: " . $_SESSION['username'] . "</p>";
    $msg = "<p>" . $data . "</p>";

    file_put_contents("msg.dat", $name . $msg, FILE_APPEND);

    header("location: ../index.php?page=klotterplank");
?>