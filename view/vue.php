<?php
class Vue {
  // ENTETE // ENTETE // ENTETE // ENTETE

  public function Confidentialite() {
    $this->entete();
    echo "
    
    <div class='d-flex justify-content-center main-content content-rules'>
      <div class='card content-confidentialite'>
        <h2>Politique de Confidentialité</h2>
        <p>Chez Cozy Spot, nous nous engageons à protéger et à respecter votre vie privée. Cette Politique de Confidentialité explique comment nous collectons, utilisons, divulguons et protégeons vos informations personnelles lorsque vous utilisez notre site web (www.cozyspot.fr) et nos services de réservation et de location de logements en France.</p>
        
        <div class='content-confi'>
          <h3>1. Informations Collectées</h3>
          <p>Nous collectons différents types d'informations lorsque vous utilisez notre site, notamment :</p>
          <ul>
            <li><strong>Informations Personnelles</strong> : nom, adresse e-mail, numéro de téléphone, adresse postale, date de naissance, informations de paiement.</li>
            <li><strong>Informations de Réservation</strong> : détails sur les réservations, les dates de séjour, les préférences et les demandes spéciales.</li>
            <li><strong>Informations Techniques</strong> : adresse IP, type de navigateur, système d'exploitation, pages visitées, temps de visite, et autres données de connexion.</li>
          </ul>
        </div>
        
        <div class='content-confi'>
          <h3>2. Utilisation des Informations</h3>
          <p>Nous utilisons vos informations pour :</p>
          <ul>
            <li>Traiter et gérer vos réservations.</li>
            <li>Communiquer avec vous concernant vos réservations et notre service.</li>
            <li>Améliorer notre site web et nos services.</li>
            <li>Vous envoyer des informations promotionnelles et des offres spéciales, avec votre consentement.</li>
            <li>Répondre à vos demandes et questions.</li>
            <li>Garantir la sécurité et la protection de notre site web.</li>
          </ul>
        </div>

        <div class='content-confi'>
          <h3>3. Partage des Informations</h3>
          <p>Nous ne partageons vos informations personnelles qu'avec des tiers dans les cas suivants :</p>
          <ul>
            <li><strong>Fournisseurs de Services</strong> : Nous travaillons avec des fournisseurs de services tiers qui nous aident à gérer notre activité, comme les prestataires de paiement et les services d'hébergement.</li>
            <li><strong>Obligations Légales</strong> : Nous pouvons divulguer vos informations si la loi l'exige, ou pour répondre à une procédure judiciaire, une demande gouvernementale, ou pour protéger nos droits.</li>
            <li><strong>Transactions Commerciales</strong> : En cas de fusion, d'acquisition ou de vente de tout ou partie de nos actifs, vos informations peuvent être transférées dans le cadre de cette transaction.</li>
          </ul>
        </div>

        <div class='content-confi'>
        <h3>4. Sécurité des Données</h3>
        <p>Nous prenons des mesures raisonnables pour protéger vos informations contre l'accès, l'utilisation ou la divulgation non autorisés. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est totalement sécurisée.</p>
        </div>

        <div class='content-confi'>
          <h3>5. Vos Droits</h3>
          <p>Conformément à la loi applicable, vous disposez de droits concernant vos informations personnelles, notamment :</p>
          <ul>
            <li>Le droit d'accéder à vos données.</li>
            <li>Le droit de rectification.</li>
            <li>Le droit de suppression.</li>
            <li>Le droit de limitation du traitement.</li>
            <li>Le droit à la portabilité des données.</li>
            <li>Le droit de vous opposer au traitement de vos données.</li>
          </ul>
          <p>Pour exercer ces droits, veuillez nous contacter à l'adresse suivante : <a href='mailto:privacy@cozyspot.fr'>privacy@cozyspot.fr</a>.</p>
        </div>

        <div class='content-confi'>
          <h3>6. Cookies et Technologies Similaires</h3>
          <p>Notre site utilise des cookies et d'autres technologies similaires pour améliorer votre expérience de navigation, analyser l'utilisation du site et afficher des publicités personnalisées. Vous pouvez gérer vos préférences en matière de cookies dans les paramètres de votre navigateur.</p>
        </div>

        <div class='content-confi'>
          <h3>7. Modifications de cette Politique de Confidentialité</h3>
          <p>Nous pouvons mettre à jour cette Politique de Confidentialité de temps à autre. Nous vous informerons de tout changement en publiant la nouvelle Politique sur notre site et en modifiant la date de mise à jour en haut de cette page.</p>
        </div>

        <div class='content-confi'>
          <h3>8. Contact</h3>
          <p>Pour toute question concernant cette Politique de Confidentialité ou pour exercer vos droits, veuillez nous contacter :</p>
          <p>Email : <a href='mailto:privacy@cozyspot.fr'>privacy@cozyspot.fr</a><br>
          Adresse : Cozy Spot, 123 Rue de l'Hébergement, 75000 Paris, France</p>
        </div>
      </div>
    </div>

    ";
    $this->fin();
}

