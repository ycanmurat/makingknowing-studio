<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>sign up</h3>

				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">first name</label>
						<input type="text" id="re_name" placeholder="first name">
					</div>
					<div class="item">
						<label for="#">last name</label>
						<input type="text" id="re_surname" placeholder="last name">
					</div>
					<div class="item">
						<label for="#">e-mail address*</label>
						<input type="text" id="re_email" placeholder="e-mail address">
					</div>
					<div class="item">
						<label for="#">telephone</label>
						<input type="text" id="re_phone" placeholder="telephone">
					</div>
					<div class="item">
						<label for="#">password*</label>
						<input type="password" id="re_password" placeholder="password">
					</div>
					<div class="confirm-checks">
						<input type="checkbox" id="gdpr" required="">
						<label for="gdpr">I have read and confirmed The <a href="<?=site_url('s/gdpr')?>" target="_blank">GDPR</a> Autorization & Consent Form </label>
					</div>
					<div class="loginButtons">
						<button type="button" onclick="signUp()">sign up</button>
					</div>
					<div class="links">
						<a href="<?=site_url('login')?>">Already have an account, Log in </a>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>