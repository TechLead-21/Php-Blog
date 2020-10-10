<?php
include("data.php");

/**
 * Get all menus
 */
function menus() {
    global $menus;

    $allMenus = null;
    if (isset($menus) && count($menus) > 0) {
        foreach ($menus as $menu) {
           $allMenus .= createEachMenuItem($menu);
        }
    }
    return $allMenus;
}

function createEachMenuItem($menu){
    $menuBody = "<li class='nav-item'>\n";
    $menuBody .= "<a class='nav-link' href='" . $menu['url'] . "'>\n";
    $menuBody .= $menu['title'];
    $menuBody  .= "</a>\n";
    $menuBody .= "</li>\n";
    return $menuBody;

}
