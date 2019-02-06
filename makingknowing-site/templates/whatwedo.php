<?include("header.php");?>



<section class="home wwd">
	<div class="owl-carousel owl-theme owl-home">


		<div class="item">
			<button id="scrollOn"><img src="images/arrow.svg">Scroll On</button>
			<div class="wrapper about">
				<a href="whatwedo-detail.php">
					<div class="img">
						<img src="https://fakeimg.pl/300x300/" alt="">
						<h2>Brand Building</h2>
					</div>

				</a>
			</div>
			<div class="wrapper">
				<a href="whatwedo-detail.php">
					<div class="img">
						<h2>Advertising</h2>
						<img src="https://fakeimg.pl/300x300/" alt="">
					</div>
				</a>
			</div>
			<a class="goHomepage" href="about.php"><img src="images/arrow.svg">Back Off</a>
		</div>
		<div class="item">
			<button id="backOff"><img src="images/arrow.svg">Back Off</button>
			<div class="wrapper works">
				<a href="whatwedo-detail.php">
					<div class="img">
						<img src="https://fakeimg.pl/300x300/" alt="">
						<h2>Marketing</h2>
					</div>
				</a>
			</div>

			<div class="wrapper">
				<a href="whatwedo-detail.php">
					<h2>Web Development</h2>
					<div class="img">
						<img src="https://fakeimg.pl/300x300/" alt="">
					</div>
				</a>
			</div>

			<div class="wrapper">
				<a href="whatwedo-detail.php">
					<div class="img">
						<img src="https://fakeimg.pl/300x300/" alt="">
						<h2>Web Design</h2>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		var owl = $('.owl-home').owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			stagePadding:0,
			smartSpeed:1900,
			dots:false,
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

		$('#scrollOn').click(function(event) {
			owl.trigger('next.owl');
		});

		$('#backOff').click(function(event) {
			owl.trigger('prev.owl');
		});

		owl.on('mousewheel', '.owl-stage', function (e) {
			if (e.deltaY>0) {
				owl.trigger('prev.owl');
			} else{
				owl.trigger('next.owl');
			}
			e.preventDefault();
		});

		$('.loading p').click(function(event) {
			$('.loading .img').addClass('hide');
			$('.loading p').hide();
			$('.loading').hide();
		});

	});
</script>



<?include("footer.php");?>