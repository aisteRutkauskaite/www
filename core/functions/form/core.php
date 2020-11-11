<?php
function get_clean_input($form)
{
    $filter_params = [];

    foreach ($form['fields'] as $index => $input) {
        $filter_params[$index] = FILTER_SANITIZE_SPECIAL_CHARS;

    }
    return filter_input_array(INPUT_POST, $filter_params);
}

/**
 * Tikrinama pateikta forma pritaikant kiekvieno laukelio validatorius.
 *
 * @param array $form Formos masyvas.
 * @param array $form_values Išvalytos input'ų vertės.
 * @return bool
 */

function validate_form(array &$form, array $form_values): bool {
    $is_valid = true;

    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validators'] ?? [] as $function_name) {
            $field_is_valid = $function_name($form_values[$field_id], $field);

            if (!$field_is_valid) {
                $is_valid = false;
                break;
            }
        }
    }

    return $is_valid;
}

