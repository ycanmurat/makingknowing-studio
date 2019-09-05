<section class="listing shop">
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/plyr.css">
	<div id="v-player" data-plyr-provider="vimeo" data-plyr-embed-id="<?=$Lang->shopVideoId?>?autoplay=1&loop=1&autopause=0"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if (explode('.com/', current_url())[1] == 'search') { ?>
					<p>"<?=count($products)?>" results for "<?=$searchKey?>"</p>
				<?php }else{ ?>
					<h1>Prêt à Couture</h1>
				<?php } ?>
			</div>
			<div class="col-md-12">
				<div class="row" style="min-height:250px">
					<!-- Bu for each tüm ürünleri getirecek -->
					<?php foreach ($products as $key => $val) { ?>
						<div class="col-md-4 col-6">
							<div class="item">
								<a href="<?=site_url('product/'.$val->slug.'/'.$val->Id)?>">
									<img src="<?=site_url($val->product_image)?>" alt="<?=$val->product_name?>" title="<?=$val->product_name?>">
									<h2><span><?=$val->product_name?></span> <b><?=number_format($val->price,2,',','.') ?>$</b> </h2>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>

				<ol class="pagination">
                    <li class="page-item <?=$page <= 1 ? 'disabled':''?>">
                        <a class="page-link" href="<?=current_url().'?p='.($page-1)?>" tabindex="-1" aria-disabled="true" >Prev</a>
                    </li>
                    <?php for ($i=1; $i <= $pageCount ; $i++) { ?>
                        <li class="page-item"><a class="page-link <?=$i==$page?'active':''?>" href="<?=current_url().'?p='.$i?>"><?=$i?></a></li>
                    <?php } ?>
                    <li class="page-item <?=$page >= $pageCount? 'disabled':''?>">
                        <a class="page-link" href="<?=current_url().'?p='.($page+1)?>">Next</a>
                    </li>
				</ol>
				
			</div>
		</div>
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
<style>
	ol.pagination {display: flex;margin: auto;width: 250px;justify-content: center;}
	ol.pagination li {padding: 0px 3px;}
	ol.pagination li a {background: black;color: white;padding: 4px 8px;font-size: 21px;}
	ol.pagination li.disabled {display: none;}
</style>