<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 sidebar">
                <p>
                    <a href="<?php the_field("banner_link_provisorio_sidebar",18); ?>" title="Planejamento Financeiro">
                        <img src="<?php the_field("banner_provisorio_sidebar",18); ?>" alt="Planejamento Financeiro" />
                    </a>
                </p>

                <!-- ÚLTIMOS ARTIGOS -->
                <div class="ultimos-artigos">
                    <h4 class="header">ÚLTIMOS ARTIGOS</h4>
                    
                    <nav>
                        <ul>

                            <?php 
                         
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $the_query = new WP_Query( 'post_type=post&showposts=5&posts_per_page=5&paged='.$paged );
                                if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post();

                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                                $teste = get_post_primary_category(get_the_ID(), 'category'); 
                                                                        
                            ?>

                                <!-- POSTAGEM -->
                                <li>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="capa-postagem" style="background:url('<?php echo $image[0]; ?>') #f2f2f2 no-repeat;background-position:center;background-size:cover;">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    &nbsp;
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h3>
                                                <small><?php echo $teste["primary_category"]->name; ?></small>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                  <?php the_title(); ?>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </li>
                                <!-- POSTAGEM -->

                            <?php 
                                                          
                                endwhile;
                                wp_reset_postdata();
                                endif;

                            ?>
                           

                        </ul>
                    </nav>

                    <h4 class="footer">
                        <a href="<?php echo get_option('home'); ?>/" title="VER MAIS">
                            VER MAIS
                        </a>
                    </h4>
                </div>
                <!-- ÚLTIMOS ARTIGOS -->
            
            </div>