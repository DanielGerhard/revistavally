<footer class="footer">
    <div class="container">
        <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-4 col-10">
                <a href="<?php echo site_url(); ?>" class="logo">
                    <?php include 'img/svg/logo.svg'; ?>
                </a>
                <div class="bandeira-listrada">
                    <canvas></canvas>
                    <canvas></canvas>
                    <canvas></canvas>
                    <canvas></canvas>
                    <canvas></canvas>
                    <canvas></canvas>
                </div>
                <p class="texto-apoio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdam.</p>
            </div>
            <div class="col-lg-6 col-md-7 offset-md-1 col-10">
                <div class="menu">
                    <ul>
                        <li class="menu-titulo"><strong>Projetos</strong></li>
                        <li class="hover-underline">Editorial</li>
                    </ul>
                    <ul>
                        <li class="menu-titulo"><strong>Assuntos</strong></li>
                        <li class="hover-underline"><a href="">Shows</a></li>
                        <li class="hover-underline"><a href="">Debate</a></li>
                        <li class="hover-underline"><a href="">Cultura</a></li>
                    </ul>
                    <ul>
                        <li class="menu-titulo"><strong>Parceiros</strong></li>
                        <li class="hover-underline"><a href="">Lorem Ipsum</a></li>
                    </ul>
                    <ul>
                        <li class="menu-titulo hover-underline"><strong><a href="">Quem somos</a></strong></li>
                        <li class="menu-titulo hover-underline"><strong><a href="">Contato</a></strong></li>
                        <div class="redes">
                            <a href="mailto:" class="mail" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/mail-icon.svg'; ?>
                            </a>

                            <a href="#" class="instagram" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/instagram-icon.svg'; ?>
                            </a>

                            <a href="#" class="whatsapp" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/whatsapp-icon.svg'; ?>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js" integrity="sha512-3Ei7OPFo83kw3cPbDLeLhn/YF8tZB7Vs8sfli0B/KEekureL5eosDeshYFICCvt4K8i0yUil/lK3cSiic2Wjkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri() . '/js/main.js'; ?>"></script>
</body>

</html>