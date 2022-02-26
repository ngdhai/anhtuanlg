<?php

/*

type: layout

name: Footer

description: Footer navigation

*/

?>

    <?php
    $menu_filter['ul_class'] = 'userful-links';
    $menu_filter['li_class'] = '';
    $menu_filter['a_class'] = '';
   


    $mt = menu_tree($menu_filter);


    if ($mt != false) {
        print($mt);
    } else {
        print lnotif("There are no items in the menu <b>" . $params['menu-name'] . '</b>');
    }
    ?>

