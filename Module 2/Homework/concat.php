<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 1/7/18
 * Time: 10:51 AM
 * Description: I used PHP to take user input with the post method and then was able to build an HTML output.
 * The output displayed labels with the PHP variables that utilized the superglobal $_POST. The two different inputs
 * were for the user's name and the user's message that is posted. I also used a small built in PHP function and simple  * logic to verify the input values were both set with the isset() function and a general if statement. I also have 
 * echoed out a simple horizontal rule (<hr>) underneath the form.
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eric Zorn ICT 4561 - Module 2 FORMS HW</title>
    <!-- Bootstrap CDN Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<style>
    body {
        background-color: lightgrey;
    }

    #title {
        margin-top: 40px;
    }
</style>
</head>
<body>


<!-- Form -->
<div class="container">
    <h1 id="title">Eric Zorn ICT 4561 - Module 2 Forms with PHP</h1>
    <form action="concat.php" method="post">
        <div class="form-group">
            <label for="name">Please Enter Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name Here" name="name" required>
        </div>
        <div class="form-group">
            <label for="message">Please Enter Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Enter Mesage Here" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
    <?php
        // Variable Declarations
        $name = $_POST["name"];
        $message = $_POST["message"];

        if(isset($name) && isset($message)) {
            echo "<hr/>";
            echo "<h2>Your name is: " . "<b style='color: indianred;'>" . $name . "</b>" . "</h2>";
            echo "<h2>$name's Message: " . "<b style='color: indianred;'>" . $message . "</b>" . "</h2>";
        }
    ?>
</div>
<!-- End of Form -->

<!-- Bootstrap CDN Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
