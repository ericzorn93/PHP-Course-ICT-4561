<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 2/4/18
 * Time: 9:20 AM
 */
?>

<link rel="stylesheet" href="../../css/app.css">

<div class="container">

    <form action="inc/login/login-succesful.php" method="post">
        <h1 class="text-success">Welcome, Please Login</h1>

        <br>

        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" name="fname" placeholder="Please Enter Your First Name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lname" placeholder="Please Enter Your Last Name" required>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
