<section class="home aboutus">
	<div class="owl-carousel owl-theme owl-home">
		<div class="item making">
			<button class="scrollOn"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Scroll On</button>
			<div class="wrapper about">
				<div class="aboutDetailText">
					<h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam qui nostrum, officia magnam? Ex a alias magni ipsa harum temporibus reprehenderit, minima odit vero repudiandae numquam sint itaque, facere assumenda. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Accusantium pariatur, tenetur animi ipsam itaque obcaecati numquam provident iste cum, sed, voluptatum, reiciendis repudiandae minima a eum officiis? Optio, repellendus, molestiae.</h2>
				</div>
				<!-- No Content -->
			</div>

			<a class="goHomepage" href="about.php"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</a>
		</div>
		<div class="item knowing">
			<button class="backOff"><img src="images/arrow.svg">Back Off</button>
			<div class="wrapper works">
				<div class="aboutDetailText">
					<h2>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Harum quas aspernatur quia blanditiis. Quam beatae veritatis animi facere dolorum nulla, reiciendis illum ducimus eum temporibus, sequi, optio consequuntur alias totam.</h2>
				</div>
				<!-- No Content -->
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

	});

</script>