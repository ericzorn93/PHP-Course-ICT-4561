<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 2/18/18
 * Time: 1:45 PM
 */

// Functions
include "inc/logic/functions.php";

include "inc/page-begin.php";
include "inc/navbar.php";


// OutPut of Files
$upload_file = $_FILES['upload_file'];
?>


<br>

<div class="container">
    <?php
    // Call to File Handler
    uploadFileHandler($upload_file);

    //Get a list of file paths using the glob function.
    $fileList = glob('uploads/*');

    // Loop Through and Export Images to the View
    foreach ($fileList as $file) {
        $file_names_no_ext = explode('/', $file);

         echo
        "<div class='row'>
            <b>{$file_names_no_ext[1]}</b>
            <img src='$file' alt='$file' class='img-fluid img-thumbnail'>
            <br>
        </div>";
    }
    ?>
</div>


<!-- Changing Classes on Navbar for Active with JS -->
<script type="text/javascript" src="js/view.js"></script>




<?php include "inc/page-end.php"; ?>