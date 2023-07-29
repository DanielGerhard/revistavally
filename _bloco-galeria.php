<section class="bloco-galeria">
    <div class="container">
        <div class="row">
            <div class="galeria" contem="<? echo count($galeria); ?>">
                <?php
                if (!empty($galeria)) {
                    foreach ($galeria as $key => $imagem) {
                        if ($key > 6) {
                            continue;
                        }
                ?>
                        <a href="<?php echo $imagem['sizes']['large']; ?>" class="galeria__item galeria__item-<?php echo $key == 0 ? 'maior' : 'menor'; ?>" data-fancybox="galeria" g-index="<?php echo $key; ?>">
                            <picture class="picture-padrao"><img src="<?php echo $imagem['sizes']['medium']; ?>" alt=""></picture>
                        </a>
                <?php
                    } // foreach $galeria
                } // if !empty $galeria
                ?>
            </div>
        </div>
    </div>
</section>