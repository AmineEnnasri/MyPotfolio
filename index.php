<?php 

      if(isset($_POST['envoyer'])) {
        
        require_once 'recaptcha/autoload.php';
        
        $recaptcha = new \ReCaptcha\ReCaptcha('Clé secrete reCaptcha');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'],);
        if ($resp->isSuccess()) {
          extract($_POST);
          if(isset($mail) && $mail != "" &&
            isset($object) && $object != "" &&
            isset ($message) && $message != "" ){
             
                $to = "ennasriamine5@gmail.com";
                $subject = "Message provenant de :". $mail;
  
                $message = "
                    <p> Vous reçu un message de <strong> ".$mail."</strong></p>
                    <p> <strong> Object : </strong> ".$object."</p>
                    <p> <strong> Message : </strong> ".$message."</p>
  
                ";
  
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
                // More headers
                $headers .= 'From: <'.$mail.'>' . "\r\n";
  
                // envoi du mail
                $send = mail($to,$subject,$message,$headers);
  
                //verification ennvoi mail 
  
                if($send){
                  $_SESSION['succes_message'] = "Message envoyé avec succès !";
                }else {
                  $info = "Une erreur est survenue !";
                }
                
  
  
  
          }else{
            $info = "Veuillez remplir tout les champs !";
          }
          
        } else {
            $errors = $resp->getErrorCodes();
            $info = "Captcha non valide";
          
        }

      }
      
      ?>


<!DOCTYPE html>
<html lang="fr">
  <head>

    <title>Amine ENNASRI</title>

    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Bienvenue sur le portofolio de Amine ENNASRI, cliquez pour en savoir plus.">
    <meta name="Subject" content="Portofolio">
    <meta name="Author" content="Amine ENNASRI">
    <meta name="Identifier-Url" content="www.amineennasri.fr">
    <meta name="Rating" content="general">
    <meta name="Geography" content="Paris,France,75000">
    <meta name="Category" content="engineering">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/project-card.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" href="assets/Amine/AE.ico" />
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
  </head>

  <header class="en-tete">

      <div id="en-tete" class="load">
        <h1>BONJOUR,</h1>

        <div id="macOsScreen">

          <div id="barre">
            <div id="cercleR"></div>
            <div id="cercleJ"></div>
            <div id="cercleV"></div>
          </div>

          <pre id="typewriter">
            <span class="var-highlight">let</span> me = {
                Prenom: <span class="string-highlight">'Amine'</span>,
                Nom: <span class="string-highlight">'ENNASRI'</span>,
                Age: <span class="string-highlight">'22'</span>,
                Competences:[
                            <span class="string-highlight">'Java, PHP'</span>,
                            <span class="string-highlight">'Javascript, Typescript, HTML, CSS'</span>,
                            <span class="string-highlight">'MySQL,PostgreSQL,MariaDB, SQL Server'</span>,
                            <span class="string-highlight">'JSP, JSTL, JPA, Maven, Hibernate, MVC'</span>,
                            <span class="string-highlight">'Git, GitHub, GitLab'</span>,
                            <span class="string-highlight">'Spring (Boot ,IOC, MVC, Data, Security), JavaFX, Angular : Angular 13, ORM : Hibernate'</span>,
                            <span class="string-highlight">'JUnit, PHPUnit'</span>,
                            <span class="string-highlight">'Agile (Scrum), UML et Design Pattern.'</span>,
                            <span class="string-highlight">'JUnit, PHPUnit'</span>,
                            <span class="string-highlight">'Windows, Linux'</span>];
            };
          </pre>

        </div>
        <h2><strong>Scrollez pour en savoir plus !</strong> </h2>
        
      </div>
  
      <span class="material-symbols-outlined">
        keyboard_double_arrow_down
        </span>

    </header>

  <body>

    <div id="content">

      <h1>MES PROJETS</h1>
    
          <div class="project_gallery"></div>
              

      <h1>COMPÉTENCES</h1>

      <div id="skills">
        <div class="group">
            <img src="assets/icons/angular.png" alt="angular">
            <img src="assets/icons/typescript.png" alt="typescript">
            <img src="assets/icons/java.png" alt="java">

      </div>
        <div class="group">
            <img src="assets/icons/php.png" alt="php">
            <img src="assets/icons/javascript.png" alt="javascript">
            <img src="assets/icons/html.png" alt="html">
            <img src="assets/icons/css.png" alt="css">
            <img src="assets/icons/bootstrap.png" alt="bootstrap">
        </div>
        <div class="group">
            <img src="assets/icons/jquery.png" alt="jquery">
            <img src="assets/icons/git.png" alt="GIT">
            <img src="assets/icons/docker.png" alt="docker">
        </div>
    
      </div>

      <h1>PARCOURS</h1>
      <div class="parcours">

  <div class="professionel">
    <h2>Professionnel</h2>
    <div class="grdf">
      <div class="left">
        <img src="assets/OTHER/grdf.png" alt="Logo GRDF">
      </div>
      <div class="right">
        <h3>Alternance : Développeur full stack & chef de projet</h3>
        <div class="content">
          <p><strong>Durée :</strong> Octobre 2022 - Septembre 2024 </p>
          <p><strong>Entreprise :</strong> GRDF</p>
          <p><strong>Ville :</strong> Nancy </p>
          <p><strong>Résumé :</strong> L'outil Vulnérabilités représente une innovation pour GRDF, offrant une assistance décisionnelle pour le renouvellement des infrastructures de distribution de gaz naturel. Il facilite également la gestion et le suivi des chantiers de renouvellement de ces infrastructures.</p>
        </div>
      </div>
    </div>
    <div class="veolia">
      <div class="left">
        <img src="assets/OTHER/veolia.png" alt="Logo VEOLIA">
      </div>
      <div class="right">
        <h3>Stage : Développeur web</h3>
        <div class="content">
          <p><strong>Durée :</strong> Avril 2022 - Juin 2022 </p>
          <p><strong>Entreprise :</strong> Veolia</p>
          <p><strong>Ville :</strong> Rabat, Maroc</p>
          <p><strong>Résumé :</strong> Études, Conception et Réalisation d'une application web pour la gestion de la ﬁle d'attente à la borne de consultation avec estimation du délais d'attente, attribution des clients sur les guichets disponible, interface pour les agents pour gérer le flux des clients...etc.</p>
        </div>
      </div>
    </div>

  </div>
  <div class="SCOLAIRE">
    <h2>Scolaire</h2>
    <div class="master">
      <div class="left">
        <img src="assets/OTHER/Logo_cesi_2022.png" alt="Logo CESI">
      </div>
      <div class="right">
        <h3>Master Manager en architecture et applications logicielles des Systèmes d'Information</h3>
        <div class="content">
          <p><strong>Année :</strong> 2022-2024 </p>
          <p><strong>École :</strong> CESI</p>
          <p><strong>Ville :</strong> Nancy </p>
        </div>
      </div>
    </div>
    <div class="licence">
      <div class="left">
        <img src="assets/OTHER/univ_lorraine.png" alt="Logo Université de Lorraine">
      </div>
      <div class="right">
        <h3>Licence Informatique</h3>
        <div class="content">
          <p><strong>Année :</strong> 2019-2022 </p>
          <p><strong>École :</strong> Université de Lorraine - FST Nancy</p>
          <p><strong>Ville :</strong> Nancy </p>
        </div>
      </div>
    </div>
  </div>
