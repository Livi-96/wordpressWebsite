<?php

while(have_posts()){
the_post();
?>
<h1><a href="<?php the_permalink() ?>" target="_blank"> <?php the_title(); ?> </a> </h1>
<?php the_content() ?>

<?php
};
?>