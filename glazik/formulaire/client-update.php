<div class="form-body">

	<input type="text" hidden="true" id="id" class="form-control" name="id" value="<?php echo $value['id_Clients'] ?>">

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Civilité</label>
				<div class="position-relative has-icon-left">
					<select class="form-control" name="civilite" id="civilite" required="">

						<option value="Mlle" <?php echo ($value['civilite']=='Mlle')? 'selected=\'\'':''; ?> >Mademoiselle</option>
						<option value="Mme" <?php echo ($value['civilite']=='Mme')? 'selected=\'\'':''; ?> >Madame</option>
						<option value="M." <?php echo ($value['civilite']=='M.')? 'selected=\'\'':''; ?> >Monsieur</option>

					</select>

					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Nom</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput6" class="form-control" name="nom" value="<?php echo $value['nom'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Prénom</label>
				<div class="position-relative has-icon-left">
					<input type="text" id="timesheetinput5" class="form-control" name="prenom" value="<?php echo $value['prenom'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Date de naissance</label>
				<div class="position-relative has-icon-left">
					<input type="date" id="timesheetinput6" class="form-control" name="dateNaissance" value="<?php echo $value['date_naissance'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Email</label>
				<div class="position-relative has-icon-left">
					<input type="email" id="timesheetinput5" class="form-control" name="email" value="<?php echo $value['email'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Téléphone</label>
				<div class="position-relative has-icon-left">
					<input type="tel" id="timesheetinput6" class="form-control" name="tel1" value="<?php echo $value['tel1'] ?>" required>
					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput5">Type Permis</label>
				<div class="position-relative has-icon-left">

					<select class="form-control" name="permis" id="permis"  required="">

						<option value="Voiture" <?php echo ($value['id_CatPermis']=='Voiture')? 'selected=\'\'':''; ?> >Voiture</option>
						<option value="Moto" <?php echo ($value['id_CatPermis']=='Moto')? 'selected=\'\'':''; ?> >Moto</option>
						<option value="Bateau" <?php echo ($value['id_CatPermis']=='Bateau')? 'selected=\'\'':''; ?> >Bateau</option>

					</select>

					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="timesheetinput6">Possède Code</label>
				<div class="position-relative has-icon-left">

					<select class="form-control" name="code" id="code"  required="">

						<option value="Oui" <?php echo ($value['possede_Code']=='Oui')? 'selected=\'\'':''; ?> >Oui</option>
						<option value="Non" <?php echo ($value['possede_Code']=='Non')? 'selected=\'\'':''; ?> >Non</option>

					</select>

					<div class="form-control-position">
						<i class="ft-text"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<input  type="checkbox" id="timesheetinput6" class="" name="changemdp">Changer Mot de passe
		</div>
	</div>
</div>