<?php
/**
 * Login Succesful.
 * User: ericzorn
 * Date: 2/4/18
 * Time: 10:49 PM
 */

// Set Session Cookies
setcookie('firstName', trim($_POST['fname']));
setcookie('lastName', trim($_POST['lname']));

//Require Header and Navbar
require "../../inc/page-begin.php";
require "../../inc/navbar.php";
include "../logic/functions.php";


// Set Session Variables
$_SESSION['firstName'] = trim($_POST['fname']);
$_SESSION['lastName'] = trim($_POST['lname']);
$_SESSION['currentTime'] = date("h:i:sa");

// Time Zone Set Default to IP or America/New_York
//date_default_timezone_get();
date_default_timezone_set("America/New_York");

// Logic for Session Cancelling
loginControl();
?>

<br/>
<!-- Jumbotron -->
<div class='container'>
    <div class='jumbotron'>
        <h1>Hey, <?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?></h1>
        <p class='text-success'>You've had an active session since <?php echo $_SESSION['currentTime'] . " " . date_default_timezone_get(); ?>!<span id="time"></span></p>
        <form action="../../index.php" method="post">
            <button class='btn btn-danger' name='cancel' id='cancelButton' value="cancel">Cancel Session</button>
        </form>
    </div>
</div>

<!-- Require Page End -->
<?php require "../../inc/page-end.php"; ?>