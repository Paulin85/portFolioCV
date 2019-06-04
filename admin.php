   <?php
      try
      {
        // On se connecte à MySQL
        $bdd = new PDO('pgsql:host=localhost;dbname=PortFolio', 'postgres', 'PgAdmin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
        // En cas d'erreur, on affiche un experiences et on arrête tout
              die('Erreur : '.$e->getexperiences());
      }
    ?>

<!DOCTYPE html>
<html>
     <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="description" content="Voici mon PortFolio, si vous voulez en apprendre plus sur moi, cliquez.">
        <meta name="keyword" content="PortFolio, HTML, Paulin, Sirot, Ynov, projet, compétences, expériences, présentation">
        <link rel="stylesheet" type="text/css" href="admin.css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        


        <title> Administration </title>

         </head>

     <body onload="Apparition()">
        
            <nav class="nav nav-pills flex-column flex-sm-row">
                 <a class="flex-sm-fill text-sm-center nav-link" href="#section1">Présentation Simple</a>
                 <a class="flex-sm-fill text-sm-center nav-link" href="#section2">Présentation Détaillée</a>
                 <a class="flex-sm-fill text-sm-center nav-link" href="#section3">Expériences/Compétences</a>
                 <a class="flex-sm-fill text-sm-center nav-link" href="#section4">Projets et Contact</a>
                 <a class="flex-sm-fill text-sm-center nav-link" href="index.php">PortFolio</a>
            </nav>
        

            <section id="section1">
            

                <div>
                    <h2 id="Presentationsimple">Présentation Simple </br></h2> 
                </div>

                <?php

if(isset($_POST['message_presentationsimple']) && isset($_POST['photochemin_presentationsimple'])) {

        // ajout d'entrée dans la table presentationsimple de la base de données PortFolio.
    $req = $bdd->prepare('INSERT INTO admin.presentationsimple(message_presentationsimple, photochemin_presentationsimple) VALUES(:message_presentationsimple, :photochemin_presentationsimple)');

    $req->execute(array(
        'message_presentationsimple' => $_POST['message_presentationsimple'],
        'photochemin_presentationsimple' => $_POST['photochemin_presentationsimple']
    ));
}
?>

                <form method="post" name="PrésentationSimple" >

                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message de Présentation</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message_presentationsimple" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choix de la Photo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photochemin_presentationsimple">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>

            </form>

                <div>
                    <a class="scroll" href="#section2"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>                   
               </div>

             </section>


            <section id="section2">
            

                <div>
                    <h2 id="apropos">Présentation détaillée </br></h2> 
                </div>

                    
<?php

if(isset($_POST['diplome_presentationdet']) && isset($_POST['ecole_presentationdet']) && isset($_POST['loisir_presentationdet'])) {

        // ajout d'entrée dans la table presentationdet de la base de données PortFolio.
    $req = $bdd->prepare('INSERT INTO admin.presentationdet(diplome_presentationdet, ecole_presentationdet, loisir_presentationdet) VALUES(:diplome_presentationdet, :ecole_presentationdet, :loisir_presentationdet)');

    $req->execute(array(
        'diplome_presentationdet' => $_POST['diplome_presentationdet'],
        'ecole_presentationdet' => $_POST['ecole_presentationdet'],
        'loisir_presentationdet' => $_POST['loisir_presentationdet']
    ));
}
?>
                 <form action="admin.php" method="post" name="PrésentationDétaillée" >


                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Diplôme</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="diplome_presentationdet" >
                    </div>

                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Nom de l'école</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="ecole_presentationdet" >
                    </div>

                    <div class="form-group">            
                        <label for="exampleFormControlInput1">Loisir</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="loisir_presentationdet" >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </div>

            </form>

                <div>
                    <a class="scroll" href="#section3"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>

             </section>


            <section id="section3">
            
                <div>
                    <h2 id="Experiences"> Mes expériences </br></h2> 
                </div>

<?php

if(isset($_POST['nomtravail_parcours']) && isset($_POST['name_parcours']) && isset($_POST['temps_parcours'])) {

        // ajout d'entrée dans la table experiences de la base de données PortFolio.
    $req = $bdd->prepare('INSERT INTO admin.experiences(nomtravail_parcours, name_parcours, temps_parcours) VALUES(:nomtravail_parcours, :name_parcours, :temps_parcours)');

    $req->execute(array(
        'nomtravail_parcours' => $_POST['nomtravail_parcours'],
        'name_parcours' => $_POST['name_parcours'],
        'temps_parcours' => $_POST['temps_parcours']
    )); 
}
?>

                        <form action="admin.php" method="post" name="Expériences" >
                        <div>
                            <div class="form-group">            
                                <label for="exampleFormControlInput1">Titre de l'expérience</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nomtravail_parcours" >
                            </div>

                            <div class="form-group">            
                                <label for="exampleFormControlInput1">Nom de l'entreprise</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name_parcours" >
                            </div>

                            <div class="form-group">            
                                <label for="exampleFormControlInput1">Temps travaillé (en mois)</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="temps_parcours" >
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </div>
                        </form>

                 <div>
                    <a class="scroll" href="#section4"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
                </div>                          

                     </section>



                        <section id="section4">
            
                <div>
                    <h2 id="Competences"> Mes compétences </br></h2> 
                </div>


<?php
if(isset($_POST['nom_competences']) && isset($_POST['niveau_competences'])) {

        // ajout d'entrée dans la table competences de la base de données PortFolio.
    $req = $bdd->prepare('INSERT INTO admin.competences(nom_competences, niveau_competences) VALUES(:nom_competences, :niveau_competences)');

    $req->execute(array(
        'nom_competences' => $_POST['nom_competences'],
        'niveau_competences' => $_POST['niveau_competences']
    ));
}
?>
                        <form id="competence" action="admin.php" method="post" name="Compétences" >
                        <div>
                            <div class="form-group">            
                                <label for="exampleFormControlInput1">Nom de la Compétence</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="nom_competences" >
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Niveau (entre 1 et 5)</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="niveau_competences" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </div>
                        </form>
            

                <div>
                    <a class="scroll" href="#section5"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>

             </section>



            <section id="section5">
            

                <div>
                    <h2 id="projet"> Mes projets </br></h2> 
                </div>

                <?php
if(isset($_POST['numero_projets']) && isset($_POST['explication_projets'])) {

        // ajout d'entrée dans la table projets de la base de données PortFolio.
    $req = $bdd->prepare('INSERT INTO admin.projets(numero_projets, explication_projets) VALUES(:numero_projets, :explication_projets)');

    $req->execute(array(
        ':numero_projets' => $_POST['numero_projets'],
        ':explication_projets' => $_POST['explication_projets']
    ));
}
?>
                    <form action="admin.php" method="post" name="projets" >
                            <div>
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Numéro du projet: </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="numero_projets" >                
                              </div>

                             <div class="form-group">
                                <label for="exampleFormControlTextarea1">Explication du projet</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="explication_projets" rows="3" ></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                            </div>                      

            			</form>

                 <div>
                    <a class="scroll" href="#section6"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>
               </div>           			


            </section> 

		<section id="section6">
            

                <div>
                    <h2 id="contacts"> Mes Contacts</br></h2> 
                </div>
                        
                        
                            <div id="tableau">
                                <?php
                                    // On récupère tout le contenu de la table message
                                    $reponse = $bdd->query('SELECT * FROM admin.message');

                                    ?>
                                    <table class="table">
                                        <tr>
                                          <th scope="col">Id</th>
                                          <th scope="col">Nom</th>
                                          <th scope="col">Mail</th>
                                          <th scope="col">Sujet</th>
                                          <th scope="col">Message</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                             <?php
                                                while ($row = $reponse->fetch(PDO::FETCH_ASSOC)):
                                              ?>

                                              <tr>
                                              	<td><?=$row['id']?></td>
                                                <td><?=$row['nom_message']?></td>
                                                <td><?=$row['mail_message']?></td>
                                                <td><?=$row['sujet_message']?></td>
                                                <td><?=$row['texte_message']?></td>
                                              </tr>

                                                <?php
                                                endwhile;
                                              ?>

                                      </tbody>
                                    </table>
                                </div>
                      

            

                <div>
                     <a href="#top" id="up"> <img class="flechehaut" src="images/arrow-up.png"> </a>
                </div>

            </section>         
            
     <script src="Main.js"></script>
     </body>
     </html>