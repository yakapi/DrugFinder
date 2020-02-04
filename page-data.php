<?php
get_header();
// echo home_url('/produit')
?>


<div class="page-data">
    <div class="search-title">
        <h2>Find your product</h2>
    </div>

    <form action="" method="post" id="search-form">
        <input type="text" id="recherche" name="recherche">
        <input type="hidden" name="url" id="hidden_url" value="<?php echo get_site_url() ?>">
        <input type="submit" value=" Search product" id="submit-btn">

    </form>
    <div id="screen-block">    
        <div id="product-screen">
        
        </div>
    </div>


    <?php

    get_footer();


    ?>

</div>