  public function Conditions() {
    $this->entete();
    echo"
    <div class='d-flex justify-content-center main-content content-rules'>
    <div class='card content-confidentialite'>
      <h2>Conditions Générales</h2>
      <p>Bienvenue sur Cozy Spot. En utilisant notre site web (www.cozyspot.fr) et nos services de réservation et de location de logements en France, vous acceptez de respecter les conditions générales suivantes. Veuillez les lire attentivement avant de procéder à toute réservation.</p>
      
      <div class='content-confi'>
      <h3>1. Acceptation des Conditions</h3>
      <p>En accédant à notre site web et en utilisant nos services, vous acceptez d'être lié par les présentes Conditions Générales et par notre Politique de Confidentialité. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre site et nos services.</p>
      </div>
      
      <div class='content-confi'>
      <h3>2. Services de Réservation</h3>
      <p>Cozy Spot permet aux utilisateurs de réserver et de louer des logements en France. Toutes les réservations sont soumises à la disponibilité et à l'acceptation par le propriétaire du logement.</p>
      </div>

      
      <div class='content-confi'>
      <h3>3. Obligations des Utilisateurs</h3>
      <p>En utilisant nos services, vous vous engagez à :</p>
      <ul>
        <li>Fournir des informations exactes, complètes et à jour lors de la création de votre compte et de vos réservations.</li>
        <li>Respecter les lois et réglementations locales, ainsi que les règles et conditions spécifiques de chaque logement.</li>
        <li>Ne pas utiliser notre site ou nos services à des fins illégales ou non autorisées.</li>
      </ul>
      </div>


      <div class='content-confi'>
      <h3>4. Paiements et Annulations</h3>
      <p>Les modalités de paiement et les politiques d'annulation varient selon les logements. Vous serez informé des conditions spécifiques au moment de la réservation. En cas d'annulation, des frais peuvent s'appliquer selon les termes définis par le propriétaire du logement.</p>
      </div>

      
      <div class='content-confi'>
      <h3>5. Responsabilités</h3>
      <p>Cozy Spot agit en tant qu'intermédiaire entre les locataires et les propriétaires de logements. Nous ne sommes pas responsables des actions, omissions ou manquements des propriétaires ou des locataires. Nous déclinons toute responsabilité pour les dommages directs, indirects, accessoires ou punitifs découlant de l'utilisation de notre site ou de nos services.</p>
      </div>

      
      <div class='content-confi'>
      <h3>6. Modification des Conditions</h3>
      <p>Nous nous réservons le droit de modifier ces Conditions Générales à tout moment. Nous vous informerons de tout changement en publiant les nouvelles Conditions sur notre site et en modifiant la date de mise à jour en haut de cette page. Votre utilisation continue de notre site après la publication des modifications constitue votre acceptation des nouvelles Conditions.</p>
      </div>

      
      <div class='content-confi'>
      <h3>7. Propriété Intellectuelle</h3>
      <p>Tout le contenu de notre site, y compris les textes, images, logos et graphiques, est la propriété de Cozy Spot ou de ses concédants et est protégé par les lois sur la propriété intellectuelle. Vous ne pouvez pas utiliser, reproduire ou distribuer ce contenu sans notre autorisation écrite préalable.</p>
      </div>


      <div class='content-confi'>
      <h3>8. Contact</h3>
      <p>Pour toute question concernant ces Conditions Générales, veuillez nous contacter :</p>
      <p>Email : <a href='mailto:contact@cozyspot.fr'>contact@cozyspot.fr</a><br>
      Adresse : Cozy Spot, 123 Rue de l'Hébergement, 75000 Paris, France</p>
      <p>En utilisant notre site web, vous acceptez les termes de ces Conditions Générales. Nous vous remercions de votre confiance et nous engageons à offrir le meilleur service possible.</p>
      </div>
    </div>
  </div>
  
    ";
    $this->fin();
  }
  public function Plan() {
    $this->entete();
    echo"
    <div class='d-flex justify-content-center main-content'>
    </div>
    ";
    $this->fin();
  }
  public function Fonctionnement() {
    $this->entete();
    echo"
    <div class='d-flex justify-content-center main-content content-rules'>
    <div class='card content-confidentialite'>
      <h2>Fonctionnement du Site</h2>
      <p>Bienvenue sur Cozy Spot, votre plateforme de réservation et de location de logements en France. Voici comment utiliser notre site pour trouver et réserver le logement parfait pour votre séjour.</p>
      
      <div class='content-confi'>
      <h3>1. Création de Compte</h3>
      <p>Pour commencer, créez un compte en fournissant vos informations personnelles (nom, adresse e-mail, mot de passe). Une fois votre compte créé, vous pouvez accéder à toutes les fonctionnalités de Cozy Spot.</p>
      </div>
      
      <div class='content-confi'>
      <h3>2. Recherche de Logement</h3>
      <p>Utilisez notre moteur de recherche pour trouver des logements disponibles en fonction de vos critères (destination, dates, type de logement, nombre de personnes, etc.). Vous pouvez affiner les résultats en utilisant des filtres supplémentaires comme le prix, les équipements, et les avis des autres utilisateurs.</p>
      </div>
      
      <div class='content-confi'>
      <h3>3. Consultation des Détails</h3>
      <p>Pour chaque logement, vous pouvez consulter une fiche détaillée incluant des photos, une description, les équipements disponibles, les règles de la maison, les avis des précédents locataires, et le prix. Prenez le temps de lire toutes les informations pour vous assurer que le logement répond à vos attentes.</p>
      </div>
      
      <div class='content-confi'>
      <h3>4. Réservation</h3>
      <p>Une fois que vous avez trouvé le logement idéal, cliquez sur le bouton 'Réserver'. Vous serez invité à entrer les détails de votre séjour (dates, nombre de personnes) et à confirmer la réservation. Vous devrez également fournir vos informations de paiement pour finaliser la réservation.</p>
      </div>
      
      <div class='content-confi'>
      <h3>5. Confirmation de Réservation</h3>
      <p>Après avoir effectué le paiement, vous recevrez un e-mail de confirmation contenant les détails de votre réservation, y compris les informations de contact du propriétaire. Conservez cet e-mail pour référence future.</p>
      </div>
      
      <div class='content-confi'>
      <h3>6. Communication avec le Propriétaire</h3>
      <p>Utilisez la messagerie intégrée de Cozy Spot pour communiquer avec le propriétaire avant et pendant votre séjour. Vous pouvez poser des questions sur le logement, organiser l'heure d'arrivée, ou signaler tout problème.</p>
      </div>
      
      <div class='content-confi'>
      <h3>7. Séjour</h3>
      <p>Profitez de votre séjour ! Respectez les règles de la maison et traitez le logement avec soin. Si vous rencontrez des problèmes, contactez le propriétaire via la messagerie de Cozy Spot.</p>
      </div>

      
      <div class='content-confi'>
      <h3>8. Évaluation</h3>
      <p>Après votre séjour, nous vous invitons à laisser un avis sur le logement et le propriétaire. Votre retour est précieux pour aider les futurs locataires à faire leur choix et pour améliorer la qualité des services sur Cozy Spot.</p>
      </div>

      
      <div class='content-confi'>
      <h3>9. Assistance</h3>
      <p>Si vous avez des questions ou des problèmes à tout moment, notre service client est à votre disposition. Vous pouvez nous contacter par e-mail à <a href='mailto:support@cozyspot.fr'>support@cozyspot.fr</a> ou via la section 'Contactez-nous' sur notre site.</p>
      <p>Merci d'utiliser Cozy Spot. Nous espérons que vous trouverez le logement parfait pour votre prochain séjour en France.</p>
      </div>

    </div>
  </div>
  
    ";
    $this->fin();
  }

