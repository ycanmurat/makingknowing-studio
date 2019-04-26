<section class="podcast">
	<a class="backOff" href="makerknower.php"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Backoff</a>
	<div class="test">
		<div class="voiceBars">
			<div id="bars">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
		</div>

		<div class="wrapper">
			<div class="owl-carousel owl-theme owl-podcast">
				<div class="item">
					<p>Lorem ipsum0</p>
					<audio class="podcastItem" controls nodownload preload="metadata">
						<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-13.mp3" type="audio/mpeg"/>
					</audio>
					<div class="btnGroup">
						<button class="play"><img src="<?=site_url('assets/Front/')?>images/playBtn.svg"></button>
						<button class="pause"><img src="<?=site_url('assets/Front/')?>images/pauseBtn.svg"></button>
					</div>
				</div>

				<div class="item">
					<p>Lorem ipsum1</p>
					<audio class="podcastItem" controls nodownload preload="metadata">
						<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-7.mp3" type="audio/mpeg"/>
					</audio>
					<div class="btnGroup">
						<button class="play"><img src="<?=site_url('assets/Front/')?>images/playBtn.svg"></button>
						<button class="pause"><img src="<?=site_url('assets/Front/')?>images/pauseBtn.svg"></button>
					</div>
				</div>
				<div class="item">
					<p>Lorem ipsum2</p>
					<audio class="podcastItem" controls nodownload preload="metadata">
						<source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3" type="audio/mpeg"/>
					</audio>
					<div class="btnGroup">
						<button class="play"><img src="<?=site_url('assets/Front/')?>images/playBtn.svg"></button>
						<button class="pause"><img src="<?=site_url('assets/Front/')?>images/pauseBtn.svg"></button>
					</div>
				</div>

			</div>
		</div>




	</div>



	<div class="podText">
		<h2 class="customerTitle">Listen in on The Latest Interviews of</h2>
		<p>Maker Knowers</p>
	</div>
</section>

<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-podcast').owlCarousel({
		loop:false,
		margin:0,
		nav:true,
		navText: ["<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>","<img src='<?=site_url('assets/Front/')?>images/arrow.svg'>"],
		dots:false,
		touchDrag:false,
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

	owl.on('changed.owl.carousel', function(event) {
		var firstSound = $('.owl-item.active audio').get(0).pause();
		$('section.podcast .bar').css('animation-play-state','paused')
	});

	$(document).ready(function() {
		var firstSound = $('.owl-item.active audio').get(0);
		$('.play').click(function(event) {
			var firstSound = $('.owl-item.active audio').get(0);
			$('section.podcast .bar').css('animation-play-state','running')
			firstSound.play();
		});
		$('.pause').click(function(event) {
			$('section.podcast .bar').css('animation-play-state','paused')
			var firstSound = $('.owl-item.active audio').get(0);
			firstSound.pause();
		});
	});


</script>



