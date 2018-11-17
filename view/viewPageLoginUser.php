<?php
$titlePage = "Tout savoir sur Jean FORTEROCHE";
ob_start(); ?>

<div class="col-lg-12 sectionLogin">
  <div class="principalTitleSection"><strong>-- Connexion --</strong></div><br/><br/><br/>
    <form action="./index.php?callPage=sendLoginUser" method="post" class="col-lg-6">
      <h4>Formulaire de connexion :</h4><br/>
				<div class="form-group">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" required >
			 	</div>
        <div class="form-group">
				 <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required >
         <h6>Remplissez tous les champs</h6>
        </div>

      <button type="submit" id="a" name="a" class="col-lg-2 btn btn-primary pull-right">Valider</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');