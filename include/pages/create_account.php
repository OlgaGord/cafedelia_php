<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<div class="products">

    <div class="login">
        <div>
            <?php
            include('include/sections/loggedIn.php');
            ?>
            <span class="coffee_choose">
                Please, enter your login and password:
            </span>
        </div>

        <?php

        if (
            isset($_POST['create']) &&
            isset($_POST['username']) &&
            isset($_POST['pass'])
        ) {

            $result = User::create($_POST['username'], $_POST['pass']);

            echo '<div class="message">' . $result['message'] . '</div>';
        } else {
            ?>
        <form class="form_login form-group" method="post" action="?p=<?php echo $page ?>">
            <input type="hidden" name="create" />

            <label class="form-check-label" for="username">User Name</label>

            <input class="form-control" type="text" name="username" />

            <label class="form-check-label" for="password">Password</label>

            <input class="form-control" type="password" name="pass" />
            <br>
            <button type="submit" class="btn btn-primary">Create account</button>
        </form>
        <?php

    }
    ?>

    </div>
</div> 