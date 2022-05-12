<?php
    require_once '../model/Panier.php';
    require_once '../controller/PanierC.php';
    require_once 'C:\xampp\htdocs\G produits\back\model\Produit.php';
    require_once 'C:\xampp\htdocs\G produits\back\controller\ProduitC.php';
    $error = "";

    // create panier
    $panier = null;

    // create an instance of the controller
    $panierC = new PanierC();
    if (
        isset($_POST["Ida"]) &&
		isset($_POST["idp"]) &&		
        isset($_POST["prix"]) &&
		isset($_POST["quantiteA"]) && 
        isset($_POST["Id_user"]) && 
        isset($_POST["numT"]) && 
        isset($_POST["total"])
    ) {
        
            $panier = new panier(
                $_POST['Ida'],
				$_POST['idp'],
                $_POST['prix'], 
				$_POST['quantiteA'],
                $_POST['Id_user'],
                $_POST['numT'],
                $_POST['total']
            );
            
            $panierC->modifierPanier($panier);
           // header('Location:afficherPanier.php');
        }
        
    $produit = new ProduitC();
    $resultats = $produit->afficherproduits();
    $resultats2 = $produit->affichercompt();

    
?>
<html>
<button><a href="afficherPanier.php">Retour à la liste des paniers</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <hr
        ><?php
			if (isset($_POST['Ida'])){
				$panier = $panierC->recupererPanier($_POST['Ida']);
				
		?>
         <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Ida">Id_achat:
                        </label>
                    </td>
                    <td><input type="number" name="Ida" id="Ida" value="<?php echo $panier['Ida']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="idp">Id_produit:
                        </label>
                    </td>
                    <td><input type="number" name="idp" id="idp" value="<?php echo $panier['idp']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td><input type="number" name="prix" id="prix" value="<?php echo $panier['prix']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="quantiteA">quantiteA:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="quantiteA" value="<?php echo $panier['quantiteA']; ?>" id="quantiteA">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Id_user">ID_user:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="Id_user" id="Id_user" value="<?php echo $panier['Id_user']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numT">Numero:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="numT" id="numT" value="<?php echo $panier['numT']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="total">total:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="total" id="total" value="<?php echo $panier['total']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
        
      </html>