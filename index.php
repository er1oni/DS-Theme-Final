section class="home-blog">
                        <div class="container">
                            <div class="blog-items">
                                <?php
                                if( have_posts() ):
                                    while( have_posts() ): the_post();
                                        ?>
                                            <article>
                                                <h2><?php the_title(); ?></h2>
                                                <div class="meta-info">
                                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link();?></p>
                                                    <p>Catgeries: <?php the_category(); ?> </p>
                                                    <p> <?php the_tags(); ?></p>
                                                </div>
                                                <?php the_content(); ?>
                                            </article>
                                        <?php
                                    endwhile;
                                else: ?>
                                    <p>Nothing to be displayed!</p>          
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>