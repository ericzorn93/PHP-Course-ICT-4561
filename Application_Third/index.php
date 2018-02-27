<?php
/**
 * Index Page.
 * User: ericzorn
 * Date: 1/28/18
 * Time: 12:38 PM
 */

// Start Session
session_start();

// Send Function Logic
require_once "inc/logic/functions.php";

// Destroy Session if Cancel has been Clicked from Logged In page
loginControl();


// Importing Page Opening/Beginning
require("inc/page-begin.php");

?>


<!-- Navbar -->
<?php include "inc/navbar.php"; ?>

<br/>


<!-- Login Form -->
<?php include "inc/login/login.php"; ?>


<?php
// Importing Page Closing/Ending
require("inc/page-end.php");
?>