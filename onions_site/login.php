<?php
session_start();
$pdo = require_once "connection_database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    
    $sql = "SELECT * FROM mrdroider WHERE username='$form_username' AND password='$form_password'";
    $result = $pdo->query($sql);
    
    if ($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        
        if ($row && $row['username'] == $form_username && $row['password'] == $form_password) {
            $_SESSION['username'] = $form_username;
            $_SESSION['created'] = time(); 
            session_regenerate_id();    
            header("Location: welcome.php");
            exit;
        } else {
            // Invalid username or password handling
            echo "<body style=\"background-image:url('stardust.png')\"></body>";
            echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>Error: Wrong Username or Password</h2>";
            echo "<h2 style='text-align:center;color:#83DBEF;font-family:monospace;font-size:0.9rem;margin-top:2%'>Try again, or if you are trying to gain access, try again and if you find something [which you will], <em style='font-style:italic'>hack</em> the site, Good luck:)</h2>";
            echo '<meta http-equiv="refresh" content="2;url=login.html">';
        }
    } else {
        // SQL query error handling dk the sql query isn't even executing for some absurd reason
        echo "<body style=\"background-image:url('stardust.png')\"></body>";
        echo "<h2 style='margin-top:20%;color:#ffcccb;text-align:center;font-family:monospace'>The server did a boo boo, bad one..</h2>";
        echo '<meta http-equiv="refresh" content="2;url=login.html">';
    }
} else {
    // Invalid request method handling , dk it's not post for some hedious reason 
    echo "<body style=\"background-image:url('stardust.png')\"></body>";
    echo "<h2 style='margin-top:2%;color:#ffcccb;text-align:center;font-family:monospace'>The server did a boo boo, bad one...</h2>";
    echo '<meta http-equiv="refresh" content="2;url=login.html">';
}
?>