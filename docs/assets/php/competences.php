<?php
    $data=yaml_parse_file('assets/yaml/competences.yaml');?>

<section class="Skills" id="competences">

<?php
    echo '<div class="SkillsTitle">'.($data['title']).'</div>';?>

<div class="ProgressBar1">

    <div class="progress-bar1">
        <div class="progress-fill1"></div>
        <?php
        echo '<div class="progress-text1">'.($data['niveau1']).'</div>';?>
    </div>
    <?php
    echo '<div class="SkillText">'.($data['competence1']).'</div>';?>

</div>

<div class="ProgressBar2">

    <div class="progress-bar2">
        <div class="progress-fill2"></div>
        <?php
        echo '<div class="progress-text2">'.($data['niveau2']).'</div>';?>
    </div>
    <?php
    echo '<div class="SkillText">'.($data['competence2']).'</div>';?>

</div>
        
<div class="ProgressBar3">

    <div class="progress-bar3">
        <div class="progress-fill3"></div>
        <?php
        echo '<div class="progress-text3">'.($data['niveau3']).'</div>';?>
    </div>
    <?php
    echo '<div class="SkillText">'.($data['competence3']).'</div>';?>

</div>

<div class="ProgressBar4">

    <div class="progress-bar4">
        <div class="progress-fill4"></div>
        <?php
        echo '<div class="progress-text4">'.($data['niveau4']).'</div>';?>
    </div>
    <?php
    echo '<div class="SkillText">'.($data['competence4']).'</div>';?>

</div>

</section>