<!DOCTYPE html>
<html>
	<head>
		<title>2-Gether</title>

		<!-- |#####| META |#####| -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- |#####| CSS |#####| -->
		<link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../templates/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../templates/css/style.css">

		<!-- |#####| JS |#####| -->
		<script type="text/javascript" src="../templates/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap//3.3.7/bootstrap.min.js"></script>
		<script src="templates/js/script.js"></script>
	</head>
	<body>
		<div class="row" style="margin: 0;">
			<div class="col-xs-12">
				<div class="row">
					<div class="topnav">
					  	<div class="login-container">
					    	<form action="#">
					      		<button type="submit">Déconnexion</button>
					    	</form>
					  	</div>
					</div>
					<div class="col-xs-1">
					</div>
					<div class="col-xs-10">
						<div class="createContainer">
							<h3 style="text-align: center;">Création d'un groupe</h3>
							<hr>
							<div class="col-xs-6 marginBloc">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
							<div class="verticalLine">
						    </div>
						    <div class="col-xs-6 marginBloc">
						    	<form class="inscriptionContent" action="#">
								    <div class="createContainer">
								      	<label class="createNameGroupText" for="groupName"><b>Nom du groupe</b></label>
								      	<input class="createNameGroupBox" type="text" placeholder="Nom du groupe" name="groupName" required>
								      	<div class="row">
								      		<div class="col-xs-6">
								      			<label class="createNbGroupText" for="nbUsers"><b>Nombres de participants maximum</b></label>
								      			<input class="createNbGroupBox" type="text" placeholder="ex : 8" name="nbUsers" required>
								      		</div>
								      		<div class="col-xs-6">
								      			<label class="createCategoryGroupText" for="groupCategory"><b>Catégorie du groupe</b></label>
								      			<input class="createCategoryGroupBox" type="text" placeholder="ex : Foot, projet, ..." name="groupCategory" required>	
								      		</div>
								      	</div>
								      	<label class="createDescGroupText" for="desc"><b>Description</b></label>
								      	<textarea class="createDescGroupBox" name="desc" rows="5" cols="5"></textarea>

								      	<button type="submit" class="signUpButton">Sign Up</button>
								    </div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xs-1">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>