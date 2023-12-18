<?php
    $data=yaml_parse_file('assets/yaml/contact.yaml');?>

<section class="Experiences" id="experiences">

<section class="contact" id="contact">
    <?php
    echo '<div class="ContactTitle">'.($data['title']).'</div>';?>

    <section class="InfoContact">

        <form name="formulary" action="formulaire.php" method="get" class="">
            <?php
            echo '<p>'.($data['yourGender'])." :".'</p>';?> 
            <p>
                <?php
                if (isset($data['gender']) && is_array($data['gender'])) {
                    // Générez les boutons radio en fonction des données YAML
                    foreach ($data['gender'] as $gender) {
                        echo '<input type="radio" name="civil" value="' . $gender . '" />' . ucfirst($gender) . '<br />';
                    }
                } else {
                    echo 'Aucune donnée de titre civile trouvée dans le fichier YAML.';
                }
                ?>                
            </p>
            <?php
            echo '<p>'.($data['yourFirstName'])." :".'<br /><input type="text" name="firstname" value="" /></p>';?>
            <?php
            echo '<p>'.($data['yourName'])." :".'<br /><input type="password" name="name" value="" /></p>';?>
            <?php
            echo '<p>' . $data['youAre'] . " :" . '<br />';

            if (isset($data['profil']) && is_array($data['profil'])) {
                echo '<select name="profil">';
                foreach ($data['profil'] as $profil) {
                    echo '<option value="parti">' . $profil . '</option>';
                }
                echo '</select></p>';
            }?>
            <?php
            echo '<p>' . $data['question'] . '<br /><br />';

            if (isset($data['interests']) && is_array($data['interests'])) {
                // Générez les cases à cocher en fonction des données YAML
                foreach ($data['interests'] as $interest) {
                    echo '<input type="checkbox" name="interest[]" value="' . $interest . '" />' . ucfirst($interest) . '<br />';
                }
            } else {
                echo 'Aucune donnée d\'intérêt trouvée dans le fichier YAML.';
            }
            ?>
            </p>
            <?php
            echo '<p>'.($data['yourMessage'])." :".'<br />
                <textarea name="message" rows="6" cols="40" placeholder="Saisissez votre message ici"></textarea>
            </p>';?>
            <p>
                <input type="submit" value="Send" />
                <input type="reset" value="Clear" />
            </p>
        </form>
    </section>
            
</section>