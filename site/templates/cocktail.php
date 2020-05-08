
<?php snippet('header-prod') ?>

<div class="page-to-blur">
  <div class="content-title">
      <?= $page->title() ?>
    </div>

<main class="content-wrapper">

	<div class="images-wrapper cocktail-image">
<?php foreach($page->files()->sortBy('sort') as $image): ?>

          
          <img 
          		src="<?= $image->url() ?>"
          		srcset="<?= $image->srcset([500, 900, 2048]) ?>"
          		alt="<?= $image->caption() ?>"
          		/>

  
            <?php endforeach ?>

              <div class="content-text cocktail-text">
    <?= $page->text()->kirbytext() ?>
  </div>
<a href="https://shop.drinkcana.com/" target="_blank"><button class="shop-button">Shop</button></a>
</main>
</div>
<?php snippet('tipstricks') ?>

<?php snippet('footer-internal') ?>
