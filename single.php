<?php $format = have_posts() && get_post_type() != 'post' ? 'single-'. get_post_type() : ''; ?>
<?php get_template_part('templates/content', $format); ?>