<?php
try
{
    $bdd = new PDO('pgsql:host=localhost;dbname=PortFolio', 'postgres', 'PgAdmin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

 if(isset($_POST['nom_message']) && isset($_POST['mail_message'])  && isset($_POST['sujet_message']) && isset($_POST['texte_message'])){

    $req = $bdd->prepare('INSERT INTO admin.message(nom_message, mail_message, sujet_message, texte_message) VALUES(:nom_message, :mail_message, :sujet_message, :texte_message)');

    $req-> execute(array(
        'nom_message' => $_POST['nom_message'],
        'mail_message' => $_POST['mail_message'],
        'sujet_message' => $_POST['sujet_message'],
        'texte_message' => $_POST['texte_message']

    ));
}
?>


<!DOCTYPE html>
<html>
     <head>
     	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="description" content="Voici mon PortFolio, si vous voulez en apprendre plus sur moi, cliquez.">
        <meta name="keyword" content="PortFolio, HTML, Paulin, Sirot, Ynov, projet, compétences, expériences, présentation">
     	<link rel="stylesheet" type="text/css" href="MonPortFolio.css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        


     	<title> Paulin Sirot </title>

     	 </head>

     <body onload="Apparition()">
		
       		<nav class="nav nav-pills flex-column flex-sm-row">
        		 <a class="flex-sm-fill text-sm-center nav-link" href="#section1">Home</a>
        		 <a class="flex-sm-fill text-sm-center nav-link" href="#section2">Présentation</a>
        		 <a class="flex-sm-fill text-sm-center nav-link" href="#section3">Expériences/Compétences</a>
         		 <a class="flex-sm-fill text-sm-center nav-link" href="#section4">Projets</a>
         		 <a class="flex-sm-fill text-sm-center nav-link" href="#section5" >Contact</a>
         		 <a class="flex-sm-fill text-sm-center nav-link" href="admin.php" >Administration</a>
      		</nav>
     	

     		<section id="section1">
     		
			<?php
// On récupère tout le contenu de la table presentationsimple
$reponse = $bdd->query('SELECT * FROM admin.presentationsimple ORDER BY id DESC');

// On affiche chaque entrée une à une
$donnees = $reponse->fetch()
?>
     			<div>
     				<h1> Bonjour, je suis Paulin Sirot </br></h1> 
     			</div>

     			<div>
                    <b>
     				   <h3> <?=$donnees['message_presentationsimple'] ?> </br> Si vous voulez en apprendre un peu plus sur moi, cliquez sur la flèche juste en dessous ! </h3>
     			    </b>
                </div>

             <div>
                <img class="zoom" src="images/<?=$donnees['photochemin_presentationsimple'] ?>" id="tete" title="Photo d'identité">
             </div>

     			<div>
     				<a class="scroll" href="#section2"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>    				
               </div>

     		 </section>


     		<section id="section2">
     		

     			<div>
     				<h2 id="apropos"> A propos de moi </br></h2> 
     			</div>

     			<div>
     					<p class="text-center">
                            Pour me présenter en plus ample détails,</br> je suis né aux Sables d'Olonne en 1999 et j'ai donc 20 ans. Je suis titulaire du bac S et l'informatique a toujours été un domaine qui m'attirait et me plaisait.</br> J'habites maintenant à Nantes (44200) pour les études mais je n'ai pas vraiment l'habitude des grandes villes car, </br> j'ai auparavant toujours vécu avec mes parents, à Talmont-Saint-Hilaire, en Vendée.</br> Si je suis venu étudier à Nantes, c'était pour y rejoindre le Campus d'Ynov et pour y réaliser mon projet, qui est de travailler dans la cyber-sécurité.</br> Je suis quelqu'un de rigoureux, sérieux, impliqué et j'aime beaucoup travaillé en équipe. </br>
                        </p>
				 </div>


					

                 <div id="conteneur">
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true">Mon Parcours Scolaire</li>

 
 <?php
// On récupère tout le contenu de la table presentationdet
	$reponse = $bdd->query('SELECT * FROM admin.presentationdet');

// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
										{
?>

                            <li class="list-group-item"> <?=$donnees['diplome_presentationdet'] ?>, <?=$donnees['ecole_presentationdet'] ?>.</li>

<?php
						}
	$reponse->closeCursor(); // Termine le traitement de la requête
?> 


                        </ul>
                    </div>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item disabled" aria-disabled="true">Mes Centres d'Intérêts</li>

<?php
// On récupère tout le contenu de la table presentationdet
	$reponse = $bdd->query('SELECT * FROM admin.presentationdet');

// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
										{
?>

                            <li class="list-group-item"><?=$donnees['loisir_presentationdet'] ?></li>

 <?php
						}
	$reponse->closeCursor(); // Termine le traitement de la requête
?> 

                        </ul>
                    </div>
                </div>


                <div>
                    <a class="scroll" href="#section3"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>

     		 </section>


     		<section id="section3">
     		
     			<div>
     				<h2 id="Experiences"> Mes expériences et compétences </br></h2> 
     			</div>

                <div id="conteneur2">

     			    <div id="expérience">

                        <div>
                            <h3> Mes expériences:</h3> 
                        </div>

                        <div>
     				        <p> </br> J'ai la chance d'avoir eu plusieurs expériences dans </br> le monde du travail qui ont permis d'enrichir mon CV:</p>

     				        <ul>

<?php
// On récupère tout le contenu de la table experiences
	$reponse = $bdd->query('SELECT * FROM admin.experiences');

// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
										{
?>  

     				        	<li> <?=$donnees['nomtravail_parcours'] ?>, <?=$donnees['name_parcours'] ?>, <?=$donnees['temps_parcours'] ?>.</li>

 <?php
						}
	$reponse->closeCursor(); // Termine le traitement de la requête
?> 

     				        </ul>

     				         <p> Ces travails m'ont permis d'apprendre à avoir un bon contact avec les clients, </br> une bonne organisation et de la rigourosité. </br>Mais aussi à travailler en équipe, à être rapide et sérieux. </p>	
                       </div>
                    </div>


                    <div id="compétence">

                        <div>
                            <h3> Mes compétences:</h3> 
                        </div>

                        <div>
                            <p> <strong> </br>

<?php
// On récupère tout le contenu de la table competences
	$reponse = $bdd->query('SELECT * FROM admin.competences');

// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
										{
?> 

                             -<?=$donnees['nom_competences'] ?>: <?=$donnees['niveau_competences'] ?> </br></br>  

 <?php
						}
	$reponse->closeCursor(); // Termine le traitement de la requête
?> 

                           </strong> </p>  
                       </div>

                     </div>

                 </div>

                <div>
                    <a class="scroll" href="#section4"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>

     		 </section>

            <section id="section4">
            

                <div>
                    <h2 id="projet"> Mes projets </br></h2> 
                </div>

                   <div>

                        <p class="text-center">
                            Nous avons réalisé plusieurs projets tout au long de cette année 2018/19: </br></br></br><strong>

<?php
// On récupère tout le contenu de la table projets
	$reponse = $bdd->query('SELECT * FROM admin.projets');

// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
										{
?> 

                             Projet n°<?=$donnees['numero_projets'] ?>: </strong></br></br> <?=$donnees['explication_projets'] ?></br></br><strong>

 <?php
						}
	$reponse->closeCursor(); // Termine le traitement de la requête
?>

                        </p>
				 </div>

                <div>
                    <a class="scroll" href="#section5"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>

            </section>



     		<section id="section5">

                <div>
                    <h2 id="Contact"> Pour me contacter </br></h2> 
                </div>

     		
     			<form action="index.php" method="post" name="formulaire" >

                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Prénom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_message" placeholder="Prénom" required="">
                     </div>

                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="mail_message" placeholder="nom@exemple.com" required="">
                    </div>

                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Sujet</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="sujet_message" placeholder="Projets, compétence, stage..." required="">
                    </div>

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="texte_message" rows="3" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>

            </form>

         <div>
            <a href="#top" id="up"> <img class="flechehaut" src="images/arrow-up.png"> </a>
         </div>
   			

     		</section>
	 <script src="Main.js"></script>
     </body>
     </html>