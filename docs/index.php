<?php
require_once("yaml/yaml.php");
?>

<!DOCTYPE html lang="fr">
<html>
    <head>
        <meta charset="utf-8">
        <title>Antonin GOURINCHAS - PortFolio</title>
        <link rel="stylesheet" href="assets/css/mainV2.css">
        <script src="assets/js/script.js"></script>
    </head>

    <body>

        <section class="header">
            
            <section class="HeaderPartOne">

                <div class="EmptyBlocTop"></div>

                <section class="FirstLine">

                    <section class="AutoSaveGroup"> <!-- Groupe AutoSave avec le texte et le logo .png-->

                        <div class="AutoSaveText">Enregistrement automatique</div>
                        <section class="AutoSaveGroup" id="autoSaveGroup">
                            <div class="AutoSaveBar2" id="autoSaveBar">
                                <div class="WhiteCircle" id="whiteCircle"></div>
                                <script>
                                    document.getElementById('autoSaveBar').addEventListener('click', function() {
                                        this.classList.toggle('clicked');
                                
                                        if (this.classList.contains('clicked')) {
                                            // Créer un lien de téléchargement
                                            const downloadLink = document.createElement('a');
                                            downloadLink.href = "assets/PDF/CV Antonin GOURINCHAS.pdf";  // Chemin du fichier PDF
                                            downloadLink.download = 'CV Antonin GOURINCHAS.pdf';  // Nom que j'attribu au fichier
                                            document.body.appendChild(downloadLink);
                                
                                            // Simuler un clic sur le lien
                                            downloadLink.click();
                                
                                            // Supprimer le lien après le téléchargement
                                            document.body.removeChild(downloadLink);
                                        }
                                    });
                                </script>
                        
                            </div>
                        </section>
                                    
                    </section>

                    <section class="Title"> <!-- Section Title -->

                        <div class="FirstTitle">Antonin GOURINCHAS - PortFolio</div>

                    </section>

                    <section class="RightPartHeader"> <!-- Section with 3 buttons .png -->

                        <section class="RightGroupHeader">
                            <img class="ReduceWindow" src="assets/images/ReduceWindow.png">
                            <img class="MiddleWindow" src="assets/images/Reduce.png">
                            <img class="CloseWindow" src="assets/images/Close.png">
                        </section>

                    </section>

                </section>

                <section class="Tab">

                    <ul>
                        <li><a href="#accueil" class="nav-link" id="accueil-link">Accueil</a></li>
                        <li><a href="#a-propos" class="nav-link" id="a-propos-link">À propos</a></li>
                        <li><a href="#competences" class="nav-link" id="competences-link">Compétences</a></li>
                        <li><a href="#experiences" class="nav-link" id="experiences-link">Expérience</a></li>
                        <li><a href="#formation" class="nav-link" id="formation-link">Formation</a></li>
                        <li><a href="#contact" class="nav-link" id="contact-link">Contact</a></li>
                    </ul>

                </section>

            </section>

            <section class="HeaderPartTwo">

                <section class="PoisitionBloc">

                    <div class="PoisitionBlocText">Text</div>
                    <div class="PoisitionBlocArrow"></div>

                </section>

                <section class="Points">

                    <div class="Square"></div>
                    <div class="Square"></div>
                    <div class="Square"></div>

                </section>

                <section class="FormulaBloc">

                    <div class="PoisitionBlocText">=A1*A2</div>
                    <div class="PoisitionBlocArrow"></div>

                </section>

            </section>

        </section>

        <section class="Main">
            
        <?php
        require("assets/php/accueil.php");
        ?>
        <?php
        require("assets/php/a_propos.php");
        ?>
        <?php
        require("assets/php/competences.php");
        ?>
        <?php
        require("assets/php/experiences.php");
        ?>
        <?php
        require("assets/php/formation.php");
        ?>
            <section class="contact" id="contact">
                <div class="ContactTitle">ME CONTACTER</div>

                <section class="InfoContact">

                    <!-- <section class="InfoContact2">
                        <textarea class="FistrNameContact" placeholder="Nom"></textarea>
                        <textarea class="LastNameContact" placeholder="Prénom"></textarea>
                    </section>

                    <textarea class="MailContact" placeholder="Votre adresse mail"></textarea>

                </section>

                <textarea placeholder="Écrivez votre message ici ..." class="TextZone"></textarea>
                <div class="SendButton">Envoyer</div> -->

                <form name="formulary" action="formulaire.php" method="get" class="">
                    <p>
                        <input type="radio" name="civil" value="Mme" /> Madame
                        <input type="radio" name="civil" value="Mr" /> Monsieur
                    </p>
                    <p>
                        Votre prénom :<br />
                        <input type="text" name="firstname" value="" />
                    </p>
                    <p>
                        Votre nom :<br />
                        <input type="password" name="name" value="" /> 
                    </p>
                    <p>
                        Vous êtes :<br />
                        <select name="profil">
                            <option value="parti">Un particulier</option>
                            <option value="profe">Un professionnel</option>
                        </select>
                    </p>
                    <p>
                        Quel type de prestation recherchez vous ?<br />
                        <br />
                        <input type="checkbox" name="interest" value="for" />Formation Excel <br />
                        <input type="checkbox" name="interest" value="deve1" />Création de tableau Excel<br />
                        <input type="checkbox" name="interest" value="deve2" />Automatisation de tâches sur Excel<br />
                        <input type="checkbox" name="interest" value="devw1" /> Développement web en HTML, CSS et JS<br />
                        <input type="checkbox" name="interest" value="other" />Autre<br />
                    </p>
                    <p>
                        Votre message :<br />
                        <textarea name="message" rows="6" cols="40" placeholder="Saisissez votre message ici"></textarea>
                    </p>
                    <p>
                        <input type="submit" value="Send" />
                        <input type="reset" value="Clear" />
                    </p>
                </form>
            </section>
            
        </section>

        <section class="footer">

            <section class="FooterPart1">

                <section class="ArrowBlocs">
                    <span class="PositionBlocArrowLeft"></span>
                    <span class="PositionBlocArrowRight"></span>
                </section>

                <section class="tab">
                    <span class="TabBloc1"><strong>PortFolio1</strong></span>
                    <span class="TabBloc2"></span>
                </section>

            </section>

            <section class="FooterPart2">
                <span class="footertext">
                    Antonin GOURINCHAS © 2023, Tous droits réservés – Réalisation Antonin GOURINCHAS – Mentions légales – CGU – Politique de confidentialité – Médiateur à la consommation
                </span>
            </section>
        </section>


    </body>
</html>