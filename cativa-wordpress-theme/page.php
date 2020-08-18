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
            </div>
            <!-- COLUNA UM -->
            
            <?php if(get_field("imagem_de_destaque")): ?>
            <!-- COLUNA DOIS -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 coluna-dois imagem-destaque-pagina">
               <?php if(get_field("imagem_de_destaque")): ?>
                  <img src="<?php the_field("imagem_de_destaque"); ?>" alt="<?php the_title(); ?>" />
               <?php endif; ?>
            </div>
            <!-- COLUNA DOIS -->
            <?php endif; ?>

        </div>
    </div>


</section>
<!-- WORK -->


<?php if(is_page("95")): ?>

<!-- A CATIVA CONSULTORIA -->
<section class="a-cativa-consultoria a-cativa-consultoria-mobile" style="padding-top: 10px;height: 472px;margin-bottom: 130px;margin-top: 60px;">
    
    <div class="container">
        
        <div class="row">            
        
            <!-- COLUNA UM -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 offset-xl-3 offset-lg-3 offset-md-3 offset-sm-3 col-12 coluna-dois text-center">
                <h2>
                    <?php the_field("titulo_bloco_especial"); ?>
                </h2>
                <div style="color:#fff !important">
                    <?php the_field("conteudo_bloco_especial"); ?>
                </div>
            </div>
            <!-- COLUNA UM -->

        </div>
        

        <div class="row">
             
             <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                 
                 <div class="row">
                     
                     <!-- COLUNA UM -->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 colunas wow fadeInDown" data-wow-delay="0.3s">
                         <div class="caixa">
                             <h3>Missão</h3>
                             <?php the_field("texto_missao"); ?>
                         </div>
                     </div>
                     <!-- COLUNA UM -->

                     <!-- COLUNA DOIS -->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 colunas wow fadeInDown" data-wow-delay="0.6s">
                         <div class="caixa">
                             <h3>Visão</h3>
                             <?php the_field("texto_visao"); ?>
                         </div>
                     </div>
                     <!-- COLUNA DOIS -->

                     <!-- COLUNA TRES -->
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 colunas wow fadeInDown" data-wow-delay="0.9s">
                         <div class="caixa">
                             <h3>Valores</h3>
                             <?php the_field("texto_valores"); ?>
                         </div>
                     </div>
                     <!-- COLUNA TRES -->

                 </div>

             </div>

        </div>


    </div>

</section>
<!-- A CATIVA CONSULTORIA -->
<?php endif; ?>



<?php endwhile; endif; ?>  
<?php get_footer(); ?>