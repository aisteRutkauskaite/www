<?php
/**
 * Check if user is logged in
 *
 * @return bool
 */
function is_logged_in() {
    if ($_SESSION) {
        $fileDB = new FileDB(DB_FILE);
        $fileDB->load();
        return (bool) $fileDB->getRowWhere('users', [
            'email' => $_SESSION['email'],
            'password' => $_SESSION['password']
        ]);
    }
    return false;
}

/**
 * Function ends the session
 *
 * @param null $redirect
 */

function logout($redirected = null)
{
    $_SESSION = [];
    session_destroy();
    if ($redirected) {
        header("location: $redirected");
    }
}
