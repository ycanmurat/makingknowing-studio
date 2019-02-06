<?include("header.php");?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


<section class="worksDetail">
	<a class="backOff" href="works.php"><img src="images/arrow.svg">Back Off</a>
	<div class="wrapper">
		<div class="owl-carousel owl-theme owl-worksDetail">
			<div class="item">
				<div class="img video">
					<a data-fancybox="video" href="https://www.youtube.com/watch?v=EnHkibxvdfU">
						<img src="https://fakeimg.pl/710x530/?text=video-710x530">
					</a>
				</div>
			</div>

			<div class="item">
				<div class="img collectionImages">
					<p>Koleksiyon Başlığı</p>
					<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x800/"><img src="https://fakeimg.pl/710x530/"></a>
				</div>
			</div>

			<div class="item">
				<div class="img collectionImages">
					<p>Koleksiyon Başlığı</p>
					<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x800/"><img src="https://fakeimg.pl/710x530/"></a>
				</div>
			</div>

			<div class="item content">
				<div class="wrapper">
					<h2>Fall Winter'21 Collection</h2>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptate pariatur illo, molestias, ducimus error ab officiis quo earum beatae nemo eius optio, ratione molestiae. Sit, obcaecati beatae. Iste, ipsum! Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Cupiditate aspernatur consectetur debitis minus maiores tenetur fugit vitae praesentium! Molestias, mollitia eos dolorem maxime dolorum delectus sequi ad necessitatibus consectetur vitae! Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Sunt quibusdam numquam animi optio dolore, dicta dolores vitae! Omnis vitae ut voluptatem. Id ipsum illo vero saepe corrupti aut fugiat nam. Lorem </p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos similique, deserunt alias illum aliquid temporibus. Veniam dolorem voluptas tenetur consectetur repellat, repellendus dolorum non praesentium, accusamus iusto dolores reprehenderit earum?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse perferendis natus pariatur laborum recusandae? Aut autem, dolores aperiam ipsa numquam neque in. Delectus veniam a saepe sed, cupiditate. Voluptatem, dolores!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="customerName" src="https://fakeimg.pl/1250x700/efefee/ddd/">
</section>


<div style="display: none;">
	<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x801/"><img src="https://fakeimg.pl/1200x800/"></a>
	<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x802/"><img src="https://fakeimg.pl/1200x800/"></a>
	<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x803/"><img src="https://fakeimg.pl/1200x800/"></a>
	<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x804/"><img src="https://fakeimg.pl/1200x800/"></a>
	<a data-fancybox="images" data-caption="Raisa Vanessa" href="https://fakeimg.pl/1200x805/"><img src="https://fakeimg.pl/1200x800/"></a>
</div>


<?include("footer.php");?>



<!-- main.js ye taşınmayacak ! -->
<script>
	var owl = $('.owl-worksDetail').owlCarousel({
		loop:false,
		margin:0,
		nav:true,
		navText: ["<img src='images/arrow.svg'>","<img src='images/arrow.svg'>"],
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

</script>