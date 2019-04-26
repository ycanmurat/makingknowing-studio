
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


<section class="worksDetail">
	<a class="backOff" href="<?=site_url('works')?>"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</a>
	<div class="wrapper">
		<div class="owl-carousel owl-theme owl-worksDetail">


			<?php foreach ($detail->sub as $key => $val) { ?> 
				<div class="item">
					<div class="img collectionImages">
						<p>KATEGORİ BAŞLIĞI BURADA YER ALACAK</p>
						<a data-fancybox="fw21" data-caption="<?=$detail->menu?>" href="<?=site_url($val->menu_image)?>">
							<img src="<?=site_url($val->menu_image)?>">
						</a>
					</div>
				</div>
			<?php } ?>


		</div>
	</div>
	<img class="customerName" src="<?=site_url($detail->background_image)?>"> <!-- Sezon isminin yazdığı arkaplan -->
</section>


<div style="display: none;">
	<?php foreach ($detail->sub as $key => $val) { ?> 
		<a data-fancybox="fw21" data-caption="<?=$detail->menu?>" href="<?=site_url($val->menu_image)?>">
			<img style="max-height:450px" src="<?=site_url($val->menu_image)?>">
		</a>
	<?php } ?>
</div>




<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-worksDetail').owlCarousel({
		loop:false,
		margin:0,
		nav:true,
		navText: ["<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>","<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>"],
		dots:false,
		touchDrag:false,
		smartSpeed:1200,
		responsive:{
			0:{
				items:1,stagePadding:10
			},
			600:{
				items:1
			},
			1000:{
				items:1
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