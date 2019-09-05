<section class="account">
	<div class="container">
		<div class="row">
			<?php $this->load->view('account-menu'); ?>
			<div class="col-md-12">
				<h3>Welcome <?=$user->name?> <?=$user->surname?></h3>
				<form action="javascript:void(0)" onsubmit="return false;">
					<div class="itemGroup">
						<div class="item">
							<label for="#">first name</label>
							<input type="text" placeholder="first name" value="<?=$user->name?>" id="ac_name">
						</div>
						<div class="item">
							<label for="#">last name</label>
							<input type="text" placeholder="last name" value="<?=$user->surname?>" id="ac_surname">
						</div>
					</div>
					<div class="itemGroup">
						<div class="item">
							<label for="#">e-mail</label>
							<input type="text" placeholder="e-mail address" value="<?=$user->email?>" id="ac_email">
						</div>
						<div class="item">
							<label for="#">telephone</label>
							<input type="text" placeholder="telephone" value="<?=$user->phone?>" id="ac_phone">
						</div>
					</div>
					<div class="itemGroup">
						<div class="item">
							<label for="">date of birth</label>
							<input type="date" value="<?=$user->birth_day?>" id="ac_birth_day">
						</div>
						<div class="item">

						</div>
					</div>
					<div class="itemGroup">
						<div class="item genderArea">
							<div class="gender">
								<input type="radio" id="man" name="gender" value="1" <?=$user->gender == 1?'checked':''?>>
								<label for="man">MAN</label>
							</div>
							<div class="gender">
								<input type="radio" id="woman" name="gender" value="2" <?=$user->gender == 2?'checked':''?>>
								<label for="woman">WOMAN</label>
							</div>
						</div>
					</div>
					<button type="button" onclick="accountSave()">save</button>
					<h3>Change Password</h3>
					<div class="item">
						<label for="pass">new password</label>
						<input type="password" placeholder="password" id="pass">
					</div>
					<div class="item">
						<label for="pass2">new password confirm</label>
						<input type="password" placeholder="password" id="pass2">
					</div>
					<div>
						<button type="button" onclick="accountPassChange()">save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>