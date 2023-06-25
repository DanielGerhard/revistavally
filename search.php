<?php
get_header();
$pesquisa = isset($_GET['s']) ? $_GET['s'] : '';
?>
<main class="sarch-page">
    <section class="bl-header-pesquisa px-bl-l">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <h1 class="titulo extra-bold mb-4">Resusltados da poesquisa por: <strong><?php echo $pesquisa; ?></strong></h1>
                    <canvas class="linha gradiente-bandeira"></canvas>
                </div>
            </div>
            <?php for ($i = 0; $i < 9; $i++) {; ?>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="cp-post horizontal resultado-busca">
                            <div class="conteudo">
                                <div class="titulo">Lorem ipsum dolor sit amet consectetur adi sicing elit. Accusantium provident .</div>
                                <div class="resumo-post exibir-5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdamLorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdam...psum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdam...</p>
                                </div>
                                <div class="meta-post">
                                    <p class="texto-cinza autor">Por: Lorem ipsum</p>
                                    <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                                </div>
                            </div>
                            <picture class="picture-padrao">
                                <img src="<?php echo getImg(); ?>" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

</main>
<?php get_footer();
