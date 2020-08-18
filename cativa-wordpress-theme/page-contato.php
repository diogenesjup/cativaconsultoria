<?php
/*
*
*Template Name: Contato
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- CAPA TÍTULO -->
<section class="titulo titulo-pagina">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- CAPA TÍTULO -->



<!-- WORK -->
<section class="work somos-pagina somos-pagina-contato">

    <div class="container">
        <div class="row">
            
            <!-- COLUNA UM -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-um">
                
                <?php the_content(); ?>

                <h4>
                   <i class="fa fa-whatsapp"></i> <?php the_field("numero_whatsapp_rodape",18); ?>
                </h4>
                <h4 class="email">
                   <i class="fa fa-envelope"></i> <?php the_field("e-mail_rodape",18); ?>
                </h4>

                <p>&nbsp;</p>
                            
                <!-- SOCIAL -->
                <div class="social">
                                
                    <a href="<?php the_field("link_perfil_linkedin",18); ?>" title="Nosso perfil no Linkedin" target="_blank">
	                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.svg" alt="Nosso perfil no linkedin">
	                </a>

	                <a href="<?php the_field("link_perfil_instagram",18); ?>" title="Nosso perfil no instagram" target="_blank">
	                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.svg" alt="Nosso perfil no instagram">
	                </a>

	                <a href="<?php the_field("link_perfil_facebook",18); ?>" title="Nosso perfil no Facebook" target="_blank">
	                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.svg" alt="Nosso perfil no facebook">
	                </a>

	                <a href="<?php the_field("link_perfil_pinterest",18); ?>" title="Nosso perfil no Pinterest" target="_blank">
	                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest.svg" alt="Nosso perfil no pinterest">
	                </a>

                </div>
               <!-- SOCIAL -->

               
            </div>
            <!-- COLUNA UM -->

            <!-- COLUNA DOIS -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-dois imagem-destaque-pagina">


                           <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/enviarmsg.php" onSubmit="return ajaxSubmit(this);">

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Email" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="telefone" class="form-control" required placeholder="Telefone" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="assunto" class="form-control" required placeholder="Assunto" />
                                </div>

                                <div class="form-group">
                                    <textarea rows="5" name="mensagem" class="form-control" placeholder="Digite sua mensagem aqui"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LezyLkZAAAAALCKWMr8UWj419JLKcIherYavFe3"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">ENVIAR MENSAGEM</button>
                                </div>
                                
                            </form>

               
            </div>
            <!-- COLUNA DOIS -->

        </div>
    </div>


</section>
<!-- WORK -->



<!-- ARTIGOS RELACIONADOS -->
<section class="work artigos-relacionados">
    <div class="container">
        
        <div class="row">
            <div class="col-12 titulo text-center">
              <h2>ÚLTIMOS ARTIGOS</h2>
            </div>
        </div>
        
        <!-- LOOP -->
        <div class="row loop">
            
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                        
                        <div class="row">

                        	    <?php 
                         
					                $the_query = new WP_Query( 'post_type=post&showposts=3&posts_per_page=3' );
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

        </div>


    </div>
</section>
<!-- ARTIGOS RELACIONADOS -->



<?php endwhile; endif; ?>  
<?php get_footer(); ?>