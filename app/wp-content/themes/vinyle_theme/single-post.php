<?php

get_header();
?>
</div>
<section class="container-fluid single_post">
<div class="container">
  <div class="row">
    <div class="col-12 article_actu">
    <h1><?php the_title() ?></h1>
<?php
if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
  the_post_thumbnail();
}?>

 <!-- <?php echo(get_the_post_thumbnail()) ?> -->
<p><?php echo(get_the_excerpt()) ?></p>
</div>
</div>
</div>
</section>
<?php
get_footer();

?>