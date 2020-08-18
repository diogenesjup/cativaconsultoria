<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- CAPA TÍTULO -->
<section class="titulo titulo-interna">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <h1><?php the_title(); ?></h1>
                <p>
                     <?php 
                                    
                                    $url = get_author_posts_url(get_the_author_meta('ID'));
                                    $fname = get_the_author_meta('first_name');
                                    $lname = get_the_author_meta('last_name');
                                    $full_name = '';

                                    if( empty($fname)){
                                            $full_name = $lname;
                                    } elseif( empty( $lname )){
                                            $full_name = $fname;
                                    } else {
                                            //both first name and last name are present
                                            $full_name = "{$fname} {$lname}";
                                    }
                                            
                                ?>
                                <a href="<?php echo $url; ?>" title="<?php echo $full_name; ?>">
                                    &nbsp;
                                </a>
                     <span>|</span>
                     <?php the_time("d/m/Y"); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- CAPA TÍTULO -->



<!-- WORK -->
<section class="work">

    <div class="container">
        
        <div class="row conteudo">
            
            <!-- CONTENT -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12">
                
                 <!-- ACESSIBILIDADE -->
                 <div class="acessibilidade">
                    <a href="javascript:void(0)" title="Diminuir tamanho da fonte" onclick="diminuirFonte();">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/menos.png" alt="Diminuir tamanho da fonte">
                    </a>
                    <a href="javascript:void(0)" title="Aumentar tamanho da fonte"  onclick="aumentarFonte();">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mais.png" alt="Aumentar tamanho da fonte">
                    </a>
                 </div>
                 <!-- ACESSIBILIDADE -->

                 <article>
                     
                     <?php the_content(); ?>
                     <?php comments_template(); ?>

                 </article>


            </div>
            <!-- CONTENT -->

            <!-- SIDEBAR -->
            <?php get_sidebar(); ?>
            <!-- SIDEBAR -->

        </div>

    </div>
    
</section>
<!-- WORK -->


<!-- ARTIGOS RELACIONADOS -->
<section class="work artigos-relacionados">
    <div class="container">
        
        <div class="row">
            <div class="col-12 titulo text-center">
              <h2>ARTIGOS RELACIONADOS</h2>
            </div>
        </div>
        
        <!-- LOOP -->
        <div class="row loop">
                <?php 
                         
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $the_query = new WP_Query( 'post_type=post&showposts=30&posts_per_page=30&paged='.$paged );
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $teste = get_post_primary_category(get_the_ID(), 'category'); 
                                                        
            ?>
                <!-- POSTAGEM -->
	            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 caixa-postagem">
	                <div class="postagem">
	                    <!-- FOTO POSTAGEM -->
	                    <div class="foto-postagem" style="background:url('<?php echo $image[0]; ?>') #f2f2f2 no-repeat;background-size:cover;background-position:center center;">
	                        <a href="<?php echo get_category_link( $teste["primary_category"]->term_id ); ?>" class="categoria" title="<?php echo $teste["primary_category"]->name; ?>">
	                            <?php echo $teste["primary_category"]->name; ?>
	                        </a>
	                        <?php 
										
							   $get_author_id = get_the_author_meta('ID');
							   $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));

						    ?>
	                        <div class="autor" style="background:url('<?php echo get_field('foto_de_perfil', 'user_'. get_the_author_meta('ID')); ?>') transparent no-repeat;background-size:cover;background-position:center center;">
	                        	<?php 
									
									$url = get_author_posts_url(get_the_author_meta('ID'));
									$fname = get_the_author_meta('first_name');
									$lname = get_the_author_meta('last_name');
									$full_name = '';

									if( empty($fname)){
											$full_name = $lname;
									} elseif( empty( $lname )){
											$full_name = $fname;
									} else {
											//both first name and last name are present
											$full_name = "{$fname} {$lname}";
									}
											
								?>
	                            <a href="<?php echo $url; ?>" title="<?php echo $full_name; ?>">
	                                &nbsp;
	                            </a>
	                        </div>
	                    </div>
	                    <!-- FOTO POSTAGEM -->
	                    <h3>
	                         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                         	<?php the_title(); ?>
	                         </a>
	                        <small><?php echo $full_name; ?></small>
	                    </h3>
	                </div>
	            </div>
	            <!-- POSTAGEM -->
                <?php 
                                                          
                endwhile;
                wp_reset_postdata();
                endif;

            ?>


                   

        </div>


    </div>
</section>
<!-- ARTIGOS RELACIONADOS -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>