
<?php snippet('header-prod') ?>


<main class="content-wrapper product-content page-to-blur">

	<div class="content">
		<div class="content-title">
			The Classic
		</div>

		<div class="content-text prod-text">
			<?= $page->text()->kirbytext() ?>
		</div>
	</div>

	<div class="product-images">


		<div class="main-carousel carousel prod-carousel" 
				 data-flickity='{ 
				 "cellAlign": "center", 
				 "wrapAround": true,
				 "autoPlay": 2500,
				 "draggable":false,
				 "setGallerySize": false,
				 "prevNextButtons": false,
				 "initialIndex": 1,
				 "pageDots": false,
				 "pauseAutoPlayOnHover": false
				 	}'>

				 	<?php foreach($page->images()->sortBy('sort', 'asc')->limit(3) as $image): ?>

						  <div class="carousel-cell">
						  	<img class="pseudo-bg-image"
						  		 src="<?= $image->url() ?>"
						  		 srcset="<?= $image->srcset([500, 900, 2048]) ?>"
						  		 />
						  </div>

					<?php endforeach ?>

					 
		  </div>

				 
	  </div>
<a href="https://shop.drinkcana.com/" target="_blank"><button class="shop-button">Shop</button></a>
	
</main>






<?php snippet('footer') ?>
