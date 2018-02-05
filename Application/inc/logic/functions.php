<?php
/**
 * Created by Eric Zorn.
 * User: ericzorn
 * Date: 2/4/18
 * Time: 10:33 PM
 */


// Login and Logout Control
function loginControl() {
    if (!isset($_POST['cancel'])) {
        $_POST['cancel'] = "";
    } elseif ($_POST['cancel'] == "cancel") {
        // Deletes all session variables and destroys the session
        session_unset();
        session_destroy();
    } else {
        die("The Cancel Button was not pressed");
    }
}
?>