<?php
/*
*
*Template Name: Home Page
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
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" placeholder="Buscar artigo" required />
                        <i class="fa fa-search"></i>
                    </div>
                </form>
            </div>
            <!-- PESQUISA -->
            <!-- CATEGORIAS -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 categorias">
                
                <a href="#" class="categoria categoria-ativa" title="TODOS">
                    TODOS
                </a>

                <a href="#" class="categoria" title="NOME DA CATEGORIA">
                    NOME DA CATEGORIA
                </a>

                <a href="#" class="categoria" title="NOME DA CATEGORIA">
                    NOME DA CATEGORIA
                </a>

                <a href="#" class="categoria" title="NOME DA CATEGORIA">
                    NOME DA CATEGORIA
                </a>

                <div class="form-group">
                    <select class="form-control" id="categoriasMobile">
                       <option value="">Filtrar por categoria</option>
                       <option value="NOME DA CATEGORIA">NOME DA CATEGORIA</option>
                       <option value="NOME DA CATEGORIA">NOME DA CATEGORIA</option>
                       <option value="NOME DA CATEGORIA">NOME DA CATEGORIA</option>
                       <option value="NOME DA CATEGORIA">NOME DA CATEGORIA</option>
                    </select>
                </div>

            </div>
            <!-- CATEGORIAS -->
        </div>
        <!-- FILTRO -->


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