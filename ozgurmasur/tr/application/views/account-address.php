<section class="account adress">
	<div class="container">
		<div class="row">
			<?php $this->load->view('account-menu'); ?>
			<div class="col-md-12">
				<h3>Adresleriniz</h3>
				<div class="adressListing">
					<div class="row">
						<?php foreach ($adress as $key => $val) { ?>
							<div class="col-md-6">
								<div class="item">
									<button class="remove" onclick="removeAddress(<?=$val->id?>)">Sil</button>
									<h2><?=$val->title?></h2>
									<h3><?=$val->name?> <?=$val->surname?></h3>
									<p><?=$val->address?></p>
									<span><?=$val->town?> / <?=$val->city?> / <?=$val->country?></span>
								</div>
							</div>
						<?php } ?>
						<div class="col-md-6">
							<button class="addNewAdress">
								Yeni Adres
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
						<label for="title">Adres Başlığı</label>
						<input type="text" id="title" placeholder="title">
					</div>
					<div class="item">
						<label for="name">İsim</label>
						<input type="text" id="name" placeholder="İsim">
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
						<label for="city">İl</label>
						<input type="text" id="city" placeholder="İl">
					</div>
					<div class="item">
						<label for="town">İlçe</label>
						<input type="text" id="town" placeholder="İlçe">
					</div>
					<div class="item">
						<label for="address">Adres</label>
						<input type="text" id="address" placeholder="Adres">
					</div>
					<div class="item">
						<label for="postalcode">Posta Kodu</label>
						<input type="text" id="postalcode" placeholder="Posta Kodu">
					</div>
					<button type="button" onclick="addAddress()">Kaydet</button>
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