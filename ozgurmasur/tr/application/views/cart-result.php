<section class="payment-result">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

                <?php if (!isset($error)) { ?>
				<div class="result OK">
					<img src="<?=site_url('assets/Front/images/icons/success.svg')?>">
					<h3>Ödeme Onaylandı</h3>
					<h4>order id : <b># <?=$detail->id?></b></h4>
					<a href="<?=site_url('account/orders')?>">Siparişlerinizi buradan takip edebilir</a>
					<span>veya</span>
					<a href="<?=site_url()?>">Alışverişe devam edebilirsiniz</a>
				</div>
                <?php }else{ ?>
					<div class="result ERROR">
						<img src="<?=site_url('assets/Front/images/icons/notsuccess.svg')?>">
						<h3>Ödeme Başarısız</h3>
						<p>Lütfen kart bakiyenizi kontrol edin veya bankanızla iletişime geçin.</p>
						<span>Neden hata Aldım ?</span>
						<h5><?=$error->errorGroup ?? ''?> ( <?=$error->errorMessage ?? ''?> )</h5>
						<a href="<?=site_url()?>">Return Home</a>
					</div>
                <?php } ?>
			</div>
		</div>
	</div>
</section>