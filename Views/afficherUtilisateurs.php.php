<?php
	
	include "../core/profil.php";

	$utilisateurC=new UtilisateurC;
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
		<button><a href="interface.php">Ajouter un Utilisateur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Name</th>
				<th>Company name</th>
				<th>Email</th>
				<th>Telephone</th>
			</tr>

			<?PHP
				foreach($listeUsers as $user){
			?>
				<tr>
					<td><?PHP echo $user['name']; ?></td>
					<td><?PHP echo $user['company']; ?></td>
					<td><?PHP echo $user['email']; ?></td>
					<td><?PHP echo $user['telephone']; ?></td>
				<!--<td>
						form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
						</form>
						<a href="supprimerUtilisateur.php?id=<?PHP echo $user['Id']; ?>"> Supprimer </a>
					</td>
					<td>
						<a href="modifierUtilisateur.php?Id=<?PHP echo $user['Id']; ?>"> Modifier </a>
					</td>-->
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>