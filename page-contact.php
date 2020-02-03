<?php
get_header();

?>

<div class="title-contact">
        <h2><?php echo get_the_title(); ?></h2>
</div>

<div class="contact-block">
    <div class="contact-content">
        <h3>Fill the form if you need more information</h3>
        <form id="form" action="" method="post">
            <input type="text" placeholder="Name *">
            <input type="text" placeholder="Email *">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message *"></textarea>
            <input id="submit" type="submit" value="Send">
        </form>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_img.jpg" alt="Contact">
</div>


<?php
get_footer();
?>