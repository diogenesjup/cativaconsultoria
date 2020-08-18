<?php
/*
*
*Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CAPA TÍTULO -->
<section class="titulo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- CAPA TÍTULO -->

<!-- WORK -->
<section class="work">

    <div class="container">
        
        <!-- FILTRO -->
        <div class="row">
            <!-- PESQUISA -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 pesquisa">
                <form method="post" action="<?php echo get_option('home'); ?>/">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" placeholder="Buscar artigo" required />
                        <i class="fa fa-search"></i>
                    </div>
                </form>
            </div>
            <!-- PESQUISA -->
            <!-- CATEGORIAS -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 categorias">
                
                <a href="<?php echo get_option('home'); ?>/" class="categoria categoria-ativa" title="TODOS">
                    TODOS
                </a>
                
                <?php 
                 $link_home = get_option('home');
                 $term = get_queried_object();
                 $args = array(
                 'orderby' => 'name',
                 'hide_empty'=> 0
                );
                $categories = get_categories($args);
                foreach ($categories as $cat) {

                   if($cat->name!="Sem categoria"):
                ?>

	                <a href="<?php echo $link_home; ?>/categorias/<?php echo $cat->slug; ?>" class="categoria" title="<?php echo $cat->name; ?>">
	                    <?php echo $cat->name; ?>
	                </a>

                <?php 

                   endif;
                  }

                ?>

                <div class="form-group">
                    <select class="form-control" id="categoriasMobile" onchange="location.href=$(this).val();">
                       <option value="<?php echo get_option('home'); ?>/">Filtrar por categoria</option>
                       <?php 
		                 $link_home = get_option('home');
		                 $args = array(
		                 'orderby' => 'name',
		                 'hide_empty'=> 0
		                );
		                $categories = get_categories($args);
		                foreach ($categories as $cat) {

		                   if($cat->name!="Sem categoria"):
		                ?>
                       <option value="<?php echo $link_home; ?>/categorias/<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></option>
                       <?php 

		                   endif;
		                  }

		                ?>
                    </select>
                </div>

            </div>
            <!-- CATEGORIAS -->
        </div>
        <!-- FILTRO -->


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
        <!-- LOOP -->

        <!-- PÁGINAÇÃO -->
        <div class="row paginacao" style="display:none !important;">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 col-paginacao col-left">
                <a href="#" title="Página anterior">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left.png" alt="Página anterior" />
                </a>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 text-center">
                <nav>
                    <ul>
                        <li class="current">
                            1
                        </li>
                        <li>
                            <a href="#" title="Ir para essa página">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Ir para essa página">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Ir para essa página">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Ir para essa página">
                                5
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 col-paginacao col-right">
                <a href="#" title="Página anterior">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/right.png" alt="Próxima página" />
                </a>
            </div>
        </div>
        <!-- PÁGINAÇÃO -->

    </div>
    
</section>
<!-- WORK -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>