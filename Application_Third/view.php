<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 2/18/18
 * Time: 1:45 PM
 * 
 * Page will automatically refresh after 8 seconds.
 */

//header("Cache-Control: no-cache, must-revalidate");

header( 'refresh: 8; url= view.php' );

// Functions
include "inc/logic/functions.php";

include "inc/page-begin.php";
include "inc/navbar.php";


// OutPut of Files
$upload_file = $_FILES['upload_file'];


// Database
$host = "localhost";
$username = "root";
$password = "root";
$db_name = "myimages";

$db_connect = mysqli_connect($host, $username, $password, $db_name);



$query = "SELECT * FROM imagedata";
$result = mysqli_query($db_connect, $query);


?>


<?php

if ($db_connect) {
    $upload_file_complete = $upload_file['tmp_name'];
    $file_path_info = pathinfo($upload_file_complete);
    $base_file_name = $upload_file['name'];
    $directory_file_name = $file_path_info['dirname'];

    $sql = "INSERT INTO imagedata (path, title) VALUES ('{$directory_file_name}', '{$base_file_name}')";
    //$sql_delete = "DELETE FROM imagedata WHERE path = '{$directory_file_name}' AND title = {$base_file_name}";


    // Upload Database information
    if (empty($upload_file)) {
        echo "<h3>You Need to Upload a File</h3>";
        // echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
    } else {
        mysqli_query($db_connect, $sql);
        echo "Records inserted successfully.";
    }
}


?>

<br>

<div class="container">
    <?php
    // Call to File Handler
    uploadFileHandler($upload_file);

    //Get a list of file paths using the glob function.
    $fileList = glob('uploads/*');

    while($image = mysqli_fetch_assoc($result)) {
       // print_r($image);
        echo "
        <br>
        <hr style='height: 2px; background-color: forestgreen; border-radius: 50%;'>
        <form method='post' action='view.php'>
            <button type='submit' class='btn btn-danger my-btn' name='delete_photo'>DELETE PHOTO</button>
        </form>
        <h2>{$image['title']}</h2>
        <div class='img-wrap'>
           <img src='uploads/{$image['title']}' class='img-thumbnail img-fluid' alt='{$image['title']}' id='{$image['id']}'>
        </div>
        ";


        if (isset($_POST['delete_photo'])) {
            $sql_delete_second = "DELETE FROM `imagedata` WHERE `imagedata`.`id` = '{$image['id']}'";
            if ($db_connect->query($sql_delete_second) === TRUE) {
                echo "Record deleted successfully";
                header('Location: view.php');
            } else {
                echo "Error deleting record: " . $db_connect->error;
            }
        }
    }
    ?>
</div>



<!-- Changing Classes on Navbar for Active with JS -->
<script type="text/javascript" src="js/view.js"></script>

    <script type="text/javascript">
        document.onload = function (ev) {
            window.location.reload();
        }
    </script>


<?php include "inc/page-end.php"; ?>
