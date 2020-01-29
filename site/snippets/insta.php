<h3>be social</h3>

<div class="insta-feed">
	<ul id="rudr_instafeed"></ul>
				<script type="text/javascript">var token = '13116990686.1677ed0.d30fe42ba25b47b284590bce262ac6dd',
				    num_photos = 8;
				 
				$.ajax({
					url: 'https://api.instagram.com/v1/users/self/media/recent',
					dataType: 'jsonp',
					type: 'GET',
					data: {access_token: token, count: num_photos},
					success: function(data){
				 		console.log(data);
						for( x in data.data ){
							$('ul').append('<li><img src="'+data.data[x].images.low_resolution.url+'"></li>');
						}
					},
					error: function(data){
						console.log(data);
					}
				});</script>
</div>