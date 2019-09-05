<section class="shoppingCart">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title">SEPETİM</h3>
				<div class="wrapper">
					<div class="head">
						<p>Ürünler</p>
						<p>Fiyat</p>
						<p>Adet</p>
						<p>Toplam</p>
					</div>
					<div class="itemsArea">
						<?php $total = 0; ?>
						<?php foreach ($this->cart->contents() as $key => $val) { ?>
							<?php $total += $val['price_tr']*$val['qty']; ?>
							<div class="item">
								<div class="itemImg">
									<img src="<?=$val['image']?>">
								</div>
								<div class="productInfos">
									<h2><a href="<?=site_url('product/'.$val['slug_tr'].'/'.$val['id'])?>"><?=$val['name']?></a></h2>
									<div class="selection">
										<?php for ($i=1; $i < 5; $i++) { 
											if ($i <= $val['options']['colorDetail']->rules) { ?> 
												<?php $var = 'color'.$i; ?>
												<span style="background-color:<?=$val['options']['colorDetail']->{$var}?>"></span>
											<?php }
										} ?>
										<span><?=$val['options']['size']?></span>
									</div>
								</div>
								<h3><?=number_format($val['price_tr'],2,',','.')?> ₺</h3>
								<div class="quantity">
									<button type="button" class="quantity-left-minus"  data-id="<?=$key?>" data-type="minus">-</button>
									<input type="text" id="quantity" name="quantity" value="<?=$val['qty']?>">
									<button type="button" class="quantity-right-plus" data-id="<?=$key?>" data-type="plus" >+</button>

								</div>
								<h3><?=number_format($val['price_tr']*$val['qty'],2,',','.')?> ₺</h3>
								<button onclick="productDeleteToCart('<?=$key?>')" type="button"><img src="<?=site_url('assets/Front/')?>images/icons/cancel.svg"></button>
							</div>
						<?php } ?>

					</div>
					<div class="subtotal">
						<p>toplam : <b><?=number_format($total,2,',','.')?> ₺</b></p>
						<p style="font-size: 16px;margin-top: 10px;">Teslimat Süresi : 10 - 15 İş Günü</p>
					</div>
					<div class="links">
						<a href="<?=site_url()?>">Alışverişe devam et</a>
						<a href="<?=site_url('cart/shopping')?>">Sipariş ver</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){

		var quantitiy=0;
		$('.quantity-right-plus').click(function(e){
			e.preventDefault();
			var quantity = parseInt($('#quantity').val());
			$('#quantity').val(quantity + 1);

		});

		$('.quantity-left-minus').click(function(e){
			e.preventDefault();
			var quantity = parseInt($('#quantity').val());
			if(quantity>1){
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>