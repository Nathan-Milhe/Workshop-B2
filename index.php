<!DOCTYPE html>
<html>
<head>
	<title>2-Gether</title>

	<!-- |#####| META |#####| -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- |#####| CSS |#####| -->
	<link rel="stylesheet" href="templates/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="templates/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="templates/css/style.css">

	<!-- |#####| JS |#####| -->
	<script type="text/javascript" src="templates/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap//3.3.7/bootstrap.min.js"></script>
	<script src="templates/js/script.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<img class="imgHeader" src="templates/Images/logo2gether.png">
			  	<p class="headerText">Le site web pour partager et rejoindre des groupes d'étudiants !</p>
			</div>
			<div class="topnav">
			  	<div class="login-container">
			    	<form action="/action_page.php">
			    		<input type="text" placeholder="Identifiant" name="username">
			      		<input type="text" placeholder="Mot de passe" name="psw">
			      		<button type="submit">Connexion</button>
			    	</form>
			  	</div>
			</div>
			<div class="col-xs-1">
			</div>
			<div class="col-xs-10">
				<div class="">
					
				</div>
			</div>
			<div class="col-xs-1">
			</div>
		</div>
	</div>
	<div class="form-group">
        <label for="exampleInputPassword1">Nom</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre nom">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Prénom</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre prénom">
      </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Adresse Email</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Mot de passe</label>
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer mot de passe">
     </div>


     <button type="submit" class="btn btn-primary">Submit</button>


</body>
<script>

// Récupère la modal
var modal = document.getElementById('id01');

// Quand l'utilisateur clique en dehors de la modal, elle se ferme
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>