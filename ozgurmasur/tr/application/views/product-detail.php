<section class="productDetail">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="imgArea">
					<div class="thumbnails">
						<img src="<?=main_url($product->product_image)?>">
						<?php foreach ($product->images as $key => $val) { ?>
							<img src="<?=main_url($val->name)?>">
						<?php } ?>
					</div>
					<div class="mainImg">
						<a data-fancybox="detail-img" href="<?=main_url($product->product_image)?>">
							<img id="mainImage" src="<?=main_url($product->product_image)?>">
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
					<h2 id="productName"><?=$product->tr_product_name?></h2>
					<!--<h3><?=$product->kod?></h3>-->
					<h4><?=number_format($product->price_tr,2,',','.') ?> ₺ 
					<?php if ($product->old_price_tr > $product->price_tr) { ?>
						<span id="oldFiyat">$<?=number_format($product->old_price_tr,2,',','.') ?></span>
					<?php } ?>
					<p style="font-size: 16px;margin-top: 20px;">Teslim Süresi : 10 - 15 İş Günü</p>

				</h4>
					<div class="colors">
						<h5>renk</h5>
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
						<h5>beden</h5>
						<?php foreach ($product->onlySize as $key => $val) { ?>
							<div class="item">
								<input type="radio" id="size-<?=$val?>" name="size" value="<?=$val?>" <?=$key==0?'checked':''?>>
								<label for="size-<?=$val?>"><?=$val?></label>
							</div>
						<?php } ?>
					</div>
					<div class="details">
						<h6>detaylar <span>+</span></h6>
						<div class="content">
							<?=$product->tr_description?>
						</div>
					</div>
					<button id="sizeGuide" type="button">beden tablosu</button>
					<button class="addToCart" type="button" onclick="addToCart(<?=$product->Id?>)">sepete ekle</button>
				</div>
			</div>
		</div>
	</div>
</section>

<div style="display: none;">
	<?php foreach ($product->images as $key => $val) { ?>
		<a data-fancybox="detail-img" href="<?=main_url($val->name)?>">
			<img src="<?=main_url($val->name)?>">
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