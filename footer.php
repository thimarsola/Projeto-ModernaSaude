</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- content -->
    <div class="footer__content bg-neutral-500 py-4">
        <div class="container">

            <!-- row -->
             <div class="footer__content__row d-flex gp-2 jc-between ai-center">
                 <!-- brand -->
                 <img src="<?= image('logo-rodape.svg'); ?>" alt="Clínica Moderna Saúde" title="Clínica Moderna Saúde">
                 <!-- end of brand -->

                 <!-- social -->
                 <div class="footer__content__row__social">
                     <ul class="d-flex gp-5 jc-between ai-center">
                         <li>
                             <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" title="Conheça o nosso instagram" target="_blank"><i class="icon-instagram"></i></a>
                         </li>
                         <li>
                             <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" title="Conheça o nosso facebook" target="_blank"><i class="icon-facebook"></i></a>
                         </li>
                     </ul>
                 </div>
                 <!-- end of social -->
             </div>
            <!-- end of row -->
        </div>
    </div>
    <!-- end of content -->

    <!-- copyright -->
    <div class="footer__content__copyright bg-neutral-600 clr-neutral-300 t-center py-1">
        <div class="container">
            <small><?= date('Y') . " - " . SITE['name'] ?> &COPY; - Todos os direitos reservados</small>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex gp-1 jc-between ai-center">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p>
                        <small>
                            Desenvolvido por
                            <b><a class="link-neutral-500" rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b>
                        </small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if(!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        }elseif(is_single()){
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        }
                        else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <a class="link-neutral-500" rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                            <small>
                                <i class="icon-html mr-1"></i>
                                W3C Validator
                            </small>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>