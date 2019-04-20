<div class="products">
    <?php
    include('include/sections/loggedIn.php');
    ?>
    <div class="wrap_products">

        <div>
            <span class="coffee_choose">Please, choose your favorite coffee, tea or hot chocolate!</span><br>
            <?php 
            require_once('include/sections/init.php');
            if (!empty($site_user)) {
                echo '<div class="coffee_choose">Choose a category:</div>';
                ?>
            <form action="?" method="POST">
                <select name="productTy" onchange="this.form.submit()">
                    <option value="none">Choose category</option>
                    <?php 

                    foreach ($queryProductID as $type) {

                        echo '<option value ="' . $type['productTypeID'] . ' " >' . $type['productTypeName'] .  ' </option>';
                    }

                    ?>
                </select>
            </form>

            <?php

            require_once('include/sections/init.php');
            if ($query->rowCount() > 0) {
                echo '<div>';

                foreach ($query as $product) {

                    echo '<div class="product_title">' . $product['Product'] . '</div><br>';

                    echo '<div>' . $product['Description'] . '</div><br>';

                    echo  ' <img src="img/' . $product['image'] . '"   />';

                    echo   '<br>';
                    echo "<hr>";
                }
                echo '</div>';
            }
        } else {
            echo "<div>You must be logged in to browse our products</div>";
            include('include/pages/login.php');
        }
        ?>
        </div>
    </div>
</div> 