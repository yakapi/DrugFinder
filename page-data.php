<?php
get_header();
// echo home_url('/produit')
?>


<div class="page-data">


    <form action="" method="post" id="search-form">
        <input type="text" id="recherche" name="recherche">
        <input type="hidden" name="url" id="hidden_url" value="<?php echo get_site_url() ?>">
        <input type="submit" value=" Search product" id="submit-btn">

    </form>
    <div id="screen-block">
        <div id="image-screen-block">
            <div id="image-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drugs_blue.jpg" alt="">
            </div>

        </div>
        <div id="loader" class="loader dis-none">
            <img id="loader-img" class="loader-img" src="https://video-public.canva.com/VADsKqRBo3w/v/3034cdf9ff.gif">
        </div> 
        <div id="product-screen-block" class="dis-none">
            <div id="product-screen">
                    
            </div>
        </div>   
    </div>

</div>

    <?php

    get_footer();


    ?>
