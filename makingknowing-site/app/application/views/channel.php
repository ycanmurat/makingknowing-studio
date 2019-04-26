<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<section class="channel">
	<a class="backOff" href="makerknower.php"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Backoff</a>
	<div class="wrapper">
		<div class="owl-carousel owl-theme owl-channel">
			<div class="item">
				<div class="img">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/1200x800/">
					</a>

				</div>
				<h2>Raisa Vanessa</h2>
				<p>Raisa Vanessa</p>
				<p>Spring Summer 2021 Collection</p>
				<p>Creative Direction - Campaign</p>
			</div>
			<div class="item">
				<div class="img">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/1200x800/">
					</a>
				</div>
				<h2>Lorem ipsum dolor</h2>
				<p>Raisa Vanessa</p>
				<p>Spring Summer 2021 Collection</p>
				<p>Creative Direction - Campaign</p>
			</div>
			<div class="item">
				<div class="img">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/1200x800/">
					</a>
				</div>
				<h2>HAKAAN YILDIRIM</h2>
				<p>Raisa Vanessa</p>
				<p>Spring Summer 2021 Collection</p>
				<p>Creative Direction - Campaign</p>
			</div>
			<div class="item">
				<div class="img">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/1200x800/">
					</a>
				</div>
				<h2>Neversaydie</h2>
				<p>Raisa Vanessa</p>
				<p>Spring Summer 2021 Collection</p>
				<p>Creative Direction - Campaign</p>
			</div>
			<div class="item">
				<div class="img">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/1200x800/">
					</a>
				</div>
				<h2>The Pill</h2>
				<p>Raisa Vanessa</p>
				<p>Spring Summer 2021 Collection</p>
				<p>Creative Direction - Campaign</p>
			</div>
		</div>
	</div>		
</section>
<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-channel').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		navText: ["<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>","<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>"],
		dots:false,
		smartSpeed:1200,
		responsive:{
			0:{
				items:1
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