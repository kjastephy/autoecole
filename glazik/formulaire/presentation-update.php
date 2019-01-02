<div class="form-body">

	<input type="text" hidden="true" id="id" class="form-control" name="id" value="<?php echo $value['id'] ?>">

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Icon</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput5" class="form-control" name="icon" value="<?php echo $value['icon'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Nombre</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput6" class="form-control" name="nombre" value="<?php echo $value['nombre'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="timesheetinput7">Titre</label>
		<div class="position-relative has-icon-left">
			<input id="timesheetinput7" rows="5" class="form-control" name="titre" placeholder="" value="<?php echo $value['titre'] ?>" required/>
			<div class="form-control-position">
				<!--				<i class="ft-file"></i>-->
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="timesheetinput7">Texte</label>
		<div class="position-relative has-icon-left">
			<textarea id="timesheetinput7" rows="5" class="form-control" name="texte" placeholder="" required>
				<?php echo $value['texte'] ?>
			</textarea>
			<div class="form-control-position">
				<!--				<i class="ft-file"></i>-->
			</div>
		</div>
	</div>

</div>