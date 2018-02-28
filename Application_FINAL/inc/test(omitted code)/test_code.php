<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 2/26/18
 * Time: 4:23 PM
 */


// Loop Through and Export Images to the View
foreach ($fileList as $file) {
    $file_names_no_ext = explode('/', $file);



    while($image = mysqli_fetch_assoc($result)) {
        echo "
                <div class='row'>
                    <form method='post'>
                        <br>
                        <button type='submit' class='btn btn-danger img-delete-btn' name='deleteButton'>DELETE</button>
                    </form>
                   <img src='uploads/{$image['title']}' alt='uploads/{$image['title']}' class='img-fluid img'>
               </div>";

        // print_r($image);
    }

    echo "<div class='row'>
            <b>{$file_names_no_ext[1]}</b>
            <form action='view.php' method='post'>
                <br>
                <button type='submit' class='btn btn-danger img-delete-btn' name='deleteButton'>DELETE</button>
            </form>
            <img src='$file' alt='$file' class='img-fluid img-thumbnail'>
            <br>
        </div>";
}

?>