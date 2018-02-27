<?php
include 'inc/page-begin.php';
include 'inc/navbar.php';

// Upload URL
$upload_url = 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$submit_button = $_POST['submit'];
$upload_file = $_POST['upload_file'];

?>

<br>
<div class="container">
    <form action="view.php" method="post" enctype="multipart/form-data" id="uploadForm">
        <div class="form-group">
            <h1 id="uploadTitle">You can upload any files here</h1>
            <label for="exampleFormControlFile1">Please Upload File Here</label>
            <input type="file" class="form-control-file" id="upload_file" name="upload_file" required>
            <b id="warning" class="text-danger"></b>
        </div>
        <button class="btn btn-success" name="submit" id="submitButton">Submit</button>
    </form>
    <b id="errorOutput" class="text-danger"></b>
</div>



<!-- Changing Classes on Navbar for Active with JS and Form Handling -->
<script type="text/javascript" src="js/upload.js"></script>

<?php include "inc/page-end.php"; ?>