</div>

      <h1>À PROPOS DE MOI</h1>

      <div id="about_me">

        <img src="assets/Amine/amine.png" alt="Photo Amine ENNASRI">

        <div class="qrCode">

        <p>
        Je m'appelle Amine ENNASRI, un jeune passionné de développement informatique âgé de 22 ans résidant à Nancy. Actuellement, je suis étudiant en MAALSI (Manager en Architecture et Applications Logiciels des Systèmes d'Information) au CESI Nancy. Je suis engagé dans un apprentissage enrichissant au sein de l'entreprise GRDF à Nancy, où je cumule les responsabilités de développeur Full Stack et chef de projet.
        </p>

        <a href="assets/Amine/CV_ENNASRI_Amine.pdf" download> Télécharger mon CV</a>
        
      </div>



      </div>

      <h1>CONTACT</h1>


      <div id="contact">

            <?php 
            // affiche message d'erreur
                if(isset($info)){ ?>

                  <p class="request_message" style ="color: red">
                  <?=$info?>
                </p>

                  <?php
                }

            ?>

            <?php 
            // affiche message succès
                if(isset($_SESSION['succes_message'])){ ?>

                  <p class="request_message" style ="color:green">
                  <?=$_SESSION['succes_message']?>
                </p>

                  <?php
                }

            ?>


            
        <form method="post" id="demo-form" >
            
          <label for="mail">Mail :</label>
          <input type="mail" name="mail" id="mail" require>

          <label for="object">Object :</label>
          <input type="text" name="object" id="object" require>

          <label for="text"> Votre message :</label>
          <textarea name="message" id="text" cols="30" rows="10" require></textarea>
         
            <!-- CAPTCHA -->

          <div class="g-recaptcha" data-sitekey=""></div>
         <button  name="envoyer" > Envoyer</button>
        </form>

        <script>
            function onSubmit(token) {
              document.getElementById("demo-form").submit();
            }
          </script>
 

      </div>


      <h1>RÉSEAUX SOCIAUX</h1>

    </div>
          
    

    <div id="white_block">
        <div class="contact_img">

               <a href="https://www.linkedin.com/in/ennasriamine/" target="_blank"><img src="assets/CONTACT/Linkedin.png" alt=" Linkedin"></a>
               <a href="https://github.com/AmineEnnasri" target="_blank"><img src="assets/CONTACT/Github.png" alt=" Github"></a> 

        </div>
    </div>


    <footer>

      <p>ENNASRI AMINE | 2024</p>

    </footer>

        <!-- Models -->
        <script src="JAVASCRIPT/models/project.js"></script>

        <!-- Templates -->
        <script src="JAVASCRIPT/templates/projectCard.js"></script>
    
        <!-- Api -->
        <script src="JAVASCRIPT/api/Api.js"></script>
    
        <!-- Entry point -->
        <script src="JAVASCRIPT/App.js"></script>


        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/greentfrapp/pocoloco@minigl/minigl.js"></script>
        <script src="JAVASCRIPT/functions.js"></script>

  </body>
</html>