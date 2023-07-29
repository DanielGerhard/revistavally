<section class="bl-img-esquerda full-height bg-auxiliar">
    <?php
    if (!empty($imagem)) {
    ?>
        <picture class="picture-padrao"><img src="<?php echo $imagem['sizes']['medium']; ?>" alt=""></picture>
    <?php
    } // if !empty $imagem
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 offset-lg-6">
                <?php
                if (!empty($titulo)) {
                ?>
                    <h2 class="titulo maior mb-4 mt-0"><strong><?php echo $titulo; ?></strong></h2>
                <?php
                } // if !empty $titulo
                ?>
                <?php
                if (!empty($texto)) {
                ?>
                    <p class="paragrafo-padrao"><?php echo $texto; ?></p>
                <?php
                } // if !empty $texto
                ?>
            </div>
        </div>
    </div>
</section>