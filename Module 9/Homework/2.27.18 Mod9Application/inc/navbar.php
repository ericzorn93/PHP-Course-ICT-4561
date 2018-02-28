<?php
/**
 * Created by PhpStorm.
 * User: ericzorn
 * Date: 2/4/18
 * Time: 9:18 AM
 */

if (isset($_POST['logoutButton'])) {
    session_destroy();
}

?>

<!-- As a heading -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">ICT 4561 - Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active" id="loginNav">
                <a class="nav-link" href="http://localhost:8888/ICT%204561%20Web%20Development%20with%20PHP/Application/" id="loginNavLink">Login</a>
            </li>
            <li class="nav-item" id="uploadNav">
                <a class="nav-link" href="http://localhost:8888/ICT%204561%20Web%20Development%20with%20PHP/Application/upload.php" id="uploadNavLink">Upload</a>
            </li>
            <li class="nav-item" id="viewNav">
                <a class="nav-link" href="http://localhost:8888/ICT%204561%20Web%20Development%20with%20PHP/Application/view.php" id="viewNavLink">View</a>
            </li>
            <li class="nav-item" id="logoutNav" name="logoutButton">
                <a class="nav-link" href="http://localhost:8888/ICT%204561%20Web%20Development%20with%20PHP/Application/" id="logoutNavLink"><button class="btn btn-danger" style="font-size: 12px;">Logout</button></a>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript" src="js/navbar.js"></script>