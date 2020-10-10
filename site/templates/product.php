
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
			<script type="text/javascript">
				/*<![CDATA[*/
				(function () {
					var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
					if (window.ShopifyBuy) {
						if (window.ShopifyBuy.UI) {
							ShopifyBuyInit();
						} else {
							loadScript();
						}
					} else {
						loadScript();
					}
					function loadScript() {
						var script = document.createElement('script');
						script.async = true;
						script.src = scriptURL;
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
						script.onload = ShopifyBuyInit;
					}
					function ShopifyBuyInit() {
						var client = ShopifyBuy.buildClient({
							domain: 'mashandgrape.com',
							storefrontAccessToken: 'c8df6a051c9b56309097cd81d5c30174',
						});
						ShopifyBuy.UI.onReady(client).then(function (ui) {
							ui.createComponent('product', {
								id: '5600165265566',
								node: document.getElementById('product-component-1597957431255'),
								moneyFormat: '%24%7B%7Bamount%7D%7D',
								options: {
					"product": {
						"styles": {
							"product": {
								"@media (min-width: 601px)": {
									"max-width": "calc(25% - 20px)",
									"margin-left": "20px",
									"margin-bottom": "50px"
								},
								"text-align": "left"
							},
							"title": {
								"font-weight": "normal"
							},
							"button": {
								"font-family": "Arial, sans-serif",
								"font-size": "16px",
								"padding-top": "16px",
								"padding-bottom": "16px",
								":hover": {
									"background-color": "#9c8462"
								},
								"background-color": "#ad936d",
								":focus": {
									"background-color": "#9c8462"
								},
								"border-radius": "0px",
								"padding-left": "13px",
								"padding-right": "13px"
							},
							"quantityInput": {
								"font-size": "16px",
								"padding-top": "16px",
								"padding-bottom": "16px"
							}
						},
						"contents": {
							"img": false,
							"button": false,
							"buttonWithQuantity": true,
							"title": false,
							"price": false
						}
					},
					"productSet": {
						"styles": {
							"products": {
								"@media (min-width: 601px)": {
									"margin-left": "-20px"
								}
							}
						}
					},
					"modalProduct": {
						"contents": {
							"img": false,
							"imgWithCarousel": true,
							"button": false,
							"buttonWithQuantity": true
						},
						"styles": {
							"product": {
								"@media (min-width: 601px)": {
									"max-width": "100%",
									"margin-left": "0px",
									"margin-bottom": "0px"
								}
							},
							"button": {
								"font-family": "Arial, sans-serif",
								"font-size": "16px",
								"padding-top": "16px",
								"padding-bottom": "16px",
								":hover": {
									"background-color": "#9c8462"
								},
								"background-color": "#ad936d",
								":focus": {
									"background-color": "#9c8462"
								},
								"border-radius": "0px",
								"padding-left": "13px",
								"padding-right": "13px"
							},
							"quantityInput": {
								"font-size": "16px",
								"padding-top": "16px",
								"padding-bottom": "16px"
							},
							"title": {
								"font-weight": "normal"
							}
						},
						"text": {
							"button": "Add to cart"
						}
					},
					"cart": {
						"styles": {
							"button": {
								"font-family": "Arial, sans-serif",
								"font-size": "16px",
								"padding-top": "16px",
								"padding-bottom": "16px",
								":hover": {
									"background-color": "#9c8462"
								},
								"background-color": "#ad936d",
								":focus": {
									"background-color": "#9c8462"
								},
								"border-radius": "0px"
							}
						},
						"text": {
							"total": "Subtotal",
							"notice": "All sales processed and fulfilled by unaffiliated, third-party retailers on the Mash&Grape network. The checkout functionality is provided solely for the convenience of our consumers. ",
							"button": "Checkout"
						},
						"contents": {
							"note": true
						},
						"popup": false
					},
					"toggle": {
						"styles": {
							"toggle": {
								"font-family": "Arial, sans-serif",
								"background-color": "#ad936d",
								":hover": {
									"background-color": "#9c8462"
								},
								":focus": {
									"background-color": "#9c8462"
								}
							},
							"count": {
								"font-size": "16px"
							}
						}
					}
				},
							});
						});
					}
				})();
				/*]]>*/
				</script>
				 
		</div>
		<div id='product-component-1597957431255'></div>
</main>






<?php snippet('footer') ?>
