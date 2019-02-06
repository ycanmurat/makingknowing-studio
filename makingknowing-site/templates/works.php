<?include("header.php");?>

<section class="works">
	<a class="backOff" href="index.php"><img src="images/arrow.svg">Back Off</a>
	<div class="wrapper">
		<div class="owl-carousel owl-theme owl-works">
			<div class="item" data-dot="<button>Raisa Vanessa</button>">
				<a href="works-detail.php">
					<img src="https://fakeimg.pl/1200x800/">
					<h2>Raisa Vanessa</h2>
				</a>
			</div>
			<div class="item" data-dot="<button>Lorem ipsum dolor</button>">
				<a href="works-detail.php">
					<img src="https://fakeimg.pl/1200x800/">
					<h2>Lorem ipsum dolor</h2>
				</a>
			</div>
			<div class="item" data-dot="<button>HAKAAN YILDIRIM</button>">
				<a href="works-detail.php">
					<img src="https://fakeimg.pl/1200x800/">
					<h2>HAKAAN YILDIRIM</h2>
				</a>
			</div>
			<div class="item" data-dot="<button>Neversaydie</button>">
				<a href="works-detail.php">
					<img src="https://fakeimg.pl/1200x800/">
					<h2>Neversaydie</h2>
				</a>
			</div>
			<div class="item" data-dot="<button>The Pill</button>">
				<a href="works-detail.php">
					<img src="https://fakeimg.pl/1200x800/">
					<h2>The Pill</h2>
				</a>
			</div>
		</div>
	</div>		
</section>


<?include("footer.php");?>




<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-works').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		navText: ["<img src='images/arrow.svg'>","<img src='images/arrow.svg'>"],
		dots:true,
		dotsData: true,
		stagePadding: 90,
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