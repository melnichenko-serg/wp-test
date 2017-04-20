<!-- Header -->
<?php get_header(); ?>
<div class="container">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <article class="blog_post">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php if ( get_the_category() ): ?>
                    <div class="blog_category">
                        <ul>
                            <li><?php the_category( ', ' ); ?></li>
                        </ul>
                    </div>
				<?php endif; ?>
                <div class="blog_text">
                    <ul>
                        <li>Post By : <?php the_author_posts_link(); ?></li>
                        <li> On : <?php the_date(); ?></li>
                    </ul>
                </div>
                <div class="blog_post_img">
                    <a href="<?php the_permalink(); ?>"> <img src="images/blog_post_img1.png" alt="image"> </a>
                </div>
                <p><?php the_content() ?></p>

                <a href="<?php the_permalink(); ?>"> Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </article>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<!-- Footer -->
<?php get_footer(); ?>