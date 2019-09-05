<section class="listing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>results for <?=$searchKey?>"</p>
			</div>

			<div class="col-md-12">
				<div class="row">
					<?php foreach ($products as $key => $val) { ?>
						<div class="col-md-4 col-6">
							<div class="item">
								<a href="<?=site_url('product/'.$val->slug.'/'.$val->Id)?>">
									<img src="<?=site_url($val->product_image)?>" alt="<?=$val->product_name?>" title="<?=$val->product_name?>">
									<h2><span><?=$val->product_name?></span> <b><?=number_format($val->price,2,',','.') ?>$</b> </h2>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>