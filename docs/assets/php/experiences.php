<?php
    $data=yaml_parse_file('assets/yaml/experiences.yaml');?>

<section class="Experiences" id="experiences">

<?php
echo '<div class="ExpTitle">'.($data['title']).'</div>';?>
<div class="ExperiencesList">

    <div class="Experience1">

        <?php
        echo '<div class="ExperienceTitle">'.($data['poste1']).'</div>';?>
        <div class="Business">

            <?php
            echo '<div class="ExperienceBusiness">'.($data['entreprise1']).'</div>';?>
            <div class="ExperiencePeriod">Sept 2023 - Août 2025</div>
            
        </div>
        <div class="ExperienceLittleSeparator"></div>
        <div class="ExperienceTask">
            <?php
            echo '<p>'.($data['experiencetask1-1']).'</p>';?>
            <?php
            echo '<p>'.($data['experiencetask1-2']).'</p>';?>
            <?php '<p>'.($data['experiencetask1-3']).'</p>';?>
        </div>
        <div class="ExperienceBigSeparator"></div>

    </div>

    <div class="Experience2">

        <?php
        echo '<div class="ExperienceTitle">'.($data['poste2']).'</div>';?>
        <div class="Business">

            <?php
            echo '<div class="ExperienceBusiness">'.($data['entreprise2']).'</div>';?>
            <?php
            echo '<div class="ExperiencePeriod">'.($data['period2']).'</div>';?>
            
        </div>
        <div class="ExperienceLittleSeparator"></div>
        <div class="ExperienceTask">
            <?php 
            echo '<p class="ExperienceTask">'.($data['experiencetask2-1']).'</p>';?>
            <?php
            echo '<p class="ExperienceTask">'.($data['experiencetask2-2']).'</p>';?>
            <?php
            echo '<p class="ExperienceTask">'.($data['experiencetask2-3']).'</p>';?>
        </div>
        <div class="ExperienceBigSeparator"></div>

    </div>

    <div class="Experience3">

        <?php
        echo '<div class="ExperienceTitle">'.($data['poste3']).'</div>';?>
        <div class="Business">

            <?php
            echo '<div class="ExperienceBusiness">'.($data['entreprise3']).'</div>';?>
            <?php
            echo '<div class="ExperiencePeriod">'.($data['period3']).'</div>';?>
            
        </div>
        <div class="ExperienceLittleSeparator"></div>
        <div class="ExperienceTask">
            <?php
            echo '<p class="ExperienceTask">'.($data['experiencetask3-1']).'</p>';?>
            <?php
            echo '<p class="ExperienceTask">'.($data['experiencetask3-2']).'</p>';?>
            <?php
            echo '<p class="ExperienceTask">'.($data['experiencetask3-3']).'</p>';?>
        </div>
        <div class="ExperienceBigSeparator"></div>

    </div>

</div>

</section>
