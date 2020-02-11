<?php
get_header();
?>

<div class ="">
    <h1 > votre Profile </h1>
</div>


<div >
    <label for="prenom">login</label>
    <input type="text" name="prenom" value= <?php echo ( $current_user->user_login ) ?>>
</div>

<div >
    <label for="prenom">email</label>
    <input type="text" name="prenom" value= <?php echo ( $current_user->user_email ) ?>>
</div>

<div >
    <label for="prenom">mot de pass </label>
    <input type="text" name="prenom" value= <?php echo ( $current_user->user_pass ) ?>>
</div>

<div >
    <label for="nom">nom</label>
    <input type="text" name="nom" value= <?php echo ( $current_user->user_lastname ) ?> >
</div>

<div >
    <label for="prenom">prenom</label>
    <input type="text" name="prenom" value= <?php echo ( $current_user->user_firstname ) ?>>
</div>

<div >
    <label for="prenom">display_name</label>
    <input type="text" name="prenom" value= <?php echo ( $current_user->display_name) ?>>
</div>




<?php
get_footer();
?>