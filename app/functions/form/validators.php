<?php
/**
 * Check if email is available for registration, i.e. if it is not already taken
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_user_unique(string $field_value, array &$field): bool {
    $db_data = file_to_array(DB_FILE);
    var_dump($db_data);
    var_dump($field);
    foreach ($db_data as $entry) {
        if ($field_value === $entry['email']) {
            $field['error'] = 'Email is already taken. Enter new email.';
            return false;
        }
    }
    return true;
}
/**
 * Tikrina ar loginas ir slaptažodis atitka jau priregistruotus
 *
 * @param $field_value
 * @param array $field
 * @return bool
 */
function validate_login( $field_value,  &$field): bool {
    $data = file_to_array(DB_FILE);

    foreach ($data as $entry) {
        if ($entry['email'] === $field_value['email']
            && $entry['password'] === $field_value['password'] ) {
            return true;
        }
    }
    $field['error'] = 'Email arba slaptažodis neveikia';
    return  false;
}