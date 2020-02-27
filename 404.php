<?php
get_header();
get_template_part('template_parts/default-header');
?>

<div class="container">
  <div class="row">
    <div class="col-md-9 col-sm-12 mx-auto text-center">

      <h2 class="mt-5 mb-3">Página não encontrada</h2>
      <p>O caminho para o conteúdo que você deseja acessar está errado ou não existe.</p>
      <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/404.png' ?>" alt="Imagem página erro 404">

    </div>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php
get_template_part('template_parts/default-footer');
get_footer();
?>