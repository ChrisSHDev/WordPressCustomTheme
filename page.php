<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <?php if(have_posts()) : ?>
        <?php  while(have_posts()) : the_post(); ?>
            <article class="page">
            <nav class="nav sub-nav">
            <ul>
                <span class="parent-link">
                    <a href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php echo get_the_title(get_top_parent()); ?></a>
                </span>
                <?php 
                    $args = array(
                        'child_of' => get_top_parent(),
                        'title_li' => ''
                    );
                ?>
                <?php wp_list_pages($args); ?>
                
            </ul>
            </nav>
                <h2><?php the_title(); ?></h2>
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