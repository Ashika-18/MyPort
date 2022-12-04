<!DOCTYPE html>
<!-- index.php -->
<html <?php language_attributes() ?>>
<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>
<body>
   <header class="top-pc" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/波打ち際.png);">
       <!-- Navigation-->
       <nav class="nav">
            <?php get_template_part("nav"); ?>
       </nav>
   </header> 
   <article class="about-content">
      <!-- about -->
      <?php get_template_part("header","main"); ?>
   </article>
   <section id="news">
       <h2>News</h2>
    <!-- 投稿文 -->
        <?php get_template_part("page"); ?>
   </section>
   <aside>
       <h3 class="work-h3">Work</h3>
        <div id="work">
            <!-- work -->
            <div class="work-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/design.jpeg);" alt="design">
                    <p>デザイン</p>
            </div>
            <div class="work-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/コーディング.jpeg);" alt="coding">
                    <p>コーディング</p>
            </div>
            <div class="work-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wordpress.jpeg);" alt="WordPress">
            <p>WordPress</p>
            </div>
        </div>
   </aside>
</body>
<footer>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</footer>
</html>