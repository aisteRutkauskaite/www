<?php
/**
 * Check if user is logged in
 *
 * @return bool
 */
function is_logged_in() {
    if ($_SESSION) {
            $db_data = file_to_array(DB_FILE);
            foreach ($db_data as $user) {
                if (($user['email'] === $_SESSION['email'])
                    && ($user['password'] === $_SESSION['password'])) {
                    return true;
                }
            }
        }
        return false;
}

/**
 * Function ends the session
 *
 * @param null $redirect
 */

function logout($redirected = null) {
    $_SESSION = [];
    session_destroy();
    if ($redirected) {
        header("location: $redirected");
    }
}
