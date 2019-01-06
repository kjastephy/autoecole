<div class="form-body">

	<input type="text" hidden="true" id="table" class="form-control" name="table" value="<?php echo $title ?>">

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Icon</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput5" class="form-control" name="icon" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Titre</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput6" class="form-control" name="titre" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="timesheetinput7">Texte</label>
		<div class="position-relative has-icon-left">
			<textarea id="timesheetinput7" rows="5" class="form-control" name="texte" placeholder="" required></textarea>
			<div class="form-control-position">
				<!--				<i class="ft-file"></i>-->
			</div>
		</div>
	</div>

</div>