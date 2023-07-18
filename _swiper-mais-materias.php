<?php /* SWIPPER MAIS MATÉRIAS */ ?>
    <section class="bl-swiper-materias">
        <div class="bl-header-wrap">
            <h2 class="titulo menor"><strong>Veja mais materias</strong></h2>
            <canvas class="linha gradiente-bandeira"></canvas>
        </div>
        <div class="container">
            <div class="inner-container">
                <div class="row justify-content-center px-bl-l">
                    <div class="col-lg-10">
                        <div class="swiper" e-swiper-materias>
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i < 9; $i++) { ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo get_the_permalink(55); ?>" class="cp-post horizontal">
                                            <picture class="picture-padrao"><img src="<?php echo get_field('imagem_destaque', 55)['sizes']['thumbnail']; ?>" alt=""></picture>
                                            <div class="conteudo">
                                                <h3 class="titulo menor"><strong><?php echo get_the_title(55) ?></strong></h3>
                                                <div class="meta-post">
                                                    <?php includeTagPadrao('Shows', 'menor'); ?>
                                                    <div class="inner">
                                                        <p class="texto-cinza autor">Por: Lorem ipsum</p>
                                                        <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                                                    </div>
                                                </div>
                                                <p class="resumo-post menor">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdamLorem ipsum dolor sit amet consectetur...
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev display-desktop" e-swiper-materias-btn-prev><?php include 'img/svg/seta-expansiva.svg'; ?></div>
                <div class="swiper-button-next display-desktop" e-swiper-materias-btn-next><?php include 'img/svg/seta-expansiva.svg'; ?></div>
            </div>
        </div>
    </section>
    <?php /* --- */ ?>