  public function entete() {
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/css.css" rel="stylesheet">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Short+Stack&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Dosis:wght@200..800&family=Neucha&family=Short+Stack&display=swap" rel="stylesheet">
            <link rel="icon" type="image/png" href="./images/logoquitue.png">

            <style>

            </style>
            <title>CozySpot</title>
        </head>
        <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <img class="logonavbar" src="./images/logoquitue.png"/>
              <a class="navbar-brand" href="index.php">CozySpot</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=annonce">Annonces</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=recherche">Rechercher <i class="fa-solid fa-magnifying-glass"></i></a>
                  </li>';
                  // Condition pour afficher le bouton Connexion/Déconnexion
                  if(isset($_SESSION['Proprietaire_session'])) {
                    echo '
                    <div class="dropdown">
                      <button class="btn-text-color dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Gérer 
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="index.php?action=mesLogements">Mes Logements</a></li>
                        <li><a class="dropdown-item" href="index.php?action=logout">Déconnexion</a></li>
                      </ul>
                    </div>';
                  } elseif(isset($_SESSION['Client_session'])){
                    echo '
                    <div class="dropdown">
                      <button class="btn-text-color dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Gérer 
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="index.php?action=mesReservationsClient">Mes Réservations</a></li>
                        <li><a class="dropdown-item" href="index.php?action=logout">Déconnexion</a></li>
                      </ul>
                    </div>';
                  }
                  else{
                    echo '
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?action=inscription&id=1">Inscription</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?action=connexion">Connexion</a>
                      </li>';
                  }
                  echo '
                </ul>
              </div>
            </div>
          </nav>';
  }
  // ACCUEIL UTILISATEUR AVEC LES ANNONCES 
  public function accueil($lesAnnonces, $message = null) {
    $this->entete();
    if($message != null) {
      echo "<div class='alert alert-danger' role='alert'>".$message."</div>";
    }
    echo '
              <div class="container d-flex justify-content-center main-content">
                <div class="container-fluid bg-transparent my-4 p-3" style="position: relative;">
                  <div class="row">';
    foreach($lesAnnonces as $annonce) {
      echo '
                        <div class="col-md-4 mb-4">
                          <div class="card carte h-100">
                            <div class="card-body accueil-card">
                              <h5 class="card-text">'.$annonce["description"].'</h5>
                              <h6 class="card-text">'.$annonce["codePostal"]." ".$annonce["ville"].'</h6>
                              <img class="card-img img-fluid-acc" src="./images/'.$annonce["lienPhoto"].'">
                            </div>
                            <div class="mx-3 mb-3">
                              <i>Référence :'.$annonce["id"].'</i>
                              <a class="float-end" href="index.php?action=demandeReservation&id='.$annonce["id"].'">
                                <i class="fa-solid fa-arrow-right text-noir"></i>
                              </a>
                            </div>
                          </div>
                        </div>';
        }
        echo '</div></div></div>';
        $this->fin();
    }
    // RECHERCHE RECHERCHE RECHERCHE RECHERCHE RECHERCHE 
    public function recherche($lesRecherche){
      $this->entete();
      echo '
      <div class="container d-flex justify-content-center main-content">
        <div class="container-fluid bg-transparent my-4 p-3" style="position: relative;">
          <div class="row">
        <form method="POST" class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Entrer un mot clé" aria-label="Search" name="barRecherche">
          <button class="btn btn-secondary" type="submit" name="btnRecherche">Rechercher</button>
        </form>
        ';
      if (isset($lesRecherche) && is_array($lesRecherche)) {
        foreach ($lesRecherche as $recherche) {
          echo '
            <div class="col-md-4 mb-4">
              <div class="card carte">
                  <div class="card-body">
                    <h5 class="card-text">' . $recherche["description"] . '</h5>
                    <h6 class="card-text">'.$recherche["codePostal"]." ".$recherche["ville"]. '</h6>
                    <img class="card-img" src="./images/'.$recherche["lienPhoto"].'">
                  </div>
                  <li class="list-group-item">Réference : ' . $recherche["id"] . '</li>
                  <a class="nav-link" href="index.php?action=demandeReservation&id='.$recherche ["id"].'">Voir l\'offre</a>
                </div>
              </div>
            ';
          }
        }else{
          echo "
          <div class='main-content d-flex align-items-center justify-content-center'>
          <div class='text-center'>
            </br>
            <p class='fs-1'>Essayez une nouvelle recherche ! </p>
            <a href='index.php' class='btn btn-secondary'>Allez à l'accueil !</a>
          </div>
        </div>";
        }
        $this->fin();
    }

