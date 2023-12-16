<?php
$data=yaml_parse_file('assets/yaml/accueil.yaml');
?>

<div class="EmptyBlocTop2" id="accueil"></div>
            <section class="Host">

                <img class="Profil" src="assets/images/IMG_9149.JPG">
                <section class="Status">

                <?php
                    echo '<div class="StatusText">'.($data["statue"]).'</div>';?>
                    <div class="Separator"></div>
                <?php
                    echo '<div class="StatusText">'.($data["profil"]).'</div>';?>
            </section>