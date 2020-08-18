<?php
/*
*
*Template Name: Call to Action
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<!-- CAPA TÍTULO -->
<section class="titulo titulo-pagina">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- CAPA TÍTULO -->



<!-- WORK -->
<section class="work somos-pagina">

    <div class="container">
        <div class="row">
            

            <?php if(get_field("imagem_de_destaque")): ?>
            <!-- COLUNA UM -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-um">
            <?php else: ?>
            <!-- COLUNA UM -->
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-um">
            <?php endif; ?>

                <?php the_content(); ?>

                <p>
                  <a href="<?php the_field("link_de_destino_ao_clicar"); ?>" class="btn btn-primary" title="<?php the_field("texto_botao"); ?>">
                     <?php the_field("texto_botao"); ?>
                  </a>
                </p>

            </div>
            <!-- COLUNA UM -->
            
            <?php if(get_field("imagem_de_destaque")): ?>
            <!-- COLUNA DOIS -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 coluna-dois imagem-destaque-pagina">
               
               <?php if(get_field("imagem_de_destaque")): ?>
                    <img src="<?php the_field("imagem_de_destaque"); ?>" alt="<?php the_title(); ?>" />
               <?php endif; ?>
               
               <?php if(get_field("imagem_de_apoio")): ?>
                   <p>
                     <img src="<?php the_field("imagem_de_apoio"); ?>" alt="<?php the_title(); ?>" />
                   </p>
               <?php endif; ?>

            </div>
            <!-- COLUNA DOIS -->
            <?php endif; ?>

        </div>
    </div>


</section>
<!-- WORK -->



<p>&nbsp;</p>


<?php endwhile; endif; ?>  
<?php get_footer(); ?>