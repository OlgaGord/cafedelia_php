<?php

require_once('include/classes/NavMenu.php');
require_once('include/classes/User.php');

require_once('include/sections/init.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coffeedelia <?php echo $page_data['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>

<body>

    <header>
        <?php
        include('include/sections/header.php');
        include('include/sections/menu.php');

        // echo '<h2>' . $page_data['title'] . '</h2>';
        // echo '<div id="page">' . $page_data['content'] . '</div>';
        ?>
        <div class="wrapper ">
            <?php

            $fp = 'include/pages/' . $page_data['filename'];
            if (file_exists($fp)) {
              include($fp);
            }


            include('include/sections/footer.php');
            ?> 