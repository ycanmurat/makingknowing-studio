<?php $total = 0; ?>
<?php foreach ($this->cart->contents() as $key => $val) { ?>
	<?php $total += $val['price_tr']*$val['qty']; ?>
<?php } ?>
<?php if (!isset($user)) { ?>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-md-7 m-auto">
					<h3>Lütfen Teslimat Adresinizi Seçin</h3>
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
							<label>City</label>
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
						<h6><?=$this->cart->total_items()?> Ürün</h6>
						<p>Total : <b><?=number_format($total,2,',','.')?> ₺</b></p>
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
					<h3>Gönderim Adresi</h3>
					<p>Lütfen teslimat adresinizi seçiniz</p>
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
									Yeni Adres Ekle
								</button>
							</div>
							<div class="col-md-12">
								<div class="addition">
									<h6><?=$this->cart->total_items()?> Ürün</h6>
									<p>Total : <b><?=number_format($total,2,',','.')?> ₺</b></p>
									<a href="javascript:void(0)" onclick="goToPayment()">İlerle</a>
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
							<label for="title">Adres Başlığı</label>
							<input type="text" id="title" placeholder="Başlık">
						</div>
						<div class="item">
							<label for="name">İsim</label>
							<input type="text" id="name" placeholder="Ad">
						</div>
						<div class="item">
							<label for="surname">Soyisim</label>
							<input type="text" id="surname" placeholder="Soyisim">
						</div>
						<div class="item">
							<label for="email">E-Posta</label>
							<input type="text" id="email" placeholder="E-Posta">
						</div>
						<div class="item">
							<label for="telephone">Telefon</label>
							<input type="text" id="telephone" placeholder="Telefon">
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
							<label for="city">İl</label>
							<input type="text" id="city" placeholder="İl">
						</div>
						<div class="item">
							<label for="town">İlçe</label>
							<input type="text" id="town" placeholder="İlçe">
						</div>
						<div class="item">
							<label for="address">Adres </label>
							<input type="text" id="address" placeholder="Adres ">
						</div>
						<div class="item">
							<label for="postalcode">Posta Kodu</label>
							<input type="text" id="postalcode" placeholder="Posta kodu">
						</div>
						<button type="button" onclick="addAddress()">Kaydet</button>
					</form>

				</div>
			</div>
		</div>
	</div>
	<style>
		* {
			text-transform: uppercase!important;
		}
	</style>



	<script>
		$('.addNewAdress').click(function(event) {
			$('.popUp.address').addClass('active');
		});

		$('span#closePopup').click(function(event) {
			$('.popUp.address').removeClass('active');
		});
	</script>
	<?php } ?>