<?php get_header(); ?>

<main class="page-<?php echo $post->post_name; ?>">
    <section class="banner-sobre">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="titulo">Quem somos?</h1>
            </div>
            <div class="col-lg-8">
                <picture class="picture-padrao">
                    <img src="<?php echo getImg(); ?>" alt="">
                </picture>
            </div>
        </div>
    </section>

    <section class="bl-full-texto bg-auxiliar">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 class="titulo maior mb-4">A Revista Vally</h2>
                    <p class="paragrafo-padrao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula augue, eleifend vel fringilla eu, maximus in urna. Nulla in congue velit. Sed porttitor volutpat odio, nec venenatis sapien bibendum eget. Sed non enim vitae nunc pulvinar pulvinar ac nec ligula. Nam pellentesque, risus placerat vulputate sagittis, dui lectus porta ipsum, a pellentesque nisi enim a tellus. Pellentesque venenatis, neque sed facilisis consectetur, lorem velit eleifend diam, eu egestas erat justo quis tortor. Pellentesque laoreet est vitae posuere semper. Nullam a nulla pulvinar, vulputate felis a, malesuada lectus. Nullam dolor ex, auctor ac venenatis eu, interdum quis ligula. Nam iaculis, elit ut sodales ullamcorper, neque enim malesuada mi, quis condimentum lectus tellus eget leo. Mauris ornare magna sed dolor pharetra porta. Nullam interdum convallis tincidunt.</p>
                    <p class="paragrafo-padrao">Aliquam in quam hendrerit, hendrerit est eget, convallis turpis. Sed finibus non nisl vitae vulputate. Nam ipsum erat, aliquet non lacus non, hendrerit vehicula felis. Phasellus rhoncus nibh sit amet turpis venenatis suscipit. Duis id est euismod, consectetur mi eu, mollis libero. Nulla non faucibus lectus. Proin tempus fermentum diam at ultricies. Duis efficitur ornare nisl ac pretium.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bl-img-esquerda">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="titulo maior mb-4">A Revista Vally</h2>
                    <p class="paragrafo-padrao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula augue, eleifend vel fringilla eu, maximus in urna. Nulla in congue velit. Sed porttitor volutpat odio, nec venenatis sapien bibendum eget. Sed non enim vitae nunc pulvinar pulvinar ac nec ligula. Nam pellentesque, risus placerat vulputate sagittis, dui lectus porta ipsum, a pellentesque nisi enim a tellus. Pellentesque venenatis, neque sed facilisis consectetur, lorem velit eleifend diam, eu egestas erat justo quis tortor. Pellentesque laoreet est vitae posuere semper. Nullam a nulla pulvinar, vulputate felis a, malesuada lectus. Nullam dolor ex, auctor ac venenatis eu, interdum quis ligula. Nam iaculis, elit ut sodales ullamcorper, neque enim malesuada mi, quis condimentum lectus tellus eget leo. Mauris ornare magna sed dolor pharetra porta. Nullam interdum convallis tincidunt.</p>
                    <p class="paragrafo-padrao">Aliquam in quam hendrerit, hendrerit est eget, convallis turpis. Sed finibus non nisl vitae vulputate. Nam ipsum erat, aliquet non lacus non, hendrerit vehicula felis. Phasellus rhoncus nibh sit amet turpis venenatis suscipit. Duis id est euismod, consectetur mi eu, mollis libero. Nulla non faucibus lectus. Proin tempus fermentum diam at ultricies. Duis efficitur ornare nisl ac pretium.</p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                </div>
            </div>
        </div>
    </section>

    <?php include '_swiper-mais-materias.php'; ?>
</main>

<?php get_footer(); ?>