<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>contact us</h4>
			</div>
			<div class="col-md-7">
				<form action="javascript:void(0)" onsubmit="return false" method="POST">
					<div class="wrapper">
						<select name="c_section" id="c_section">
							<option value="">Choose a service.. *</option>
							<option value="Press Office">Press Office</option>
							<option value="Pret a Couture">Pret a Couture</option>
							<option value="Haute Couture">Haute Couture</option>
							<option value="Bridal">Bridal</option>
							<option value="Other">Other</option>
						</select>
						
					</div>
<br>
						<br>
					<div class="wrapper">
						<input type="text" placeholder="NAME & SURNAME" id="c_name">
					</div>
					<div class="wrapper">
						<input type="text" placeholder="E-MAIL" id="c_email">
					</div>
					<div class="wrapper">
						<input type="text" placeholder="PHONE NUMBER" id="c_phone">
					</div>
					<div class="wrapper">
						<textarea id="c_message" placeholder="MESSAGE"></textarea>
					</div>
					<button type="button" onclick="addToContact()">Send</button>
				</form>
			</div>
			<div class="col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.8370035160133!2d28.988140815662963!3d41.0555 000 00 002024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab7329ab4c77b%3A0xd4f278ecd740a39!2zw5Z6Z8O8ciBNYXN1ciDEsHN0YW5idWw!5e0!3m2!1str!2str!4v1608642111840!5m2!1str!2str" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-md-12 text-center">
				<div class="item">
					<h5><?=$Lang->contactFirstTitle?></h5>
					<p><?=$Lang->contactFirstaddress?></p>

					<h5><?=$Lang->contactSecondTitle?></h5>
					<p><?=$Lang->contactSecondaddress?></p>
					<!--<div class="sayhi">
						<h5>WORK NUMBER <a href="tel:0555 000 00 00">0555 000 00 00</a></h5>
						<h5>SAY HELLO <a href="tel:0555 000 00 00">0555 000 00 00</a></h5>
					</div>-->
					<div class="socialLinks">
						<a href="<?=$Lang->instagram?>"><img src="<?=site_url('assets/Front/')?>images/icons/instagram.svg"></a>
						<a href="<?=$Lang->facebook?>"><img src="<?=site_url('assets/Front/')?>images/icons/facebook.svg"></a>
						<a href="<?=$Lang->youtube?>"><img src="<?=site_url('assets/Front/')?>images/icons/youtube.svg"></a>
						<a href="<?=$Lang->pinterest?>"><img src="<?=site_url('assets/Front/')?>images/icons/pinterest.svg"></a>
						<a href="<?=$Lang->spotfy?>"><img src="<?=site_url('assets/Front/')?>images/icons/spotify.svg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	
	function addToContact() {
		var data        = {};
		data.name       = $('#c_name').val();
		data.email      = $('#c_email').val();
		data.number     = $('#c_phone').val();
		data.message    = $('#c_message').val();
		data.section    = $('#c_section').val();
		$.ajax({
			url: site_url + 'Ajax/addToContact/',
			method: 'POST',
			dataType: 'JSON',
			data:data,
			success: function (result) {
				if (result.status == false) {
					Swal.fire({
						type: 'error',
						title: 'Error !',
						html: result.error,
					});
				}else{
					$('#c_name').val('');
					$('#c_surname').val('');
					$('#c_email').val('');
					$('#c_phone').val('');
					$('#c_address').val('');
					$('#c_message').val('');
					$('#c_section').val('');

					Swal.fire({
						type: 'success',
						title: 'Success',
						text: "Your request has been received. We will reply as soon as possible.",
					});
				}
			},
			error: function (result) {
				Swal.fire({
					type: 'error',
					title: 'Error !',
					text: "Sorry, we encountered a technical error.",
				});
			}
		});
	}
</script>