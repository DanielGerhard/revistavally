<section class="bl-img-esquerda">
    <div class="container">
        <div class="row ">
            <div class="col-auto">
                <?php
                if (!empty($titulo)) {
                ?>
                    <h2 class="titulo maior mb-4"><strong><?php echo $titulo; ?></strong></h2>
                <?php
                } // if !empty $titulo
                ?>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-5">
                <?php
                if (!empty($texto)) {
                ?>
                    <p class="paragrafo-padrao"><?php echo $texto; ?></p>
                <?php
                } // if !empty $texto
                ?>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <?php
                if (!empty($imagem)) {
                ?>
                    <picture class="picture-padrao"><img src="<?php echo $imagem['sizes']['medium']; ?>" alt=""></picture>
                <?php
                } // if !empty $imagem['imagem']
                ?>
            </div>
        </div>
    </div>
</section>