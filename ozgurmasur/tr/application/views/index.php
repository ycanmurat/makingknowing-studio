<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/plyr.css">
<section class="index">

	<!--<video id="player" playsinline controls autoplay allow="autoplay">
		<source src="test.mp4" type="video/mp4" />
	</video>-->
	<div id="v-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?=$Lang->mainPageVideoId?>?autoplay=1&loop=1&autopause=0"></div>

</section>

<script src="<?=site_url('assets/Front/')?>js/plyr.min.js"></script>
<script>
	const controls = `
	<div class="plyr__controls om-controls">
	<div class="om-wrapper">
	<button type="button" class="plyr__control play-btn" aria-label="Play, {title}" data-plyr="play">


	<img class="icon--not-pressed" xlink:href="#plyr-play" role="presentation" class src="<?=site_url('assets/Front/')?>images/icons/play-button.svg">

	<img class="icon--pressed role="presentation""  xlink:href="#plyr-pause" src="<?=site_url('assets/Front/')?>images/icons/pause.svg">

	<span class="label--pressed plyr__tooltip" role="tooltip">Pause</span>
	<span class="label--not-pressed plyr__tooltip" role="tooltip">Play</span>
	</button>

	<div class="plyr__progress om-progress">

	<input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" aria-label="Seek">

	<progress class="plyr__progress__buffer" min="0" max="100" value="0">% buffered</progress>

	<span role="tooltip" class="plyr__tooltip">00:00</span>
	</div>

	<div class="om-ts-area">

	<div class="om-timearea">
	<div class="plyr__time plyr__time--current" aria-label="Current time">00:00</div>
	<div class="plyr__time plyr__time--duration" aria-label="Duration">00:00</div>
	</div>

	<div class="om-soundarea">
	<button type="button" class="plyr__control" aria-label="Mute" data-plyr="mute">
	<svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-muted"></use></svg>
	<svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-volume"></use></svg>
	<span class="label--pressed plyr__tooltip" role="tooltip">Unmute</span>
	<span class="label--not-pressed plyr__tooltip" role="tooltip">Mute</span>
	</button>

	<div class="plyr__volume">
	<input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" aria-label="Volume">
	</div>
	</div>

	<button type="button" class="plyr__control om-fullscreen" data-plyr="fullscreen">

	<img class="icon--pressed" role="presentation" xlink:href="#plyr-exit-fullscreen" src="<?=site_url('assets/Front/')?>images/icons/minimize.svg" >
	<img class="icon--not-pressed" role="presentation" xlink:href="#plyr-enter-fullscreen" src="<?=site_url('assets/Front/')?>images/icons/maximize.svg">

	<span class="label--pressed plyr__tooltip" role="tooltip">Exit fullscreen</span>
	<span class="label--not-pressed plyr__tooltip" role="tooltip">Enter fullscreen</span>
	</button>

	</div>

	</div>
	</div>
	`;

	const vimeoPlayer = new Plyr('#v-player', {
		controls,
		loop:{
			active:true
		},
		muted:true,
		vimeo:{
			muted:true
		},
		hideControls:false,
		autoplay:true
	});


</script>
<!--
<div id="popupDiv" class="indexPopup">
	<p>Ramazan Bayramı dolayısıyla 10-15 İş Günü olan teslim süremiz 17 Mayıs 2021 tarihine kadar 20-25 İş Gününe uzatılacaktır.</p>
</div>
<script>
	$('.indexPopup').click(function(event) {
		$(this).removeClass('active');
	});
</script>
<style>
	.indexPopup:before {content: 'X';position: absolute;right: 30px;top: 30px;font-size: 30px;}
	.indexPopup {
		position: fixed;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
		display: flex;
		z-index: 99;
		background: #000000;
		color: white;
		align-items: center;
		justify-content: center;
		transition: all ease .6s;
		visibility: hidden;
		opacity: 0;
		width: 500px;
		cursor: pointer;
		height: 210px;
		margin: auto;
	}

	.indexPopup p {
		background: black;
		padding: 13px;
	}

	.indexPopup.active{
		display:flex;
		visibility: visible;
		opacity: 1;
	}
</style>

<script type="text/javascript">
	$(document).ready(function() {

		if (!readCookie('hide')) {
			$('#popupDiv').addClass('active');
		}

		$('.indexPopup').click(function() {
			$('#popupDiv').removeClass('active');
			createCookie('hide', true, 1)
			return false;
		});

	});
</script>
-->