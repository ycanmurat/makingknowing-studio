
<!--<div class="loading">
	<div class="img">
		<img src="images/yb-alt.svg">
		<img src="images/yb-yan.svg">
		<img src="images/yb-son.svg">
	</div>
	<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Officia iste necessitatibus tempore temporibus aspernatur magni eius ad. Quos nihil dolore aliquam iste repellat ex eaque nesciunt accusantium laudantium quidem, dolores!</p>
</div>-->

<section class="home index">
	<div class="owl-carousel owl-theme owl-home">
		<div class="item making">
			<div class="socials">
				Listen in on The <br>Latest Interviews of <br>The Maker Knowers
			</div>
			<button class="scrollOn"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Scroll On</button>

			<div class="wrapper about">
				<a href="<?=site_url('about')?>">
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/1m.png">
						<h2>About</h2>
					</div>
				</a>
			</div>
			<div class="wrapper knower">
				<a href="<?=site_url('makerknower')?>">
					<div class="img">
						<h2>Maker Knower</h2>
						<img src="<?=site_url()?>/assets/Front/images/temp/2a.png">
					</div>
				</a>
			</div>
		</div>

		<div class="item knowing">
			<button class="backOff"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</button>
			<button class="scrollOn mid"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Scroll On</button>
			<div class="wrapper works">
				<a href="<?=site_url('works')?>">
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/3k.png">
						<h2>Works</h2>
					</div>
				</a>
			</div>

			<div class="wrapper careers">
				<a href="<?=site_url('contact/careers')?>">
					<h2>Careers</h2>
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/4i.png">
					</div>
				</a>
			</div>

			<div class="wrapper contact">
				<a href="<?=site_url('contact')?>" id="indexContactUs">
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/5n.png">
						<h2>Contact Us</h2>
					</div>
				</a>
			</div>
		</div>

		<!-- footer -->
		<div class="item making maker">
			<button class="backOff"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</button>
			<button class="scrollOn"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Scroll On</button>
			<div class="wrapper about newsletter">
				<a href="javascript:void(0);">
					<form action="#">
						<input id="katilEmail" type="text" placeholder="E-Mail Adress">
						<button onclick="katilabasti()">Subscribe</button>
					</form>
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/6g.png">
						<h2>Newsletter</h2>
					</div>
				</a>
			</div>
			<script>
				
			</script>
			<div class="wrapper knower privacy">
				<a href="<?=site_url('Statics/detail/privacy-policy')?>">
					<div class="img">
						<h2>Privacy Policy</h2>
						<img src="<?=site_url()?>/assets/Front/images/temp/7k.png">
					</div>
				</a>
			</div>
		</div>

		<div class="item knowing socials knower">
			<button class="backOff"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</button>
			<div class="wrapper works">
				<a href="javascript:void(0);">
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/8n.png">
						<h2>Social Media</h2>
					</div>
				</a>
				<div class="groups">
					<a href="<?=$Lang->instagram?>">Instagram</a>
					<a href="<?=$Lang->facebook?>">Facebook</a>
					<a href="<?=$Lang->twitter?>">Twitter</a>
					<a href="<?=$Lang->linkedin?>">Linkedin</a>
					<a href="<?=$Lang->pinterest?>">Pinterest</a>
					<a href="<?=$Lang->youtube?>">Youtube</a>
				</div>
			</div>

			<div class="wrapper careers selectLang">
				<a href="#">
					<!--<h2><span>TR</span>/<span class="active">ENG</span></h2>-->
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/9o.png">
					</div>
				</a>
			</div>

			<div class="wrapper contact search">
				<a href="javascript:void(0);">
					<div class="img">
						<img src="<?=site_url()?>/assets/Front/images/temp/11i.png">
						<!--
						<form action="">
							<input type="text" placeholder="Search">
						</form>
						-->
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	function katilabasti() {
    var email = $('#katilEmail').val();
    $.ajax({
        url: '<?=site_url()?>Home/eBulletin/',
        method: 'POST',
        data:{email:email},
        success: function (result) {
            if (result == 2) {
                swal({
                    title: "ERROR !",
                    text: 'please enter a valid email ',
                    icon: "error",
                    button: "OK",
                });
            }else if (result != 1) {
                swal({
                    title: "ERROR !",
                    text: 'We had an error! please try later',
                    icon: "error",
                    button: "OK",
                });
            }else{
                $('#katilEmail').val('');
                swal({
                    title: "Success",
                    text: "Your e-mail address is registered in the system.",
                    icon: "success",
                    button: "OK",
                });
            }
        },
        error: function (result) {
            swal({
                title: "ERROR !",
                text: "Sorry, we encountered a technical error.",
                icon: "error",
                button: "OK",
            });
        }
    });
}
</script>