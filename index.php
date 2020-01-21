<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <?php if(have_posts()) : ?>
        <?php  while(have_posts()) : the_post(); ?>
            <?php   get_template_part('content', get_post_format())?>
        <?php  endwhile ?>
        <?php else : ?>
        <?php echo apauto('Sorry, No Posts') ?>
        <?php endif ?>
    </div>
    <div class="side">
        <div class="block">
            <h3>Sidebar Head</h3>
            <p>1914 translation by H. Rackham orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</p>
            <a href="#" class="button">More</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>