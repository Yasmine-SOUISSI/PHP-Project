<?PHP
    include "../controller/userC.php";
	//include "../../controller/categorieC.php";
    require_once "../config.php";
	$UserC = new userC();
	$userS=$UserC->afficheruser();
	



    // Définit le fuseau horaire par défaut à utiliser.
date_default_timezone_set('UTC');



// Affichage de quelque chose comme : Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');


	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<a class="logo" href="showProduit.php">-->

        <link rel="stylesheet" href="styleaffichage.css">
        
        </a>
		<title> LISTE DES utilisateurs </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
            <th>username________________________________</th>
				<th>email</th>
				<th>date</th>
			


				
			</tr>
			<?PHP
				//foreach ($listecategorie as $categorie){
			?>

			<?PHP
				foreach ($userS as $user){
			?>
            		<tr>
                    <td><?php echo $user['username']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['datee']; ?></td>
			
			
					
					
				</tr>
			<?PHP
				}
			?>

            <!--<?PHP
				//}
			?>-->
			
		</table>
	</body>
</html>