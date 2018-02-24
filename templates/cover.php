<?php use Roots\Sage\Assets; ?>

<div class="fi-cover">
  <div class="picture"></div>
  <div class="data">
    <div class="wrapper">
      <h1 class="candidates">
        <strong><?php echo get_theme_mod('candidate1', 'Candidat⋅e'); ?></strong>
        <?php if (!empty(get_theme_mod('candidate2', 'Remplaçant⋅e'))): ?>
        <span class="successor"><?php echo get_theme_mod('candidate2', 'Remplaçant⋅e'); ?></span>
        <?php endif; ?>
      </h1>
      <div class="logo">
        <div class="phi">
          <img src="<?php echo Assets\asset_path('images/phi.svg') ?>">
        </div>
        <div class="text">
          <div class="title">La France Insoumise</div>
        </div>
      </div>
      <div class="cities">
        <?php echo nl2br(get_theme_mod('cities', "Ville 1, Ville2\nCanton A, Canton B\nVille Nème arrondissement")); ?>
      </div>
      <div class="district">
        <?php echo get_theme_mod('district', 'Xème circonscription du Département'); ?>
      </div>
      <button class="scrolldown"><span>En savoir plus</span></button>
    </div>
  </div>
</div>
