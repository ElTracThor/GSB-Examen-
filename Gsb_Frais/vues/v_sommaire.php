﻿    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Visiteur :
				<?php echo $_SESSION['id']."  ".$_SESSION['prenom']."  ".$_SESSION['nom'] ?><li>
            
              <p>Numéro de téléphone : 
                  <?php  echo $_SESSION['numero'] ?><li>
              
              
              <p>Numéro d'immatriculation :
                  <?php  echo $_SESSION['ref_voiture'] ?><li>

               
              <p>Type d'énergie :
                  <?php  echo $_SESSION['ref_energie']  ?><li>

			</li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    