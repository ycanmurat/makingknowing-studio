<section class="stockists">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.8370035160133!2d28.988140815662963!3d41.0555 000 00 002024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7329ab4c77b%3A0xd4f278ecd740a39!2zw5Z6Z8O8ciBNYXN1ciDEsHN0YW5idWw!5e0!3m2!1str!2str!4v1608732891790!5m2!1str!2str" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="area">
					<?php foreach ($list as $key => $val) { ?> 
						<?php if ($key != 0 AND $key%2 == 0) { ?>
							</div>
							<div class="area">
						<?php } ?>
						<div class="item">
							<h2><?=$val->name?></h2>
							<h3><?=$val->address?></h3>
							<h4><?=$val->gsm?></h4>
							<p><?=$val->email?></p>
							<p><?=$val->site?></p>
						</div>
					<?php } ?>
				<?php if (!($key != 0 AND $key%2 == 0)) { ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>