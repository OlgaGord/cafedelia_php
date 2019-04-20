<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<div class="products">

    <div class="login">

        <?php
        if (!empty($site_user)) {
            include('include/sections/loggedIn.php');
            // include('include/sections/visit.php');

            echo '<a class="logout" href="?p=products">Browse our menu or you can logout</a>';

            echo '<div class="logout_div inset outset">';

            echo '<a class="logout" href="?p=' . $page . '&logout">Logout</a>';

            echo '</div>';
        } else {
            ?>
        <div>
            <span class="coffee_choose">
                Please, enter your login and password:</span> </div>
        <form class="form_login form-group" method="post" action="?p=<?php echo $page ?>">
            <input type="hidden" name="login" />
            <label class="form-check-label" for="username">User Name</label>

            <input class="form-control" type="text" name="username" />

            <label class="form-check-label" for="password">Password</label>

            <input class="form-control" type="password" name="pass" />
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php

    }
    ?>
    </div>
</div> 