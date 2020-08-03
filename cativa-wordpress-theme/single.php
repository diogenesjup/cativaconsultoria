<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- CAPA TÍTULO -->
<section class="titulo titulo-interna">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <h1><?php the_title(); ?></h1>
                <p>
                     <a href="#" title="Nome do autor">
                         Nome do Autor
                     </a>
                     <span>|</span>
                     10 de junho de 2020
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
            
                    <!-- POSTAGEM -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 caixa-postagem">
                        <div class="postagem">
                            <!-- FOTO POSTAGEM -->
                            <div class="foto-postagem" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/postagem-1.png') #f2f2f2 no-repeat;background-size:cover;background-position:center center;">
                                <a href="#" class="categoria" title="CATEGORIA">
                                    CATEGORIA
                                </a>
                                <div class="autor" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/perfil.png') transparent no-repeat;background-size:cover;background-position:center center;">
                                    <a href="#" title="Nome do autor">
                                        &nbsp;
                                    </a>
                                </div>
                            </div>
                            <!-- FOTO POSTAGEM -->
                            <h3>
                                Aqui ficará o título do artigo
                                <small>Nome do Autor</small>
                            </h3>
                        </div>
                    </div>
                    <!-- POSTAGEM -->


                    <!-- POSTAGEM -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 caixa-postagem">
                        <div class="postagem">
                            <!-- FOTO POSTAGEM -->
                            <div class="foto-postagem" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/postagem-2.png') #f2f2f2 no-repeat;background-size:cover;background-position:center center;">
                                <a href="#" class="categoria" title="CATEGORIA">
                                    CATEGORIA
                                </a>
                                <div class="autor" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/perfil.png') transparent no-repeat;background-size:cover;background-position:center center;">
                                    <a href="#" title="Nome do autor">
                                        &nbsp;
                                    </a>
                                </div>
                            </div>
                            <!-- FOTO POSTAGEM -->
                            <h3>
                                Aqui ficará o título do artigo, que como exemplo, é maior que os outros.
                                <small>Nome do Autor</small>
                            </h3>
                        </div>
                    </div>
                    <!-- POSTAGEM -->



                    <!-- POSTAGEM -->
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 caixa-postagem">
                        <div class="postagem">
                            <!-- FOTO POSTAGEM -->
                            <div class="foto-postagem" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/postagem-1.png') #f2f2f2 no-repeat;background-size:cover;background-position:center center;">
                                <a href="#" class="categoria" title="CATEGORIA">
                                    CATEGORIA
                                </a>
                                <div class="autor" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/perfil.png') transparent no-repeat;background-size:cover;background-position:center center;">
                                    <a href="#" title="Nome do autor">
                                        &nbsp;
                                    </a>
                                </div>
                            </div>
                            <!-- FOTO POSTAGEM -->
                            <h3>
                                Aqui ficará o título do artigo
                                <small>Nome do Autor</small>
                            </h3>
                        </div>
                    </div>
                    <!-- POSTAGEM -->

        </div>


    </div>
</section>
<!-- ARTIGOS RELACIONADOS -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>