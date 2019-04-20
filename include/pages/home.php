<div class="wrap_products">
    <span class="coffee_choose">Browse all our products!</span>
    <?php

    require_once('include/sections/init.php');

    if (!empty($queryId)) {
      if ($queryId->rowCount() > 0) {
        echo '<div>';

        foreach ($queryId as $prodCat) {

          echo '<div class="product_title">' . $prodCat['Product'] . '</div><br>';

          echo '<div>' . $prodCat['Description'] . '</div><br>';

          echo  ' <img src="img/' . $prodCat['image'] . '"   />';

          echo   '<br>';
          echo "<hr>";
        }
        echo '</div>';
        echo '<p><a href="?p=products">Browse all products</a></p>';
      }
    } else {
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
    }





    ?>
</div> 