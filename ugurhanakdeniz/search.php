<?include("header.php");?>

<section class="projects">
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<h2 class="searchTitle">Searched: Hakaan</h2>
			</div>
			<div class="col-md-4">
				<div class="item">
					<img src="images/Layer 5.jpeg">
					<h3>HAKAAN YILDIRIM</h3>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="projectDetail">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1>HAKAAN YILDIRIM</h1>
				<div class="wrapperArea">
					<button id="closePop"><img src="images/icons/cancel.svg" alt="Close" title="Close"></button>
					<div class="owl-carousel owl-theme owl-projectDetail">
						<div class="item mVideo" data-dot="<img class='vIcon' src='images/icons/play-button.svg'>">
							<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/477459627?title=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>

						</div>
						<div class="item" data-dot="<img src='images/Layer 5.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 5.jpeg">
								<img src="images/Layer 5.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 6.jpeg">
								<img src="images/Layer 6.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
						<div class="item" data-dot="<img src='images/Layer 6.jpeg'>">
							<a data-fancybox="ornekgaleri1" href="images/Layer 7.jpeg">
								<img src="images/Layer 7.jpeg">
								<h3>HAKAAN YILDIRIM SS21</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	var pojectOwl = $('.owl-projectDetail').owlCarousel({
		loop:false,
		margin:10,
		dotsData: true,
		nav:true,
		dots:true,
		navText: ["<img src='images/icons/left-arrow.svg'>","<img src='images/icons/right-arrow.svg'>"],
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
	$('.owl-dot').click(function() {
		pojectOwl.trigger('to.owl.carousel', [$(this).index(), 300]);
	})

	$('section.projects  .item').click(function(event) {
		$('.projectDetail').addClass('active');
	});
	$('section.projectDetail button#closePop').click(function(event) {
		$('.projectDetail').removeClass('active');
		var vidMain = new Vimeo.Player($('.mVideo').get(0));
		vidMain.pause();
	});
	
	pojectOwl.on('changed.owl.carousel', function(event) {
		var vidMain = new Vimeo.Player($('.mVideo').get(0));
		vidMain.pause();

	});
</script>
<script src="https://player.vimeo.com/api/player.js"></script>
<?include("footer.php");?>
