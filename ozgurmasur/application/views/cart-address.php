<?php if (!isset($user)) { ?>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-md-7 m-auto">
					<h3>Please Select The Delivery Address</h3>
					<form action="">
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
							<label for="country">Country</label>
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
						<div class="confirm-checks">
							<input type="checkbox" id="gdpr" name="gdpr" required="">
							<label for="gdpr">I have read and confirm the <a href="<?=site_url('s/gdpr')?>"> GDPR </a> illumination text</label>
						</div>
					</form>
				</div>
				<div class="col-md-12">
					<div class="addition">
						<h6><?=$this->cart->total_items()?> item</h6>
						<p>Total : <b>$<?=number_format($this->cart->total(),2,',','.')?></b></p>
						<a href="javascript:void(0)" onclick="goToPaymentWithAddress()">proceed</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }else{ ?>
	<section class="account adress payment">
		<div class="container">
			<div class="row">
				<div class="col-md-8 m-auto">
					<h3>shipping address</h3>
					<p>Please Select The Delivery Address</p>
					<div class="adressListing">
						<div class="row">
						<?php foreach ($adress as $key => $val) { ?>
							<div class="col-md-6">
								<input type="radio" name="paymentAddress" id="address<?=$key?>" value="<?=$val->id?>">
								<label for="address<?=$key?>">
									<div class="item">
									<h2><?=$val->title?></h2>
									<h3><?=$val->name?> <?=$val->surname?></h3>
									<p><?=$val->address?></p>
									<p><?=$val->phone?></p>
									<span><?=$val->town?> / <?=$val->city?> / <?=$val->country?></span>
									</div>
								</label>
							</div>
						<?php } ?>
							<div class="col-md-6">
								<button class="addNewAdress">
									Add New Address
								</button>
							</div>
							<div class="col-md-12">
								<div class="addition">
									<h6><?=$this->cart->total_items()?> item</h6>
									<p>Total : <b>$<?=number_format($this->cart->total(),2,',','.')?></b></p>
									<a href="javascript:void(0)" onclick="goToPayment()">proceed</a>
								</div>
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
<?php } ?>