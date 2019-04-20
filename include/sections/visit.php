<div class="visit">

    <?php


    $visit = 0;
    if (isset($_COOKIE['visit'])) {
        $visit = intval($_COOKIE['visit']);
    }
    $visit++;
    ?>
    <div class="visited">
        <?php
        echo "You have visited our site $visit times!";

        setcookie('visit', $visit, time() + (60 * 60 * 24 * 30));

        ?>
    </div>
</div>
</nav> 