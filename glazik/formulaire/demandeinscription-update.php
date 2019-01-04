	<input type="text" hidden="true" id="id" class="form-control" name="id" value="<?php echo $value['id_Clients'] ?>">

	<input type="text" hidden="true" id="nom" class="form-control" name="nom" value="<?php echo $value['nom'] ?>">
	<input type="text" hidden="true" id="prenom" class="form-control" name="prenom" value="<?php echo $value['prenom'] ?>">
	<input type="text" hidden="true" id="email" class="form-control" name="email" value="<?php echo $value['email'] ?>">

	<p style="text-align: center;">Documents à fournir</p>
	<input type="checkbox" name="cni" value="CNI" id="cni" /> <label for="cni">CNI</label><br>
	<input type="checkbox" name="justificatifdomicile" value="Justificatif Domicile" id="justificatifdomicile" /> <label for="justificatifdomicile">Justificatif Domicile</label><br>
	<input type="checkbox" name="photo" value="Photo" id="photo"><label for="photo">Photo</label><br>
	<input type="checkbox" name="permis" value="permis" id="permis"><label for="permis">Permis</label><br>