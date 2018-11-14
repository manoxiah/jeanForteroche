<?php
$titlePage = "Contantez Jean FORTEROCHE";
ob_start(); ?>

<div class="col-lg-12 sectionContact">
  <div class="principalTitleSection"><strong>-- Contact --</strong></div><br/><br/><br/>
    <form action="./index.php?callPage=sendMessageFormContact" method="post" class="col-lg-6">
      <h4>Formulaire de contact :</h4><br/>
				<div class="form-group">
				 <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required >
			  </div>
				<div class="form-group">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email" required >
			 	</div>
        <div class="form-group">
         <textarea class="form-control" type="textarea" name="contentMessage" id="contentMessage" placeholder="Message" rows="7" required ></textarea>
         <h6>Remplissez tous les champs</h6>
        </div>

      <button type="submit" id="submit" name="submit" class="col-lg-2 btn btn-primary pull-right">Valider</button>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');