<?php get_header();
?>
<div id="posts_list">
<?php
while(have_posts()){
the_post();
?>
<div id="post"><h1><a href="<?php the_permalink() ?>" target="_blank"> <?php the_title(); ?> </a> </h1>
<?php the_content() ?></div>

<?php
};
?>
</div>
<?php
get_footer();
?>