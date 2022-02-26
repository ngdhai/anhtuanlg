<?php

/*

type: layout

name: Default

description: List Navigation

*/

?>

<?php
    $params['ul_class'] = '';
    $params['ul_class_deep'] = '';
    $params['li_class'] = '';
    $params['li_submenu_class'] = 'dropdown';
    $params['a_class'] = '';
    $params['li_class_deep'] = '';
    $params['li_submenu_a_class'] = '';
?>
   
<nav class="main-menu" id="mainMenuHome3">
     <?php category_tree($params); ?>
</nav>