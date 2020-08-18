<?php
/*
*
*Template Name: Home Page
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- SUPER BANNER -->
<section class="super-banner">
    
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 conteudo-super-banner wow fadeInLeft" data-wow-delay="0.3s">
                <h1>
                    <small><?php the_field("subtitulo"); ?></small>
                    <?php the_field("titulo"); ?>
                </h1>
                <p><?php the_field("texto_apoio"); ?></p>
                <p>
                    <a href="<?php the_field("link_de_destino_ao_clicar"); ?>" title="<?php the_field("texto_botao_call_to_action"); ?>" class="btn btn-primary">
                        <?php the_field("texto_botao_call_to_action"); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>

      <div class="homepage-hero-module">
        <div class="video-container">
          <div class="filter"></div>
          <video autoplay loop muted playsinline src="<?php the_field("video"); ?>" class="fillWidth"></video>
          <!--<div class="poster hidden">
            <img src="images/banner.png" alt="SOLUÇÕES FINANCEIRAS: SEU FUTURO AINDA NÃO ESTÁ TRAÇADO">
          </div>-->
        </div>
      </div>


</section>
<!-- SUPER BANNER -->


<!-- TRÊS DESTAQUES -->
<section class="tres-destaques">
    <div class="container">
        <div class="row">
             
             <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                 
                 <div class="row">


                 	<?php

                      if( have_rows('tres_destaques_pos_banner') ):
                          $num_banner=3;
                          while ( have_rows('tres_destaques_pos_banner') ) : the_row();

                    ?>
                     
	                     <!-- COLUNA -->
	                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 colunas coluna-um wow fadeInDown" data-wow-delay="0.<?php echo $num_banner; ?>s">
	                         <div class="caixa">
	                             <p>
	                                 <img src="<?php the_sub_field("icone"); ?>" alt="<?php the_sub_field("titulo"); ?>" />
	                             </p>
	                             <h3><?php the_sub_field("titulo"); ?></h3>
	                             <p><?php the_sub_field("texto"); ?></p>
	                         </div>
	                     </div>
	                     <!-- COLUNA-->

                     <?php

                          $num_banner = $num_banner + 3;
                          endwhile;
                     endif;

                    ?>
                    

                 </div>

             </div>

        </div>
    </div>
</section>
<!-- TRÊS DESTAQUES -->




<!-- A CATIVA CONSULTORIA -->
<section class="a-cativa-consultoria">
    
    <div class="container">
        <div class="row">
            
            <!-- COLUNA UM -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 coluna-um wow fadeInLeft" data-wow-delay="0.3s">
                <img src="<?php the_field("imagem_de_destaque_acativa"); ?>" alt="A Cativa Consultoria">
            </div>
            <!-- COLUNA UM -->

            <!-- COLUNA DOIS -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-dois">
                <h2>
                    <?php the_field("titulo_acativa"); ?>
                </h2>
                <p><?php the_field("texto_acativa"); ?></p>
                <p>
                    <a href="<?php echo get_option('home'); ?>/sobre-a-cativa/" title="QUERO SABER MAIS" class="btn btn-primary">
                        QUERO SABER MAIS
                    </a>
                </p>
            </div>
            <!-- COLUNA DOIS -->

        </div>
    </div>

</section>
<!-- A CATIVA CONSULTORIA -->



<!-- ASSESSORIA COMPLETA -->
<section class="assessoria-completa">
    <div class="container">
        <div class="row">
            
            <!-- COLUNA UM -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 col-12 coluna-um">
                <h3>
                  <span class="wow fadeInLeft" data-wow-delay="0.3s">ASSESSORIA</span><br clear="both">
                  <d class="wow fadeInLeft" data-wow-delay="0.6s">FINANCEIRA</d><br clear="both">
                  <span class="wow fadeInLeft" data-wow-delay="0.9s">COMPLETA!</span>
                </h3>
            </div>
            <!-- COLUNA UM -->

            <!-- COLUNA DOIS -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 coluna-dois">
                <?php the_field("texto_assessoria"); ?>
            </div>
            <!-- COLUNA DOIS -->

        </div>
    </div>
</section>
<!-- ASSESSORIA COMPLETA -->





<!-- SAÚDE FINANCEIRA -->
<section class="saude-financeira">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/money-icon.svg" alt="Você sabe como anda sua saúde financeira?" />
                </p>
                <h2>Você sabe como anda sua saúde financeira?</h2>
                <p>Faça o teste agora e receba uma nota de avaliação! </p>
                <p>
                    <a href="<?php the_field("link_de_destino_checkup"); ?>" title="FAZER MEU CHECK-UP" class="btn btn-primary">
                        FAZER MEU CHECK-UP
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- SAÚDE FINANCEIRA -->







<!-- ARTIGOS RELACIONADOS -->
<section class="work artigos-relacionados artigos-na-home">
    <div class="container">
        
        <div class="row">
            <div class="col-12 titulo text-center">
              <h2>ÚLTIMOS ARTIGOS</h2>
            </div>
        </div>
        
        <!-- LOOP DESKTOP-->
        <div class="row loop">

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
        <!-- LOOP DESKTOP -->





        <!-- LOOP MOBILE -->
        <div class="row loop owl-carousel owl-theme" id="loopArtigosHomepage">
            
                    <?php 
                         
		                $the_query = new WP_Query( 'post_type=post&showposts=6&posts_per_page=6' );
		                if ( $the_query->have_posts() ) :
		                while ( $the_query->have_posts() ) : $the_query->the_post();

		                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		                $teste = get_post_primary_category(get_the_ID(), 'category'); 
		                                                        
		            ?>

                    <!-- POSTAGEM -->
                    <div class="item caixa-postagem">
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
        <!-- LOOP MOBILE -->



        <div class="row">
            <!-- VER TODOS -->
            <div class="col-12 text-right ver-todos-posts">
                <a href="<?php echo get_option('home'); ?>/?p=5" title="VER TODOS">
                   VER TODOS <img src="<?php bloginfo('stylesheet_directory'); ?>/images/right.png" alt="Ver todos" />
                </a>
            </div>
            <!-- VER TODOS -->
        </div>


    </div>
</section>
<!-- ARTIGOS RELACIONADOS -->







<!-- PLANEJAMENTO FINANCEIRO -->
<section class="planejamento-financeiro">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 col-12">
                
                <h2>
                    <?php the_field("titulo_planejamento"); ?>
                </h2>
                <p>
                    <?php the_field("texto_planejamento"); ?>
                </p>
                <p>
                    <a href="<?php the_field("link_botao_planejamento"); ?>" title="<?php the_field("texto_botao_planejamento"); ?>" class="btn btn-primary">
                        <?php the_field("texto_botao_planejamento"); ?>
                    </a>
                </p>

            </div>

        </div>
    </div>
</section>
<!-- PLANEJAMENTO FINANCEIRO -->









<!-- DEPOIMENTOS -->
<section class="depoimentos">
    <div class="container">
        
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h2><?php the_field("titulo_depoimentos"); ?></h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 col-12 owl-carousel owl-theme" id="sessaoDepoimentos">


                 <?php

                      if( have_rows('depoimentos') ):
                          $num_banner=0;
                          while ( have_rows('depoimentos') ) : the_row();

                  ?>

		                 <!-- PÁGINA ITEM -->
		                 <div class="item">
		                     <h4>
		                         <?php the_sub_field("texto"); ?>
		                     </h4>
		                     <div class="imagem-perfil" style="background:url('<?php the_sub_field("foto_pessoa"); ?>') #f2f2f2 no-repeat;background-size:cover;background-position:center center;">
		                         <a href="javascript:void(0)" title="Amanda Sousa">
		                             &nbsp;
		                         </a>
		                     </div>
		                     <h5>
		                         <?php the_sub_field("nome_pessoa"); ?>
		                         <small><?php the_sub_field("cargo_pessoa"); ?></small>
		                     </h5>
		                 </div>
		                 <!-- PÁGINA ITEM -->

                 <?php

                          $num_banner++;
                          endwhile;
                     endif;

                 ?>

                 

            </div>
                   
        </div>

        <ul id="carousel-custom-dots" class="owl-dots"> 
        	      <?php

                      if( have_rows('depoimentos') ):
                          $num_banner=0;
                          while ( have_rows('depoimentos') ) : the_row();

                  ?> 
                         <li class="owl-dot">&nbsp;</li>
                  <?php

                          $num_banner++;
                          endwhile;
                     endif;

                 ?>
        </ul> 


    </div>
</section>
<!-- DEPOIMENTOS -->




<?php endwhile; endif; ?>
<?php get_footer(); ?>