<?php
/**
 * create navigation
 *
 * @return array|string[]
 */
function nav() {
    $nav = ['Home' => '/index.php'];
    if (is_logged_in()) {
        return $nav + [
                'Add' => '/admin/add.php',
                'My page' => '/admin/my.php',
                'Logout' => '/logout.php',
            ];
    } else {
        return $nav + [
                'Register' => '/register.php',
                'Login' => '/login.php',
            ];
    }
}


