<?php
/**
 * default content output
 * page
 * single
 * attachment
 *
 * @package incredible-code-test
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php if ('post' == get_post_type() || $article_title != get_the_title()) : ?>
        <header class="article-header">
            
            <?php
            if ('post' == get_post_type()) {
                echo $article_title;
                get_template_part('nav', 'article-meta');
            }
            ?>
        </header>
    <?php endif; ?>

    <?php the_content(); ?>

</article>