  // PERMET LA DECONNEXION DE L'UTILISATEUR
  public function deconnexion($message = null){
    $this->entete();
    session_destroy();
  }
  // AFFICHAGE CONNEXION UTILISATEUR
  public function connexion($message = null) {
    if(!isset($_SESSION)) {
      session_start();
    }
    $this->entete();
    if($message != null) {
      echo "<div class='alert alert-danger' role='alert'>".$message."</div>";
    }
    echo "
      <div class='d-flex justify-content-center main-content'>
        <form method='POST' action='index.php?action=connexion'>
          <h1>Se connecter : </h1>
          <br/>
          <div class='form-group'>
            <label for='mail'> Adresse email </label>
            <input type='mail' name='mail' class='form-control' id='email' placeholder='votrepseudo@gmail.com' required>
          </div>
          <div class='form-group'>
            <label for='motdepasse'> Mot de passe </label>
            <input type='password' name='mdp' class='form-control' id='motdepasse' placeholder='●●●●●●●' required>
          </div>
          <br/>
          <a class='a' href='index.php?action=inscription'> Vous n'êtes pas encore inscrit? Inscrivez-vous ! </a>
          <br/>
          <br/>
          <button type='submit' class='btn btn-secondary' name='buttonconnect'>Connexion</button>
        </form>
      </div>
    ";
    $this->fin();
  }
  // RECHERCHE -> RECHERCHE  -> RECHERCHE
  public function recherchedeux() {
    $this->entete();
    echo '
    <form method="GET" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Entrer un mot clé" aria-label="Search" name="barRecherche">
        <button class="btn btn-outline-success" type="submit" name="btnRecherche">Rechercher</button>
    </form>
    ';

    $this->fin();
  }
  // PAGE INSCRIPTION -> PAGE INSCRIPTION  -> PAGE INSCRIPTION 
  public function inscription($message = null) {
    $this->entete();
    
    echo "
      <div class='d-flex justify-content-center main-content'>
        <form method='POST' action='index.php?action=inscription'>
          <h1>S'inscrire : </h1>
          <br/>
          <div class='form-group'>
            <label for='nom'>Votre nom</label>
            <input type='text' name='nom' class='form-control' id='nom' required>
          </div>
          <div class='form-group'>
            <label for='prenom'>Votre prénom</label>
            <input type='text' name='prenom' class='form-control' id='prenom' required>
          </div>
          <div class='form-group'>
            <label for='nom'>Votre mail</label>
            <input type='text' name='mail' class='form-control' id='mail'  placeholder='votrepseudo@gmail.com' required>
          </div>
          <div class='form-group'>
            <label for='mdp'>Mot de passe</label>
            <input type='password' name='mdp' class='form-control' id='mdp'  placeholder='●●●●●●' required>
          </div>
          <div class='form-group'>
            <label for='mdp2'>Confirmer votre mot de passe</label>
            <input type='password' name='mdp2' class='form-control' id='mdp2' placeholder='●●●●●●' required>
          </div>
          <br/>
          <a class='a' href='index.php?action=connexion'>Vous êtes déjà client ? Connectez-vous !</a>
          <br/>
          <br/>
          <button type'submit' class='btn btn-secondary' name='buttonregister'>Inscription</button>
        </form>
      </div>
    ";
    if($message != null) {
      echo "<div class='d-flex justify-content-center main-content'>
              <div class='alert alert-danger' role='alert'>".$message."</div>
            </div>";
    }
    $this->fin();
  }
  // DEMANDE DE RESERVATION  DEMANDE DE RESERVATION  DEMANDE DE RESERVATION  DEMANDE DE RESERVATION 
  public function demandeReservation($annonce, $date1, $date2) {
    $this->entete();
    echo '
    <div class="container d-flex justify-content-center main-content">
        <div class="container-fluid bg-transparent my-4 p-1" style="position:relative;">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card carte">
                        <div class="card-body-reserv">
                          <div class="text-center">
                            <h1>' . $annonce["description"] . '</h1>
                            <h3>' . $annonce["codePostal"] . ' - <b><i>' . $annonce["ville"] . '</b></i></h3>
                            <img class="img-fluid" src="./images/' . $annonce["lesPhotos"][0]["lien"] . '">
                          </div>
                            <div class="row">
                                <div class="col-md-4">
                                  </br>
                                    <h4 class="title-reserv">Détails : </h4>
                                    <p> Nombre de pièces : '.$annonce["nbPieces"].' </p>
                                    <p> Surface : '.$annonce["surfaceTotal"].' m²</p>
                                    <p> Tarif : '.$annonce["tarif"].' €</p>
                                </div>
                                <div class="col-md-4">
                                  </br>
                                  <h4 class="title-reserv">Disponibilités : </h4>
                                  <p> Du : '.$date1.' </p>
                                  <p> Au : '.$date2.' </p>
                                </div>
                                <div class="col-md-4">
                                  </br>
                                  <form method="post" action="">
                                  <h4 class="title-reserv">Réservation : </h4>
                                        <p> Date de début de réservation : <input type="date" name="dateDebut" value="" min="' . $annonce["lesDisponibilites"]["dateDebut"] . '" max="' . $annonce["lesDisponibilites"]["dateFin"] . '" required></p>
                                        <p> Date de fin de réservation : <input type="date" name="dateFin" value="" min="' . $annonce["lesDisponibilites"]["dateDebut"] . '" max="' . $annonce["lesDisponibilites"]["dateFin"] . '" required></p>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-secondary btnreserv" name="valider" value="Réserver">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    $this->fin();
  }
  // PAGE SI ON ARRIVE A RESERVER
  public function succes($message = null){
      $this->entete();

      echo '
      <div class="container d-flex justify-content-center main-content">
          <div class="container-fluid bg-transparent my-4 p-1" style="position:relative;">
              <div class="row">'; 
              if($message != null){
                echo '<h1>'.$message.'</h1>';
              }
              echo '
              <a class="a" href="index.php?action=accueil">Accueil</a>
              </div>
          </div>
      </div>';

      $this->fin();
  }
  // PAGE ANNONCE ACCESSIBLE VIA LA NAVBAR
  public function mesannonces($lesAnnonces) {
    $this->entete();
    echo '
    <div class="container d-flex justify-content-center main-content">
        <div class="container-fluid bg-transparent my-4 p-3">
            <div class="row">';
    foreach($lesAnnonces as $annonce) {
      echo '
                  <div class="col-md-12 mb-4">
                    <div class="card flex-row">
                      <img class="card-img-left custom-image" src="./images/'.$annonce["lienPhoto"].'" style="max-width: 30%;"/>
                      <div class="card-body d-flex flex-column">
                        <div id="ici">
                          <h4 class="card-title h5 h4-sm title-annonce">'.$annonce["description"].'</h4>
                          <p class="card-text">'.$annonce["codePostal"]." ".$annonce["ville"].'</p>
                        </div>
                        <div class="mt-auto">
                          <i class="ref-annonce">Référence :'.$annonce["id"].'</i>
                          <a class="float-end" href="index.php?action=demandeReservation&id='.$annonce["id"].'">
                              <i class="fa-solid fa-arrow-right text-noir"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>';
    }
    echo '
            </div>
        </div>
    </div>';
    $this->fin();
  }
  public function reservation($lesReservations) {
    $this->entete();

    echo '
  <div class="container d-flex justify-content-center main-content">
    <div class="container-fluid bg-transparent my-4 p-3">
      <div class="row">';
      foreach($lesReservations as $reservation) {
        echo '
          <div class="col-md-4 mb-4">
            <div class="card carte h-100">
              <div class="card-body">
                <h5 class="card-text">'.$reservation["description"].'</h5>
                <h6 class="card-text">'.$reservation["codePostal"]." ".$reservation["ville"].'</h6>
                <img class="card-img img-fluid" src="./images/'.$reservation["lienPhoto"].'">
              </div>
              <div class="mx-3 mb-3">
                <a class="float-end" href="index.php?action=annulerReservation&id='.$reservation["id"].'">
                  <i class="fa-solid  text-danger">Annuler la Reservation</i>
                </a>
              </div>
            </div>
          </div>';
          }
    echo '
      </div>
    </div>
  </div>';

    $this->fin();
  }
  // DROP DOWN BUTTON -> PROPRIETAIRES -> VOIR MES LOGEMENTS 
  public function mesLogements($lesLogements){
    $this->entete();
    echo '<div class="container d-flex justify-content-center main-content">';
    echo '<div class="container-fluid bg-transparent my-4 p-3">';
    echo '<div class="row">';
    foreach ($lesLogements as $logement) {
        echo '
            <div class="col-md-12 mb-4">
                <div class="card flex-row">
                    <div class="card-body d-flex">
                        <img class="card-img-left custom-image" src="./images/'.$logement["lien"].'" style="max-width: 30%;"/>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="card-title h5 h4-sm">' . $logement["description"] . '</h4>
                            <p class="card-text">' . $logement["codePostal"] . " " . $logement["ville"] . '</p>
                        </div>
                        <div class="mt-auto">
                          <i>Gérer les disponibilités</i>
                          <a class="float-end" href="index.php?action=GestionsDisponibiliteIdLogement&idLogement='.$logement["id"].'"><i class="fa-solid fa-arrow-right text-noir"></i></a>
                        </div>
                        <div class="mt-auto">
                          <i>Gérer les réservations</i>
                          <a class="float-end" href="index.php?action=GestionsReservationIdLogement&idLogement='.$logement["id"].'"><i class="fa-solid fa-arrow-right text-noir"></i></a>
                        </div>
                    </div>
                </div>
            </div>';
    }
    echo '</div></div></div>';
    $this->fin();
  }
  // VUE MES RESERVATIONS COTE CLIENTS 
  public function mesReservationsClient($lesReservations)
  {
      $this->entete();
      echo '
        <div class="container d-flex justify-content-center main-content">
          <div class="container-fluid bg-transparent my-4 p-3">
            <div class="row">';
            if (empty($lesReservations)) {
              echo '<p>0</p>';
            } else {
              foreach ($lesReservations as $reservationclient) {
                echo '
                <div class="col-md-12 mb-4">
                  <div class="card flex-row">
                    <img class="card-img-left custom-image" src="./images/'.$reservationclient["lienPhoto"].'" style="max-width: 30%;"/>
                    <div class="card-body d-flex flex-column">
                      <div id="ici">
                        <h4 class="card-title h5 h4-sm">'.$reservationclient["description"] . '</h4>
                        <p class="card-text">'.$reservationclient["codePostal"].' '.$reservationclient["ville"] . '</p>
                        <p>Nombre de pièces : '.$reservationclient["nbPieces"].'</p>
                        <p>Surface totale : '.$reservationclient["surfaceTotal"].'</p>
                        <p>Date de début du séjour : '.$reservationclient["dateDebut"].' au '.$reservationclient["dateFin"].'</p>
                        <p>total : '.$reservationclient["Total"].'</p>
                        <p>tarif: '.$reservationclient["tarif"].'</p>
                      </div>
                      <div class="mt-auto">
                        <i>Référence :'.$reservationclient["id"].'</i>
                        <a class="float-end" href="index.php?action=annulerReservation&id='.$reservationclient["id"] . '">
                          ! Annuler la reservation !
                        </a>
                      </div>
                    </div>
                  </div>
                </div>';
              }
            }
            echo '
            </div>
          </div>
        </div>';
      $this->fin();
  }
  //AFFICHAGE DES DISPONIBILITES QUAND MON PROPRIO CLIQUE SUR GERER LES DISPO
  public function GestionsDisponibiliteIdLogement($lesDisponibilites){
    $this->entete();
    $idLogement = $lesDisponibilites[0]['idLogement'];
    echo '
        <div class="container d-flex justify-content-center main-content">
          <div class="container-fluid bg-transparent my-4 p-3">
            <div class="row">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ajouter une nouvelle disponibilité </h5>
                  <form action="?action=GestionsDisponibiliteIdLogement&idLogement='.$idLogement.'" method="post">
                    <label for="dateDebut"> Date de début : </label>
                    <input type="date" name="dateDebut" required>
                    <label for="dateFin"> Date de fin : </label>
                    <input type="date" name="dateFin" required>
                    <label for="tarif"> Tarif souhaité : </label>
                    <input type="number" name="tarif" required>
                    <input type="submit" value="Ajouter">
                  </form>
                </div>
              </div>';
            $numeroDisponibilite = 1;
            foreach($lesDisponibilites as $disponibilites){
              echo '
              <div class ="col-md-12 mb-4">
                <div class="card flex-row">
                  <div class="card-body d-flex flex-column">
                    <h4 class="card-title h5 h4-sm">Disponibilité N°'.$numeroDisponibilite.'</h4>
                    </br>
                    <p> Date de début :'.$disponibilites['dateDebut'].'</p>
                    <p> Date de fin :'.$disponibilites['dateFin'].'</p>
                  </div>
                </div>
              </div>';
              $numeroDisponibilite++;
            }
    echo '  </div>
          </div>
        </div>
    ';  
    $this->fin();  
  }
  //AFFICHAGE DES RESERVATIONS QUAND MON PROPRIETAIRE CLIQUE SUR GERER LES RESERVATIONS DUN LOG.
  public function GestionsReservationIdLogement($lesReservations){
    $this->entete();
    echo '
        <div class="container d-flex justify-content-center main-content">
          <div class="container-fluid bg-transparent my-4 p-3">
            <div class="row">';
              if (!empty($lesReservations)){
                foreach($lesReservations as $reservationlogement){
                  echo '
                  <div class ="col-md-12 mb-4">
                    <div class="card flex-rox">
                      <div class="card-body d-flex flex-column">
                        <div>
                          <h4 class="card-title h5 h4-sm">Réservation N°'.$reservationlogement["id"].'</h4>
                          <p>Date de début : '.$reservationlogement["dateDebut"].'<p>
                          <p>Date de fin : '.$reservationlogement["dateFin"].'<p>
                          <p>Client : ' .$reservationlogement["clientNom"].' '.$reservationlogement["clientPrenom"].'<p>
                          <p>Logement : '.$reservationlogement["logementDescription"].'<p>
                        </div>
                        <div class"mt auto">
                          <a class="float-end" href="index.php?action=annulerReservation&id='.$reservationlogement["id"].'">
                            Annuler la réservation
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  ';
                }
              }else{
                echo '<h2> Ce Logement ne possède pas de reservation pour le moment </h2>';
              }
      echo '</div>
          </div>
        </div>';
        $this->fin();
  }
  public function erreur404() {
    http_response_code(404);
    $this->entete();
    echo "
      <div class='main-content d-flex align-items-center justify-content-center'>
        <div class='text-center'>
          <h1 class='display-1 fw-bold'>404</h1>
          <p class='fs-1'> <span class='text-danger'>Opps!</span> Page introuvable.</p>
          <p class='lead'>La page que vous cherchez n'éxiste pas.</p>
          <a href='index.php' class='btn btn-secondary'>Allez à l'accueil !</a>
        </div>
      </div>
    ";

    $this->fin();
  }

