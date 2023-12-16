<?php
    $data=yaml_parse_file('assets/yaml/formation.yaml');?>

<section class="Formations" id="formation">

<?php
echo '<div class="FormationTitle">'.($data['title']).'</div>';?>
<section class="Formation1">

    <section class="School">

        <?php
        echo '<div class="Formation">'.($data['formation1']).'</div>'?>
        <?php
        echo '<div class="FormationPeriod">'.($data['period1']).'</div>'?>
        
    </section>
    <div class="ExperienceLittleSeparator"></div>
    <?php
    echo '<p class="FormationExperience">'.($data['formationexperience1']).'</p>';?>

</section>

<section class="Formation2">

    <?php
    echo '<div class="Formation">'.($data['formation2']).'</div>';?>
    <?php
    echo '<div class="FormationPeriod">'.($data['period2']).'</div>';?>
    <div class="ExperienceLittleSeparator"></div>
    <?php
    echo '<p class="FormationExperience">'.($data['formationexperience2']).'</p>';?>
    <div class="ExperienceBigSeparator"></div>
</section>

<section class="Formation3">

    <?php
    echo '<div class="Formation">'.($data['formation3']).'</div>';?>
    <?php
    echo '<div class="FormationPeriod">'.($data['period3']).'</div>';?>
    <div class="ExperienceLittleSeparator"></div>
    <?php
    echo '<p class="FormationExperience">'.($data['formationexperience3']).'</p>';?>
    <div class="ExperienceBigSeparator"></div>
</section>

</section>
