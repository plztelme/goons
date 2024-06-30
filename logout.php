<?php
session_start();
unset($_SESSION['firstname']); // Unset specific session variable if needed

$session_destroy = session_destroy();

if ($session_destroy) {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User';
    echo '<body style="background-image:url(\'stardust.png\')"></body>';
    echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>Bye {$username} See ya soon..Redirecting ya to see ya again.. </h2>";
    echo '<meta http-equiv="refresh" content="3;url=login.html">';
    exit();
} else {
    echo '<body style="background-image:url(\'stardust.png\')"></body>';
    echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>The server encountered an error.</h2>";
    echo '<meta http-equiv="refresh" content="3;url=login.html">';
    exit();
}
?>
