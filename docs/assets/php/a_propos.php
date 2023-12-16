<?php
    $data=yaml_parse_file('assets/yaml/a_propos.yaml');?>

<!-- <div class="EmptyBlocTop2"></div> -->

<section class="About" id="a-propos"> 

    <table class="AboutTable">
        <tr>
            <?php
                echo '<td class="Line1">'.($data['title']).'</td>';?>
            </tr>
            <tr>
                <td class="Line2">
                    <?php
                        echo '<p>'.($data['paragraphe1']).'</p>';?>
                        </br>
                    <?php
                        echo '<p>'.($data['paragraphe2']).'</p>';?>
                        </br>
                    <?php
                        echo '<p>'.($data['paragraphe3']).'</p>';?>
                        </br>
                    <?php
                        echo '<p>'.($data['paragraphe4']).'</p>';?>
                    </td>
                </tr>
        </table>
        
</section