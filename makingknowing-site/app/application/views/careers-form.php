<a class="returnCareersDetail" href="careers.php"><img src="<?=site_url('assets/Front/')?>images/arrow.svg">Back Off</a>
<form action="" class="careers-form" autocomplete="off">
	<div class="wrapper">
		<h2>Application Form</h2>
		<div class="group">
			<label for="" autocomplete="false">Name: *</label>
			<input type="text" autocomplete="false">
		</div>
		<div class="group">
			<label for="">Surname: *</label>
			<input type="text">
		</div>
		<div class="group">
			<label for="">E-Mail: *</label>
			<input type="text">
		</div>
		<div class="group">
			<label for="">Mobile: *</label>
			<input type="number">
		</div>
		<div class="group">
			<label for="">Notes: *</label>
			<textarea></textarea>
		</div>

		<div class="fileupload">
			<input type="file" id="fileUpload" name="fileUpload">			
			<label for="fileUpload">Insert CV</label>
			<button>Send</button>
		</div>
	</div>
	<img class="signature" src="<?=site_url('assets/Front/')?>images/logo.svg">
</form>