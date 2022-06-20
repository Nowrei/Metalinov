<? session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https:////cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/styles/contact.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
  
</head>

<body>
<?php include '../assets/include/navbarre-contact.php' ?>
<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
  <form method="post" action="../assets/php/traitement.php" id="form">
<div class="container">
  <h2>Contactez-nous</h2>
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" placeholder="Prénom" id="prenom" name="prenom">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="societe">Société</label>
          <input type="text" class="form-control" placeholder="Société" id="societe" name="societe">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="tel" class="form-control" id="phone" placeholder="Téléphone" name="phone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
      </div>
      <!--  col-md-6   -->
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <div class="form-row">
      <div class="form-group col">
        <label for="adresse" class="control-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Ce champ est intelligent pour toute adresse se stiuant en france" />
        <div class="address-feedback position-absolute list-group" style="z-index:1100;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="cp" class="control-label">Code Postal</label>
        <input type="text" class="form-control" id="code" name="code" />
      </div>
      <div class="col-md-6">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" name="ville" required />
      </div>   

     <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="Pays">Pays</label>
          <select class="form-select" aria-label="Default select example" id="pays" name="pays">
            <option selected>France</option>
            <option value="Allemagne">Allemagne</option>
            <option value="Belgique">Belgique</option>
            <option value="Suisse">Suisse</option>
            <option value="Italie">Italie</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Espagne">Espagne</option>
          </select>
        </div>
         </div>
       </div>
      <!--  col-md-6   -->
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <div class="form-group">
          <label for="objet">Objet du message</label>
          <input type="text" class="form-control" id="objet" placeholder="Objet du message" name="objet">
        </div>
        <div class="form-group">
        <label for="message">Message</label>
  <textarea class="form-control" placeholder="Laissez votre message ici" id="message" style="height: 100px" name="message"></textarea>
  
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </form>
</div>
<?php include '../assets/include/footer-contact.php' ?>
<script>
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("disabled", "disabled");
var nom = $('#nom').val();
var prenom = $('#prenom').val();
var societe = $('#societe').val();
var phone = $('#phone').val();
var email = $('#email').val();
var adresse = $('#adresse').val();
var code = $('#code').val();
var ville = $('#ville').val();
var pays= $('#pays').val();
var objet = $('#objet').val();
var message = $('#message').val();
if(societe!="" && email!="" && phone!="" && ville!=""){
	$.ajax({
		url: "../assets/php/traitement.php",
		type: "POST",
		data: {
			nom: nom,
      prenom: prenom,
      societe: societe,
      phone: phone,
			email: email,
			adresse: adresse,
			ville: ville,
      code: code,
      pays: pays,
      objet: objet,
      message: message				
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
});
</script>
<script src="../assets/js/auto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>  
</body>
