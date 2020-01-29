<?php

$misc = $site->grandChildren()->listed();

?>
<?php foreach($misc as $arquivoobj): ?>

	<a href="<?= $arquivoobj->url() ?>"> MISC </a>
	<?php endforeach ?>"


<div class="product-wrapper">

	<div class="float-left content">
		<div class="content-title">
			The Classic
		</div>

		<div class="content-text">
			
		</div>
	</div>

	<div class="float-right product-images">

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

<!--
			 	<?php foreach($misc->images()->sortBy('sort', 'asc')->limit(4) as $prodimage): ?>

					  <div class="carousel-cell">
					  	<img class="pseudo-bg-image"
					  		 src="<?= $prodimage->url() ?>"
					  		 srcset="<?= $prodimage->srcset([500, 900, 2048]) ?>"
					  		 />
					  </div>
-->
				<?php endforeach ?>
				 
	  </div>

	
	</div>









</div>