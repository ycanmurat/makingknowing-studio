<?include("header.php");?>

<section class="index" style="min-height: 40vh;">
	<div class="owl-carousel owl-theme owl-home">
		<div class="item" style="background-image:url('images/exslider.png');"></div>
		<div class="item" style="background-image:url('images/fakewp.jpg');"></div>
		<div class="item" style="background-image:url('images/exslider.png');"></div>
		<div class="item" style="background-image:url('images/fakewp.jpg');"></div>
		<div class="item" style="background-image:url('images/exslider.png');"></div>
		<div class="item" style="background-image:url('images/fakewp.jpg');"></div>
		<div class="item" style="background-image:url('images/exslider.png');"></div>
		<div class="item" style="background-image:url('images/fakewp.jpg');"></div>
		<div class="item" style="background-image:url('images/exslider.png');"></div>
		<div class="item" style="background-image:url('images/fakewp.jpg');"></div>
		<div class="item d-lg-block d-none">
			<video autoplay controls controlsList="nodownload" muted class="homeVideo">
				<source src="images/uatest.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
	<div class="item d-lg-none d-block">
		<video autoplay controls controlsList="nodownload" muted class="homeVideo">
			<source src="images/uamobile.mp4" type="video/mp4" />
		</video>
	</div>
</section>

<script>
	$('.owl-home').owlCarousel({
		loop:false,
		margin:0,
		autoplay:true,
		autoplayTimeout:200,
		autoplayHoverPause:false,
		smartSpeed : 10,
		nav:false,
		touchDag:false,
		mouseDrag:false,
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
</script>
<?include("footer.php");?>
