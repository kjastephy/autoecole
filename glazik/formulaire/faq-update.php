<div class="form-body">

	<input type="text" hidden="true" id="id" class="form-control" name="id" value="<?php echo $value['id'] ?>">

	<div class="form-group">
		<label for="timesheetinput7">Question</label>
		<div class="position-relative has-icon-left">
			<textarea id="timesheetinput7" rows="5" class="form-control" name="question" placeholder="" required>
				<?php echo $value['question'] ?>
			</textarea>
			<div class="form-control-position">
				<!--				<i class="ft-file"></i>-->
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="timesheetinput7">Reponse</label>
		<div class="position-relative has-icon-left">
			<textarea id="timesheetinput7" rows="5" class="form-control" name="reponse" placeholder="" required>
				<?php echo $value['reponse'] ?>
			</textarea>
			<div class="form-control-position">
				<!--				<i class="ft-file"></i>-->
			</div>
		</div>
	</div>

</div>