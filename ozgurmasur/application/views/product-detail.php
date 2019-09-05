<section class="productDetail">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imgArea">
					<div class="thumbnails">
						<img src="<?=site_url($product->product_image)?>">
						<?php foreach ($product->images as $key => $val) { ?>
							<img src="<?=site_url($val->name)?>">
						<?php } ?>
					</div>
					<div class="mainImg">
						<a data-fancybox="detail-img" href="<?=site_url($product->product_image)?>">
							<img id="mainImage" src="<?=site_url($product->product_image)?>">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<input type="hidden" id="product_slug" value="<?=$product->slug?>">
				<input type="hidden" id="product_price" value="<?=$product->price?>">
				<input type="hidden" id="product_slug_tr" value="<?=$product->tr_slug?>">
				<input type="hidden" id="product_price_tr" value="<?=$product->price_tr?>">
				<div class="productArea">
					<h2 id="productName"><?=$product->product_name?></h2>
					<!--<h3><?=$product->kod?></h3>-->
					<h4>$<?=number_format($product->price,2,',','.') ?> 
					<?php if ($product->old_price > $product->price) { ?>
						<span id="oldFiyat">$<?=number_format($product->old_price,2,',','.') ?></span>
					<?php } ?>
					<p style="font-size: 16px;margin-top: 20px;">Estimated Shipping : 10 - 15 Days</p>
				</h4>
					<div class="colors">
						<h5>color</h5>
						<?php foreach ($product->onlyColor as $key => $val) { ?>
							<div class="item">
								<input type="radio" id="color_<?=$val->name?>" name="color" value="<?=$val->name?>" <?=$key==0?'checked':''?>>
								<label for="color_<?=$val->name?>">
									<?php for ($i=1; $i < 5; $i++) { 
										if ($i <= $val->rules) { ?> 
											<?php $var = 'color'.$i; ?>
											<span style="background-color:<?=$val->{$var}?>"></span>
										<?php }
									} ?>
								</label>
							</div>
						<?php } ?>
					</div>
					<div class="sizes">
						<h5>size</h5>
						<?php foreach ($product->onlySize as $key => $val) { ?>
							<div class="item">
								<input type="radio" id="size-<?=$val?>" name="size" value="<?=$val?>" <?=$key==0?'checked':''?>>
								<label for="size-<?=$val?>"><?=$val?></label>
							</div>
						<?php } ?>
					</div>
					<div class="details">
						<h6>details <span>+</span></h6>
						<div class="content">
							<?=$product->description?>
						</div>
					</div>
					<button id="sizeGuide" type="button">size guide</button>
					<button class="addToCart" type="button" onclick="addToCart(<?=$product->Id?>)">add to cart</button>
				</div>
			</div>
		</div>
	</div>
</section>

<div style="display: none;">
	<?php foreach ($product->images as $key => $val) { ?>
		<a data-fancybox="detail-img" href="<?=site_url($val->name)?>">
			<img src="<?=site_url($val->name)?>">
		</a>
	<?php } ?>
</div>

<section class="popUp sizeChart">
	<span id="closePopup"><img src="<?=site_url('assets/Front/')?>images/icons/cancel.svg"></span>
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto">
				<img src="<?=site_url('assets/Front/')?>images/sizechart.svg" alt="sizechart">
				<p>*(Our sizes are based on french sizing.)</p>
			</div>
		</div>
	</div>
</section>

<script>
	$('.imgArea .thumbnails img').click(function(event) {
		$('.imgArea .thumbnails img').removeClass('active');
		$(this).addClass('active');
		var clickedImg = $(this).attr('src');
		$('.mainImg img').attr('src',clickedImg);
		$('.mainImg a').attr('href',clickedImg);
	});
	$('section.productDetail .productArea div.details h6').click(function(event) {
		$(this).parent('div.details').toggleClass('active');
	});

	$('#sizeGuide').click(function(event) {
		$('.popUp.sizeChart').addClass('active');
	});
	$('span#closePopup').click(function(event) {
		$('.popUp.sizeChart').removeClass('active');
	});
</script>