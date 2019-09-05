<section class="press">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php foreach ($news as $key => $val) {
					if ($key%2 == 0) { ?>
						<div class="item">
							<div class="imgArea ml-5">
								<?php if (!empty($val->image)) { ?>
									<img src="<?=site_url($val->image)?>" alt="<?=$val->title?>">
								<?php } ?>
								<?php if (!empty($val->image2)) { ?>
									<img src="<?=site_url($val->image2)?>" alt="<?=$val->title?>">
								<?php } ?>
								<?php if (!empty($val->image3)) { ?>
									<img src="<?=site_url($val->image3)?>" alt="<?=$val->title?>">
								<?php } ?>
							</div>
							<div class="textArea">
								<h2><?=$val->title?></h2>
								<div class="content">
									<p><?=$val->content?></p>
								</div>
							</div>

						</div>
					<?php }else{ ?>
						<div class="item">
							<div class="imgArea mr-5">
								<?php if (!empty($val->image)) { ?>
									<img src="<?=site_url($val->image)?>" alt="<?=$val->title?>">
								<?php } ?>
								<?php if (!empty($val->image2)) { ?>
									<img src="<?=site_url($val->image2)?>" alt="<?=$val->title?>">
								<?php } ?>
								<?php if (!empty($val->image3)) { ?>
									<img src="<?=site_url($val->image3)?>" alt="<?=$val->title?>">
								<?php } ?>
							</div>
							<div class="textArea">
								<h2><?=$val->title?></h2>
								<div class="content">
									<p><?=$val->content?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
				
			</div>
		</div>
	</div>
</section>