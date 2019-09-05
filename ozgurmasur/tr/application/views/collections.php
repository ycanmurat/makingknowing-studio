<section class="collections">
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/plyr.css">
	<div id="v-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?=$Lang->collectionVideoId?>?autoplay=1&loop=1&autopause=0"></div>
	<div class="categories d-flex">
		<?php foreach ($list as $key => $val) { ?>
		<div class="item">
			<a href="<?=site_url('collections/'.$val->slug.'/'.$val->Id)?>">
				<h3><?=$val->category_title?></h3>
				<img src="<?=main_url($val->image)?>">
			</a>
		</div>
		<?php } ?>
	</div>
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
	const vimeoPlayer = new Plyr('#v-player', {controls,autoplay:true,loop:true,height:'300px'});
</script>