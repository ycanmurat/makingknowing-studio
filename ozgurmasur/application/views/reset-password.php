<section class="login sendReset">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>reset password</h3>
				<p class="info">ENTER A NEW PASSWORD FOR <b><?=$user_information->email?></b></p>
				<form action="javascript:void(0)" onsubmit="return false;">
					<input type="hidden" id="token" value="<?=$reset_token?>">
					<div class="item">
						<label for="password">password*</label>
						<input type="password" id="newpass" placeholder="password">
					</div>
					<div class="item">
						<label for="newpass2">confirm password*</label>
						<input type="password" id="newpass2" placeholder="password">
					</div>
					<div class="loginButtons">
						<button type="button" onclick="passwordNew()">Reset Password</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>