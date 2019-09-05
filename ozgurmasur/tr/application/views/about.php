<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?=site_url($about->image)?>" alt="OZGUR MASUR" title="OZGUR MASUR" class="banner">
				<!--<img src="images/omsiyah.png" alt="Özgür Masur">-->
				<?=$about->content_tr?>
			</div>
		</div>
	</div>
</section>
<style>
	section.about p {
		font-weight: 300;
		text-align: center;
		font-size: 1rem;
		line-height: 25px;
		max-width: 100%;
		margin: auto;
		margin-bottom: 50px;
		margin-top: 40px;
	}
	section.about p:nth-child(2) {
		margin-bottom: -20px;
	}
</style>