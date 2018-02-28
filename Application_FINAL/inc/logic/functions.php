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



// Upload File Handler
function uploadFileHandler($file) {
    // File Types
    $jpg = "image/jpg";
    $jpeg = "image/jpeg";
    $png = "image/png";
    $gif = "image/gif";

    if ($file['type'] == $jpg || $file['type'] == $jpeg || $file['type'] == $png || $file['type'] == $gif) {
        $target = "uploads/";
        $target = $target . basename($file['name']);

        move_uploaded_file($file['tmp_name'], $target);
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
                    <p style='font-size: 25px;' class='text-center'><b>Please <a href='upload.php' class='alert-link'>Upload</a> an Image!</b></p>
              </div>";
    }
}
?>