<?php
session_start();

// Check for session expiration
if (isset($_SESSION['created']) && (time() - $_SESSION['created'] > 800)) {
    session_unset();
    session_destroy(); // Destroy the current session

    // Output the expiration message
    echo "<!DOCTYPE html>";
    echo "<html lang=\"en\">";
    echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    echo "<meta http-equiv=\"refresh\" content=\"2;url=login.html\">";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "<link rel=\"stylesheet\" href=\"onion.css\" />";
    echo "<title>Onion</title>";
    echo "</head>";
    echo "<body style=\"background-color:black\">";
    echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>Error: Session Expired</h2>";
    echo "<h2 style='text-align:center;color:#83DBEF;font-family:monospace;font-size:0.9rem;margin-top:2%'>Please log in again to continue.</h2>";
    echo "</body>";
    echo "</html>";
    exit; 
}

// If session is valid, continue with the rest of your page logic
if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="5;url=welcome.php">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="onion.css" />
        <link rel="icon" href="big_eyes.png" type="image/x-icon">
        <title>Onion</title>
    </head>

    <body>
        <nav class="nav-bar">
            <div class="logo-container">
                <img class="logo" src="big_eyes.png">
            </div>
            <div class="nav-links">
                <a href="onion.html">Home</a>
                <a href="read.html">Read</a>
                <a href="post.html">Post</a>
                <a href="logout.php">Log Out</a> <!-- Updated Log Out link -->
            </div>
        </nav>
        <div class="top-heading">
            Please try to learn the things you intend to through this site.
        </div>
        <div class="blog-container">
            <div class="small-blog">
                <div class="the-hack">
                    <p>
                        Make this website and add the features that would be in a typical hacking forum at the beginning making it capable of form
                        submission (connecting with database) using PHP and letting users post stuff, then display that using PHP. Make sure it's secure against defacement or serious vulnerabilities.
                    </p>
                </div>
            </div>
        </div>
    </body>

    </html>
    <?php
} else {
    // If session username is not set, display login error message
    echo "<!DOCTYPE html>";
    echo "<html lang=\"en\">";
    echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    echo "<meta http-equiv=\"refresh\" content=\"2;url=login.html\">";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "<link rel=\"stylesheet\" href=\"onion.css\" />";
    echo "<title>Onion</title>";
    echo "</head>";
    echo "<body style=\"background-color:black\">";
    echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>Error: You need to log in first</h2>";
    echo "<h2 style='text-align:center;color:#83DBEF;font-family:monospace;font-size:0.9rem;margin-top:2%'>Try again, or if you are trying to gain access, try again and if you find something [which you will], <em style='font-style:italic'>hack</em> the site, Good luck:)</h2>";
    echo "</body>";
    echo "</html>";
}
?>
