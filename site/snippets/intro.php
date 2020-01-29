<section class="carousel-wrapper">
	
	<div class="main-carousel carousel" 
			 data-flickity='{ 
			 "cellAlign": "center", 
			 "wrapAround": true,
			 "autoPlay": 5000,
			 "draggable":false,
			 "setGallerySize": false,
			 "prevNextButtons": false,
			 "initialIndex": 1,
			 "pageDots": false,
			 "pauseAutoPlayOnHover": false
			 	}'>

			 	<?php foreach($page->images()->sortBy('sort', 'asc')->limit(7) as $image): ?>

					  <div class="carousel-cell">
					  	<img class="pseudo-bg-image"
					  		 src="<?= $image->url() ?>"
					  		 srcset="<?= $image->srcset([500, 900, 2048]) ?>"
					  		 />
					  </div>

				<?php endforeach ?>
				 
	  </div>


	  <div class="carousel-buttons">
					  <div class="main-carousel carousel-fwd carousel-hovered" 
						 data-flickity='{ 
						 "cellAlign": "center", 
						 "wrapAround": true,
						 "autoPlay": 5000,
						 "draggable":false,
						 "setGallerySize": false,
						 "prevNextButtons": false,
						 "initialIndex": 2,
						 "pageDots": false,
						 "pauseAutoPlayOnHover": false
						 	}'>

								<?php foreach($page->images()->sortBy('sort', 'asc')->limit(7) as $image): ?>

								  <div class="carousel-cell">
										  	<img class="pseudo-bg-image"
										  		 src="<?= $image->url() ?>"
										  		 srcset="<?= $image->srcset([100, 300, 500]) ?>"
										  		 />
								  </div>

							<?php endforeach ?>

					  </div>

					    <div class="main-carousel carousel-rwd carousel-hovered" 
						 data-flickity='{ 
						 "cellAlign": "center", 
						 "wrapAround": true,
						 "autoPlay": 5000,
						 "draggable":false,
						 "setGallerySize": false,
						 "prevNextButtons": false,
						 "initialIndex": 0,
						 "pageDots": false,
						 "pauseAutoPlayOnHover": false
						 	}'>

							<?php foreach($page->images()->sortBy('sort', 'asc')->limit(7) as $image): ?>

								  <div class="carousel-cell">
									  	<img class="pseudo-bg-image"
									  		 src="<?= $image->url() ?>"
									  		 srcset="<?= $image->srcset([100, 300, 500]) ?>"
									  		 />
								  </div>


							<?php endforeach ?>

					  </div>


		</div>

		<div class="arrow-down"><a class="logo" href="#content"> <img src="assets/images/ar-s.svg"></a></div>
</section>