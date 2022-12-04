<!-- page.php -->

    <?php if(have_posts()): ?>
        <?php while (have_posts()): ?>
            <?php the_post(); ?>
        <!-- Post preview-->
        <div class="post-preview">
            <a href="<?php the_permalink(); ?>"> 
                <h2 class="top_post_title">
                    <?php
                    if (mb_strlen( $title = get_the_title() ) > 10) {
                    $title = mb_substr($title, 0, 10);
                    echo $title . '...';
                    } else {
                    echo $title;
                    }
                    ?>
                </h2>
                <h3 class="top_post_sub"><?php the_excerpt(); ?></h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>
                on <?php the_time('Y年n月j日 g:i a'); ?>
            </p>
            <hr class="post-bottom">
        </div>
        <!-- Divider-->
    <?php endwhile; ?>
    <?php else: ?>
        <p>投稿はありません。</p>
<?php endif; ?>
<!-- Pager -->
<div class="post_link">
    <?php
        $linkElm = get_previous_posts_link('新しい投稿');
        if ($linkElm) {
            $linkElm = str_replace('<a', '<a class="btn btn-primary float-left"', $linkElm);
            echo '<div class="d-flex justify-content-between mb-4">';
            echo $linkElm;
        } else {
            echo '<div class="d-flex justify-content-end mb-4">';
        }

        $linkElm = get_next_posts_link('古い投稿');
        if ($linkElm) {
            $linkElm = str_replace('<a', '<a class="btn btn-primary float-right"', $linkElm);
            echo $linkElm;
        }
        echo "</div>";
    ?>      
</div>