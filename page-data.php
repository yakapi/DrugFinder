<?php
get_header();
?>

<?php 
            global $wpdb;
            $resultats = $wpdb->get_results("SELECT name, code_cis FROM name_product WHERE name LIKE 'A%'") ;

        ?>
<div class="search-title">
    <h2>Find your product</h2>
</div>

<form action="" method="post" id="search-form">
    <input type="text" id="recherche">
    <input type="hidden" name="url" id="hidden_url" value="<?php echo get_site_url() ?>">
    <input type="submit" value=" Search product" id="submit-btn">

</form>




<?php

get_footer();


?>