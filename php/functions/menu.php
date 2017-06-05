<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function writeMenu($data) {
    echo '<ul class="left hide-on-med-and-down">';
    foreach ($data as $key => $value) {
        echo "\t";
        echo '<li><a id="' . $value['id'] . '" href="#">' . $value['Texto'] . '</a></li>';
        echo "\n";
    }
    echo '</ul>';

    echo '<ul id="nav-mobile01" class="side-nav hide-on-large-only">';
    foreach ($data as $key => $value) {
        echo "\t";
        echo '<li><a href="#">' . $value['Texto'] . '</a></li>';
        echo "\n";
    }
    echo '</ul>';
    
    echo '<a href="#" data-activates="nav-mobile01" class="button-collapse"><i class="material-icons">menu</i></a>';
}
