
<?php snippet('header-prod') ?>

<div class="page-to-blur">
  <div class="content-title">
      <?= $page->title() ?>
    </div>

<main class="content-wrapper">

	<div class="content-text float-left">
		<?= $page->text()->kirbytext() ?>
	</div>

	<div class="images-wrapper float-left">
<?php foreach($page->files()->sortBy('sort') as $image): ?>

          
          <img 
          		src="<?= $image->url() ?>"
          		srcset="<?= $image->srcset([500, 900, 2048]) ?>"
          		alt="<?= $image->caption() ?>"
          		/>

  
            <?php endforeach ?>

            <div class="ficha-tec">
             <?= $page->ficha()->kirbytext() ?>
          </div>
        </div>

</main>
</div>

<?php snippet('footer-internal') ?>
