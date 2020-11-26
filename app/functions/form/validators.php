<?php
/**
 * Check if email is available for registration, i.e. if it is not already taken
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool
{
    $fileDB = new FileDB(DB_FILE);
    $fileDB->load();
    if ($fileDB->getRowWhere('users',['email' => $field_value])) {
        $field['error'] = 'User jau egzistuoja';

        return false;
    };

    return true;
}

/**
 * Tikrina ar loginas ir slaptažodis atitinka jau priregistruotus
 *
 * @param array $field_value
 * @param array $field
 * @return bool
 */
function validate_login(array $field_value, &$field): bool
{
    $fileDB = new FileDB(DB_FILE);
    $fileDB->load();
    if ($fileDB->getRowWhere('users',[
        'email' => $field_value['email'],
        'password' => $field_value['password']
    ] )) {
        return true;
    };

    $field['error'] = 'Email arba slaptažodis neveikia';

    return false;
}