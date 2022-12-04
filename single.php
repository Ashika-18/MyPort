<!DOCTYPE html>
<!-- single.php -->
<html <?php language_attributes() ?>>
    <head>
       <?php get_header(); ?>
       <?php wp_head(); ?> 
    </head>
    <body <?php body_class() ?>>
        <?php wp_body_open() ?>
        <!-- ここからif処理 -->
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <!-- Page Header-->
                <?php get_template_part("includes/header", "single"); ?>
                    <!-- Post Content-->
                    <article>
                        <div class="post-cnt">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                                <hr class="content-bottom">
                                <?php 
                                if (comments_open() || get_comments_number()) {
                                comments_template();
                                }
                                ?>
                        </div>
                    </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </body>
    <footer>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
    </footer>
</html>