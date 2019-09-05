<section class="payment-result">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

                <?php if (!isset($error)) { ?>
				<div class="result OK">
					<img src="<?=site_url('assets/Front/images/icons/success.svg')?>">
					<h3>payment confirmed</h3>
					<h4>order id : <b># <?=$detail->id?></b></h4>
					<a href="<?=site_url('account/orders')?>">you can track your order here</a>
					<span>or</span>
					<a href="<?=site_url()?>">continue to shop</a>
				</div>
                <?php }else{ ?>
					<div class="result ERROR">
						<img src="<?=site_url('assets/Front/images/icons/notsuccess.svg')?>">
						<h3>payment failed</h3>
						<p>Please check your card balance or contact with your bank.</p>
						<span>Why did i get an error ?</span>
						<h5><?=$error->errorGroup ?? ''?> ( <?=$error->errorMessage ?? ''?> )</h5>
						<a href="<?=site_url()?>">Return Home</a>
					</div>
                <?php } ?>
			</div>
		</div>
	</div>
</section>