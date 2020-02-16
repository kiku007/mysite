<?php get_header(); ?>
<?php if(in_category('web')): ?>
<?php get_template_part('custom', 'web'); ?>
<?php endif; ?>  
<?php if(in_category('photo')): ?>
<?php get_template_part('custom', 'photo'); ?>
<?php endif; ?>
<?php get_footer(); ?>
