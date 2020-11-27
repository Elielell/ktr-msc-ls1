<?php
    
   
   //include "../Entities/user.php";
   include "../Core/profil.php";
   //include "../config.php";
  
   

    $error = "";

    // create user
    $user = null;

    // create an instance of the core     
    $userC= new UtilisateurC();
    if (
        isset($_POST["name"]) &&       
        isset($_POST["company"]) &&
        isset($_POST["email"]) && 
        isset($_POST["telephone"]) 

    ) {
        if (
            !empty($_POST["name"]) && 
            !empty($_POST["company"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["telephone"]) 
        
        ) {
            $user = new Utilisateur( 
                      
                $_POST['name'],
                $_POST['company'], 
                $_POST['email'],
                $_POST['telephone']
            );

            $userC->ajouterUtilisateur($user);
            header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherUtilisateur.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <h1><center>Création d'un profil</center> </h1>

            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Informations personelles</td>
                    <td>
                        <label >Name:
                        </label>
                    </td>
                    <td><input type="text" name="name" id="name" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label >Company name:
                        </label>
                    </td>
                    <td><input type="text" name="company" id="company" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label >Email address:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com">
                    </td>
                    <tr>
                    <td>
                        <label >Telephone number:
                        </label>
                    </td>
                    <td><input type="text" name="telephone" id="telephone" maxlength="20"></td>
                </tr>
                </tr>
                
                <tr>
                    <!--<td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass">
                    </td>
                </tr> -->
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>