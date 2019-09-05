<section class="account adress">
	<div class="container">
		<div class="row">
			<?php $this->load->view('account-menu'); ?>
			<div class="col-md-12">
				<h3>your adresses</h3>
				<div class="adressListing">
					<div class="row">
						<?php foreach ($adress as $key => $val) { ?>
							<div class="col-md-6">
								<div class="item">
									<button class="remove" onclick="removeAddress(<?=$val->id?>)">Remove</button>
									<h2><?=$val->title?></h2>
									<h3><?=$val->name?> <?=$val->surname?></h3>
									<p><?=$val->address?></p>
									<span><?=$val->town?> / <?=$val->city?> / <?=$val->country?></span>
								</div>
							</div>
						<?php } ?>
						<div class="col-md-6">
							<button class="addNewAdress">
								Add New Address
							</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="popUp address">
	<span id="closePopup"><img src="<?=site_url('assets/Front/')?>images/icons/cancel.svg"></span>
	<div class="container">
		<div class="allContents"></div>
		<div class="row">
			<div class="col-md-12">
				<form action="#" onsubmit="return false;">
					<div class="item">
						<label for="title">Address Title</label>
						<input type="text" id="title" placeholder="title">
					</div>
					<div class="item">
						<label for="name">Name</label>
						<input type="text" id="name" placeholder="name">
					</div>
					<div class="item">
						<label for="surname">Surname</label>
						<input type="text" id="surname" placeholder="surname">
					</div>
					<div class="item">
						<label for="email">E-Mail</label>
						<input type="text" id="email" placeholder="E-Mail">
					</div>
					<div class="item">
						<label for="telephone">Telephone</label>
						<input type="text" id="telephone" placeholder="telephone">
					</div>
					<div class="item">
						<select id="country">
							<option value="Türkiye">Türkiye</option>
							<?php foreach ($country as $key => $val) { ?>
								<option value="<?=$val->CountryName?>"><?=$val->CountryName?></option>
							<?php } ?>
						</select>
					</div>
					<div class="item">
						<label for="city">City</label>
						<input type="text" id="city" placeholder="City">
					</div>
					<div class="item">
						<label for="town">Town</label>
						<input type="text" id="town" placeholder="town">
					</div>
					<div class="item">
						<label for="address">Adress</label>
						<input type="text" id="address" placeholder="address">
					</div>
					<div class="item">
						<label for="postalcode">Postal Code</label>
						<input type="text" id="postalcode" placeholder="postalcode">
					</div>
					<button type="button" onclick="addAddress()">Save</button>
				</form>

			</div>
		</div>
	</div>
</div>

<script>
	$('.addNewAdress').click(function(event) {
		$('.popUp.address').addClass('active');
	});

	$('span#closePopup').click(function(event) {
		$('.popUp.address').removeClass('active');
	});
</script>