  public function erreur($message = null) {
    $this->entete();

    echo '
    <div class="container d-flex justify-content-center main-content">
    <div class="container-fluid bg-transparent my-4 p-3">
        <div class="row">';
        if($message != null){
          echo '<h1>Erreur  : '.$message.'</h1>';
        }
      echo '
      <br/></div>
      </div>
      </div>
    ';

    $this->fin();
  }
  public function fin() {
    echo "
    <footer class='footer mt-auto py-3'>
      <div class='container text-center'>
        <div class='row footerdiv'>
          <div class='col-md-2 col-sm-4'>
            <p class='footer-text'>© 2024 CozySpot</p>
          </div>
          <div class='col-md-2 col-sm-4'>
            <a href='index.php?action=Confidentialite' class='footer-link'>Confidentialité</a>
          </div>
          <div class='col-md-2 col-sm-4'>
            <a href='index.php?action=Conditions' class='footer-link'>Conditions générales</a>
          </div>
          <div class='col-md-2 col-sm-4'>
            <a href='index.php?action=Plan' class='footer-link'>Plan du site</a>
          </div>
          <div class='col-md-2 col-sm-4'>
            <a href='index.php?action=Fonctionnement' class='footer-link'>Fonctionnement du site</a>
          </div>
        </div>
      </div>
    </footer>
      </body>
      <script src='https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js'></script>
      <script src='https://kit.fontawesome.com/18d92584e8.js' crossorigin='anonymous'></script>
      </html>";
  }
}
?>