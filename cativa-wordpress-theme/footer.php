<?php if(!is_page("contato")): ?>

<!-- NEWSLETTER -->
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                
                <div class="row">
                    
                        <!-- COLUNA UM -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 coluna-um">
                            <h3>Cadastre seu email<br>para receber novidades!</h3>
                        </div>
                        <!-- COLUNA UM -->

                        <!-- COLUNA DOIS -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 coluna-dois">
                            
                            <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/newsletter.php" class="form-inline" onSubmit="return ajaxSubmit(this);">

                                  <div class="form-group">
                                      <input type="email" required name="email" class="form-control" placeholder="E-mail" />
                                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/newsletter.svg" />
                                  </div>

                                  <button type="submit" class="btn btn-default">CADASTRAR</button>

                            </form>

                        </div>
                        <!-- COLUNA DOIS -->

                </div>

            </div>
        </div>
    </div>
</section>
<!-- NEWSLETTER -->

<!-- FOOTER -->
<footer>
    
    <div class="container">
        
        <!-- TITULO RODAPÉ -->
        <div class="row">
            <div class="col-12 titulo-rodape text-center wow fadeInDown" data-wow-delay="0.2s">
                <h2>VAMOS CONVERSAR?</h2>
            </div>
        </div>
        <!-- TÍTULO RODAPÉ -->

        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12">
                
                <div class="row">
                    
                        <!-- COLUNA UM -->
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-um">
                            <p>
                                <?php the_field("texto_rodape",18); ?>
                            </p>
                            <h4>
                                <i class="fa fa-whatsapp"></i> <?php the_field("numero_whatsapp_rodape",18); ?>
                            </h4>
                            <h4 class="email">
                                <i class="fa fa-envelope"></i> <?php the_field("e-mail_rodape",18); ?>
                            </h4>

                            <!-- BTN WHATSAPP -->
                            <div class="btn-whatsapp">
                                <a href="<?php the_field("link_whatsapp",18); ?>" target="_blank" class="btn btn-success" title="FALAR NO WHATSAPP">
                                    <i class="fa fa-whatsapp"></i> FALAR NO WHATSAPP
                                </a>
                            </div>
                            <!-- BTN WHATSAPP -->
                            
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
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 col-12 coluna-dois">

                            <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/enviarmsg.php" onSubmit="return ajaxSubmit(this);">

                                <input type="hidden" name="home" value="<?php echo get_option('home'); ?>" />

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
        </div>

    </div>
    
    <!-- BOTTOM -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 col-12 copy">
                    <p>CATIVA CONSULTORIA FINANCEIRA - TODOS OS DIREITOS RESERVADOS.</p>
                </div>

                <!-- MANGU -->
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mangu">
                    <a href="https://mangu.com.br" title="Site desenvolvido por Mangu Brand - Criação e Otimização de sites" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mangu.svg" alt="Mangu Brand Logo" />
                    </a>
                </div>
                <!-- MANGU -->

            </div>
        </div>
    </div>
    <!-- BOTTOM -->

</footer>
<!-- FOOTER -->


<?php else: ?>

        <p>&nbsp;</p>

        <!-- FOOTER -->
        <footer style="padding-top:0px;">
            
            <!-- BOTTOM -->
            <div class="bottom">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2 col-12 copy">
                            <p>CATIVA CONSULTORIA FINANCEIRA - TODOS OS DIREITOS RESERVADOS.</p>
                        </div>

                        <!-- MANGU -->
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mangu">
                            <a href="https://mangu.com.br" title="Site desenvolvido por Mangu Brand - Criação e Otimização de sites" target="_blank">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mangu.svg" alt="Mangu Brand Logo" />
                            </a>
                        </div>
                        <!-- MANGU -->

                    </div>
                </div>
            </div>
            <!-- BOTTOM -->

        </footer>
        <!-- FOOTER -->

<?php endif; ?>

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sweetalert2.min.js"></script>
    <script type="text/javascript">
            // COMO FAZER A CHAMADA NO FORMULÁRIO onSubmit="return ajaxSubmit(this);"
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;

                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });

                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");

                return false;
            }

            $( document ).ready(function() {

                                var sessaoDepoimentos = $('#sessaoDepoimentos').owlCarousel({
                                        loop:true,
                                        margin:0,
                                        items: 1,
                                        autoplay: false,
                                        center: true,
                                        //navText: [
                                        //    '<img src="images/esquerda.png" alt="Banner anterior">',
                                        //    '<img src="images/direita.png" alt="Próximo Banner">'
                                        //],
                                        //navContainer: '.custom-nav-banner',
                                        autoplay:false,
                                        autoplayTimeout:6500,
                                        dotsContainer: '#carousel-custom-dots',
                                        autoplayHoverPause:true                                        
                                });
                                
                                // AGORA TEMOS ATÉ DOTS!!!
                                $('.owl-dot').click(function () {
                                  sessaoDepoimentos.trigger('to.owl.carousel', [$(this).index(), 300]);
                                });
                                sessaoDepoimentos.trigger('to.owl.carousel', [1, 300]);

                                

                                var loopArtigosHomepage = $('#loopArtigosHomepage').owlCarousel({
                                        loop:false,
                                        margin:15,
                                        items: 1.5,
                                        autoplay: false,
                                        center: true,
                                        autoplay:true,
                                        autoplayTimeout:6500,
                                        autoplayHoverPause:true                                        
                                });
                                

                          }); 

    </script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>

    <!-- DROPDOWN HOVER -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-dropdownhover.js"></script>
    
    <?php wp_footer(); ?>

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>
