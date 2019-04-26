<section class="works">
	<a class="backOff" href="<?=site_url()?>"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</a>
	<div class="wrapper">
		<div class="owl-carousel owl-theme owl-works">
			<?php foreach ($works as $key => $val) { ?>
				<div class="item" data-dot="<button><?=$val->menu?></button>">
					<a href="<?=site_url('works/detail/'.$val->Id)?>">
						<img src="<?=site_url($val->menu_image)?>">
						<h2><?=$val->menu?></h2>
					</a>
				</div>
			<?php } ?>



		</div>
	</div>		
</section>




<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-works').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		navText: ["<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>","<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>"],
		dots:true,
		dotsData: true,
		smartSpeed:1200,
		responsive:{
			0:{
				items:1,stagePadding: 10
			},
			600:{
				items:1
			},
			1000:{
				items:1,stagePadding: 90
			}
		}
	});
	owl.on('mousewheel', '.owl-stage', function (e) {
		if (e.deltaY>0) {
			owl.trigger('prev.owl');
		} else{
			owl.trigger('next.owl');
		}
		e.preventDefault();
	});
</script>