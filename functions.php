<?php
set_include_path(get_template_directory());

function getImg($img = 'placeholder.jpg')
{
    $imgPath = get_template_directory_uri() . '/img/' . $img;
    return $imgPath;
}

function includeTagPadrao($texto='', $classe='')
{
?>
    <a class="tag-padrao <?php echo $classe; ?>">
        <h3><strong><?php echo $texto; ?></strong></h3>
        <div class="bandeira-listrada">
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
        </div>
    </a>
<?php
}
