<?php  
/*
        Template Name: Company Layout
*/
?>


<?php get_header(); ?>

<div class="container content">
    <div class="main block">
        <?php if(have_posts()) : ?>
        <?php  while(have_posts()) : the_post(); ?>
            <article class="page">
                <h2><?php the_title(); ?></h2>
                <p class="phone">1-800-000-0000</p>
                <?php the_content(); ?>
            </article>
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