<section class="bl-full-texto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                if (!empty($titulo)) {
                ?>
                    <h2 class="titulo maior t-center mb-4 mt-0"><strong><?php echo $titulo; ?></strong></h2>
                <?php
                } // if !empty $titulo

                if (!empty($texto)) {
                ?>
                    <p class="paragrafo-padrao mb-0"><?php echo $texto; ?></p>
                <?php
                } // if !empty $texto
                ?>
            </div>
        </div>
    </div>
</section>