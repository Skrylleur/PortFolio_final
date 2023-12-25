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

                        <div class="AutoSaveText">Téléchargez mon CV en PDF</div>
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
                        <li><a href="#a-propos" class="nav-link" id="a-propos-link">A propos</a></li>
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
            require("assets/php/a_propos.php");
            require("assets/php/competences.php");
            require("assets/php/experiences.php");
            require("assets/php/formation.php");
            require("assets/php/contact.php");
            ?>
        
        </section>
        
        <section class="footer">
            
        <?php
        require("assets/php/footer.php");?>

        </section>

    </body>
</html>