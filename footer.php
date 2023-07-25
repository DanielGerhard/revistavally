<?php $rodape = get_field('rodape', FRONT_PAGE_ID); ?>

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
                <?php
                if (!empty($rodape['texto'])) {
                ?>
                    <p class="texto-apoio"><?php echo $rodape['texto']; ?></p>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 col-md-7 offset-md-1 col-10">
                <div class="menu">
                    <ul>
                        <li class="menu-titulo"><strong>Projetos</strong></li>
                        <?php
                        foreach ($rodape['projetos'] as $projetoObj) {
                            $projeto = $projetoObj['url'];
                        ?>
                            <li><a class="hover-underline" href="<?php echo $projeto['url'] ?>" target="<?php echo $projeto['target'] == 'blank' ? '_blank' : ''; ?>"><?php echo !empty($projeto['title']) ? $projeto['title'] : ''; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <ul>
                        <li class="menu-titulo"><strong>Assuntos</strong></li>
                        <?php
                        foreach ($rodape['assuntos'] as $assunto) {
                            $idCategoria = $assunto['categoria'];
                        ?>
                            <li><a class="hover-underline" href="<?php echo site_url() . '?s&categoria=' . $idCategoria; ?>"><?php echo get_term($idCategoria)->name; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <ul>
                        <li class="menu-titulo"><strong>Parceiros</strong></li>
                        <?php
                        if (!empty($rodape['parceiros'])) {
                            foreach ($rodape['parceiros'] as $parceiroObj) {
                                $parceiro = $parceiroObj['link'];
                        ?>
                                <li><a class="hover-underline" href="<?php echo $parceiro['url']; ?>" target="<?php echo $parceiro['target'] == 'blank' ? '_blank' : ''; ?>"><?php echo !empty($parceiro['title']) ? $projeto['title'] : ''; ?></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <ul>
                        <?php
                        if (!empty($rodape['links_menu'])) {
                            foreach ($rodape['links_menu'] as $linkMenuObj) {
                                $linkMenu = $linkMenuObj['link'];
                        ?>
                                <li class="menu-titulo hover-underline"><strong><a href="<?php echo $linkMenu['url']; ?>" target="<?php echo $linkMenu['target'] == 'blank' ? '_blank' : ''; ?>"><?php echo !empty($linkMenu['title']) ? $linkMenu['title'] : ''; ?></a></strong></li>
                        <?php
                            }
                        }
                        ?>
                        <div class="redes">
                            <a href="mailto:<?php echo CONTATOS['email']; ?>" class="mail" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/mail-icon.svg'; ?>
                            </a>
                            <a href="https://instagram.com/<?php echo CONTATOS['instagram'] ?>" class="instagram" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/instagram-icon.svg'; ?>
                            </a>
                            <a href="https://wa.me/55<?php echo preg_replace('/[^0-9]/', '', CONTATOS['whatsapp']); ?>" class="whatsapp" target="_blank" rel="noopener noreferrer">
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