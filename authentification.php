<!DOCTYPE HTML>

<html>
<head>
	
	<meta charset="utf-8" />

	
	<title>Gestion des congés</title>
	<link rel="icon" type="image/ico" href="logo.png" />
	<link rel="stylesheet" href="login/css.css" />
	<link rel="stylesheet" href="login/bootstrap.min.css" />
	
	
</head>
<body>



<div class="container-fluid">
	<div class="row no-gutter">
		<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
		<div class="col-md-8 col-lg-6">
			<div class="login d-flex align-items-center py-5">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-lg-8 mx-auto">
							<h3 class="login-heading mb-4">Authentification</h3>
							<form>
								
									<div class="form-label-group">
									<select name="profil" class="custom-select">
										<option selected>Selectionez le profil:</option>
										<option value="S">Salarié</option>
										<option value="D">Directeur</option>
									</select>
									</div>
								
								
								
									<div class="form-label-group">
										<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
										<label for="inputEmail">Email</label>
									</div>
									
									
						
							<div class="form-label-group">
								<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
								<label for="inputPassword">Mot de passe</label>
							</div>
									
							
					
					
							<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Connexion</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




</body>
</html>
